<?php

namespace App\Imports;

use App\Models\Assignment;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Carbon\Carbon;

class AssignmentsImport implements ToCollection, WithHeadingRow
{
    use SkipsFailures;

    protected $errors = [];
    protected $successCount = 0; // Add success counter

    /**
     * Parse appointment_date and handle Excel numeric timestamps
     */
  private function parseAppointmentDate($value)
{
    \Log::debug('Raw appointment_date: ' . (string) $value);

    // Handle Excel numeric timestamp (e.g., 45992.4375)
    if (is_numeric($value) && $value > 10000) {
        try {
            // Fix: Use the correct Excel base date and timezone handling
            $excelBaseDate = Carbon::create(1899, 12, 30, 0, 0, 0, 'UTC'); // Excel's actual base date
            $days = floor($value);
            $fraction = $value - $days;
            $hours = floor($fraction * 24);
            $minutes = floor(($fraction * 24 - $hours) * 60);
            $seconds = floor((($fraction * 24 - $hours) * 60 - $minutes) * 60);

            // Create the date by adding to base, then set your app's timezone
            $date = $excelBaseDate->copy()
                ->addDays($days)
                ->setTime($hours, $minutes, $seconds)
                ->setTimezone(config('app.timezone')); // Use your app's timezone

            $formatted = $date->format('m/d/Y h:i:s A');
            \Log::debug('Parsed numeric appointment_date: ' . $formatted . ' (UTC: ' . $date->clone()->setTimezone('UTC')->format('Y-m-d H:i:s') . ')');

            return [
                'date' => $date,
                'formatted' => $formatted,
            ];
        } catch (\Exception $e) {
            \Log::debug('Failed to parse numeric appointment_date: ' . $e->getMessage());
            return null;
        }
    }

    // Handle string dates (add this if you want to support both numeric and string)
    if (is_string($value) && !empty($value)) {
        try {
            $formats = [
                'm/d/Y h:i:s A',  // 12/1/2025 10:30:00 AM
                'm/d/Y H:i:s',    // 12/01/2025 10:30:00
                'Y-m-d H:i:s',    // 2025-12-01 10:30:00
                'm/d/Y',          // 12/1/2025
                'Y-m-d'           // 2025-12-01
            ];

            foreach ($formats as $format) {
                $date = Carbon::createFromFormat($format, $value);
                if ($date && $date->format($format) === $value) {
                    $date = $date->setTimezone(config('app.timezone'));
                    $formatted = $date->format('m/d/Y h:i:s A');
                    \Log::debug('Parsed string appointment_date: ' . $formatted);
                    return [
                        'date' => $date,
                        'formatted' => $formatted,
                    ];
                }
            }
        } catch (\Exception $e) {
            \Log::debug('Failed to parse string appointment_date: ' . $e->getMessage());
        }
    }

    return null;
}

    public function collection(Collection $rows)
    {
        $required = ['insurance', 'owner_name', 'owner_phone', 'owner_email', 'claim_number', 'claim_type', 'loss_type', 'vehicle_location', 'appointment_date'];
        $currentDateTime = Carbon::now('Asia/Karachi');

        foreach ($rows as $key => $row) {
            try {
                // Skip empty rows (only process if any of the 9 required columns have non-empty trimmed value)
                $hasData = false;
                foreach ($required as $field) {
                    $value = $row[$field] ?? '';
                    if (!is_null($value) && trim((string) $value) !== '') {
                        $hasData = true;
                        break;
                    }
                }
                if (!$hasData) {
                    continue;
                }

                // Fix owner_phone reading issue: force numeric values to integer then string to preserve exact digits
                if (isset($row['owner_phone']) && is_numeric($row['owner_phone'])) {
                    $row['owner_phone'] = (string) (int) $row['owner_phone'];
                    \Log::debug('Fixed owner_phone from numeric: ' . $row['owner_phone']);
                }

                $rowErrors = [];
                $rowValues = [];

                // Collect values for CSV (only from the 9 required columns; ignore extras)
                foreach ($required as $field) {
                    $value = $row[$field] ?? '';
                    if ($field === 'appointment_date' && $value) {
                        $parsed = $this->parseAppointmentDate($value);
                        $rowValues[$field] = $parsed ? $parsed['formatted'] : (string) $value;
                    } else {
                        $rowValues[$field] = (string) $value;
                    }
                }

                // Validate required fields (only the 9 columns)
                foreach ($required as $field) {
                    if (!isset($row[$field]) || trim((string) $row[$field]) === '') {
                        $rowErrors[] = "The {$field} field is required.";
                    }
                }

                // owner_phone validation
                if (isset($row['owner_phone']) && trim((string) $row['owner_phone']) !== '') {
                    $phone = trim((string) $row['owner_phone']);
                    if (!preg_match('/^[\+\-\(\)0-9\s]*$/', $phone)) {
                        $rowErrors[] = "The owner_phone is invalid";
                    } else {
                        $digits = preg_replace('/[^0-9]/', '', $phone);
                        if (strlen($digits) < 8 || strlen($digits) > 15) {
                            $rowErrors[] = "The owner_phone is invalid";
                        }
                    }
                }

                // owner_email validation
                if (isset($row['owner_email']) && trim((string) $row['owner_email']) !== '' && !filter_var($row['owner_email'], FILTER_VALIDATE_EMAIL)) {
                    $rowErrors[] = "The owner_email must be a valid email.";
                }

                // appointment_date validation
                if (isset($row['appointment_date']) && trim((string) $row['appointment_date']) !== '') {
                    $parsed = $this->parseAppointmentDate($row['appointment_date']);
                    if (!$parsed) {
                        $rowErrors[] = "The appointment_date must be a valid datetime (e.g., 12/1/2025 10:30:00 AM).";
                    } else {
                        $date = $parsed['date'];
                        if ($date->lessThanOrEqualTo($currentDateTime)) {
                            $rowErrors[] = "The appointment_date must be a future date and time.";
                        }
                    }
                }

                // Formula detection (only on the 9 required columns)
                foreach ($required as $column) {
                    $value = $row[$column] ?? '';
                    if (is_string($value) && str_starts_with(trim($value), '=')) {
                        $rowErrors[] = "Formula detected in column '{$column}'. Remove all formulas before uploading.";
                    }
                }

                // Check claim_number uniqueness against the 'claim' column in database
                if (empty($rowErrors) && isset($row['claim_number']) && trim((string) $row['claim_number']) !== '') {
                    $claimValue = trim($row['claim_number']);
                    $existingClaim = Assignment::where('claim', $claimValue)->exists();
                    if ($existingClaim) {
                        $rowErrors[] = "The claim_number '{$claimValue}' already exists in the database and must be unique.";
                    }
                }

                // If errors, collect them (skip creation)
                if (!empty($rowErrors)) {
                    $this->errors[] = [
                        'row' => $key + 2,
                        'values' => $rowValues,
                        'errors' => $rowErrors,
                    ];
                    \Log::warning('Row ' . ($key + 2) . ' failed validation: ' . implode(', ', $rowErrors));
                    continue;
                }

                // Parse appointment_date for storage
                $appointmentDate = $this->parseAppointmentDate($row['appointment_date']);
                if (!$appointmentDate) {
                    $this->errors[] = [
                        'row' => $key + 2,
                        'values' => $rowValues,
                        'errors' => ['The appointment_date must be a valid datetime (e.g., 12/1/2025 10:30:00 AM).'],
                    ];
                    \Log::warning('Row ' . ($key + 2) . ' failed validation: Invalid appointment_date format.');
                    continue;
                }

                // Create assignment (only using the 9 columns)
                Assignment::create([
                    'company' => trim($row['insurance']),
                    'owner' => trim($row['owner_name']),
                    'owner_phone' => trim($row['owner_phone']),
                    'owner_email' => trim($row['owner_email']),
                    'claim' => trim($row['claim_number']),
                    'claim_type' => trim($row['claim_type']),
                    'loss_type' => trim($row['loss_type']),
                    'vehicle_location' => trim($row['vehicle_location']),
                    'appointment_date' => $appointmentDate['date'],
                ]);

                $this->successCount++; // Increment success counter

            } catch (\Exception $e) {
                $rowValues = [];
                foreach ($required as $field) {
                    $value = $row[$field] ?? '';
                    if ($field === 'appointment_date' && $value) {
                        $parsed = $this->parseAppointmentDate($value);
                        $rowValues[$field] = $parsed ? $parsed['formatted'] : (string) $value;
                    } else {
                        $rowValues[$field] = (string) $value;
                    }
                }
                $this->errors[] = [
                    'row' => $key + 2,
                    'values' => $rowValues,
                    'errors' => ['Row processing failed: ' . $e->getMessage()],
                ];
                \Log::error('Error processing row ' . ($key + 2) . ': ' . $e->getMessage());
                continue;
            }
        }
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getSuccessCount()
    {
        return $this->successCount;
    }
}
