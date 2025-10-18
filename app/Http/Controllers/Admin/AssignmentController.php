<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\GeoCodeHelper;
use App\Helpers\Haversine;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Assignment\FilesRequest;
use App\Http\Requests\Admin\Assignment\Payment\StoreRequest as PaymentStoreRequest;
use App\Http\Requests\Admin\Assignment\StoreRequest;
use App\Imports\AssignmentsImport;
use App\Models\Assignment;
use App\Models\AssignmentDocument;
use App\Models\AssignmentPayment;
use App\Models\ClientForm;
use App\Models\GeneralForm;
use App\Models\Guideline;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class AssignmentController extends Controller
{
    public function index()
    {
        $assignments = Assignment::where('user_id', null)->where('status', 'pending')->latest()->orderBy('id', 'desc')->get();
        $users = User::where('role', 'agent')->get();

        return view('screens.admin.assignment.index', get_defined_vars());
    }

    public function store(StoreRequest $request): JsonResponse
    {
        $assignment = Assignment::create([
            'company' => $request->insurance,
            'owner' => $request->owner,
            'owner_phone' => $request->owner_phone,
            'owner_email' => $request->owner_email,
            'claim' => $request->claim,
            'claim_type' => $request->claim_type,
            'loss_type' => $request->loss_type,
            'vehicle_location' => $request->vehicle_location,
            'appointment_date' => $request->appointment,
        ]);


        return response()->json([
            'status' => 'true',
            'message' => 'assignment added successfully'
        ]);
    }

    public function assignAgent(Request $request)
    {
        $assignment = Assignment::find($request->assignment);

        $assignment->update([
            'user_id' => $request->agent,
            'status' => 'pending'
        ]);

        $assignment->assignment_logs()->create([
            'user_id' => $assignment->user_id
        ]);


        return response()->json([
            'status' => true,
            'message' => 'assign agent successfully.',
            'assign_status' => $assignment->status,

        ]);
    }

    public function edit($id) {}


    public function update($id) {}

    public function task()
    {
        $assignments = Assignment::whereNotNull('user_id')->where('status', 'pending')->orderBy('id', 'desc')->get();
        $users = User::where('role', 'agent')->get();

        return view('screens.admin.assignment.task', get_defined_vars());
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:csv,xlsx'
        ]);

        \Log::info('Uploaded file MIME type: ' . $request->file('file')->getClientMimeType());
        \Log::info('Uploaded file extension: ' . $request->file('file')->getClientOriginalExtension());

        DB::beginTransaction();

        try {
            $import = new AssignmentsImport();
            Excel::import($import, $request->file('file'));

            $successCount = $import->getSuccessCount();
            $errors = $import->getErrors();

            if ($successCount === 0 && empty($errors)) {
                DB::rollBack();
                $errorMessage = 'The uploaded CSV file is empty. Please upload a file with valid data.';

                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => $errorMessage,
                    ], 422);
                }

                return back()->with('error', $errorMessage);
            }
            if ($successCount === 0 && !empty($errors)) {
                DB::rollBack();
                $errorCsvPath = $this->generateErrorCsv($errors);
                $errorMessage = 'No rows were imported due to validation errors. Download the error CSV for details.';

                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => $errorMessage,
                        'error_csv' => $errorCsvPath,
                        'success_count' => 0,
                    ], 422);
                }

                return back()->with([
                    'error' => $errorMessage,
                    'error_csv' => $errorCsvPath,
                    'success_count' => 0,
                ]);
            }


            DB::commit();


            if (!empty($errors)) {
                $errorCsvPath = $this->generateErrorCsv($errors);
                $message = "Imported {$successCount} assignments successfully, but " . count($errors) . " rows had errors. Download the error CSV for details";

                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => $message,
                        'error_csv' => $errorCsvPath,
                        'success_count' => $successCount,
                        'error_count' => count($errors),
                        'type' => 'warning',
                    ], 206);
                }

                return back()->with([
                    'warning' => $message,
                    'error_csv' => $errorCsvPath,
                    'success_count' => $successCount,
                ]);
            }

            $message = "Imported {$successCount} assignments successfully!";

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => $message,
                    'success_count' => $successCount,
                ], 201);
            }

            return redirect()->back()->with('success', $message);
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Import error: ' . $e->getMessage() . "\n" . $e->getTraceAsString());
            $errorMessage = $e->getMessage() === 'Could not find zip member'
                ? 'Invalid or corrupted XLSX file. Please upload a valid CSV or XLSX file.'
                : 'Failed to process the file: ' . $e->getMessage();

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $errorMessage,
                ], 400);
            }

            return back()->with('error', $errorMessage);
        }
    }

    private function generateErrorCsv($errors)
    {
        $columns = ['insurance', 'owner_name', 'owner_phone', 'owner_email', 'claim_number', 'claim_type', 'loss_type', 'vehicle_location', 'appointment_date'];
        $headers = array_merge(['Row'], $columns, ['Errors']);
        $csvData = implode(',', $headers) . "\n";

        foreach ($errors as $error) {
            $rowData = [$error['row']];
            foreach ($columns as $column) {
                $value = isset($error['values'][$column]) ? str_replace([",", "\n", "\r"], ' ', $error['values'][$column]) : '';
                $rowData[] = $value;
            }
            $errorsColumn = implode(', ', $error['errors']);
            $rowData[] = str_replace([",", "\n", "\r"], ' ', $errorsColumn);
            $csvData .= implode(',', $rowData) . "\n";
        }

        $fileName = 'assignment_import_errors_' . now()->timestamp . '.csv';
        $path = public_path('Uploads/error_logs/' . $fileName);

        if (!file_exists(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }

        file_put_contents($path, $csvData);

        return asset('Uploads/error_logs/' . $fileName);
    }

    public function completeAssign()
    {

        $assignments = Assignment::where('status', 'completed')->orderBy('updated_at', 'desc')->get();

        $users = User::where('role', 'agent')->get();


        return view('screens.admin.assignment.complete', get_defined_vars());
    }

    // View Assignment Map
    public function assignmentsMap()
    {
        $appraisers = User::where([
                ['role' , 'agent']
            ])->get();

        return view('screens.admin.assignment.map', compact('appraisers'));
    }

    public function findAssignmentMap(Request $request){

        // if($request->zip_code){
        //     $request->validate(
        //         [
        //             'zip_code' => 'exists:users,zip_code'
        //         ],
        //         [
        //             'zip_code.exists' => "This ($request->zip_code) Zip Code Is Not In Our Data"
        //         ]
        //     );
        // }

        $assignments = Assignment::when($request->search_by_date === 'yes',
            function ($query) use ($request) {
                        return $query->whereDate('appointment_date', '>=', $request->start_date)
                            ->whereDate('appointment_date', '<=', $request->end_date);
                }
            )
            ->when($request->show_completed === 'yes',
            function($query) {
                    return $query->where('status','completed');
                }
            )
            ->when($request->submitted_files === 'yes',
                function($query){
                    return $query->whereHas('docs');
                }
            )
            ->when($request->submitted_files === 'no',
                function($query){
                    return $query->whereDoesntHave('docs');
                }
            )
            ->when($request->filled('appraisers'),
                function($query) use ($request) {
                    return $query->whereIn('user_id', $request->appraisers);
                }
            )
            ->with('user')
            ->get();

        $users = [];

        // When No Appraisers Found - Without Zip Code.
        if($assignments->isEmpty())
        {
            return response()->json([
                'status' => false,
                'message' => 'No Appraisers Data Found With Your Given Details',
                'data' => []
            ],200);
        }

        // Appraisers When No Zip Code Provided.
        if(!$request->filled('zip_code'))
        {
            foreach($assignments as $assignment){
                if($assignment->user){
                    $userId = $assignment->user->id;
                    // Check If The Appraiser Aleardy Exists
                    if(!isset($users[$userId])){
                        $user = $assignment->user->toArray();
                        $user['pendingAssignments'] = $assignment->user->pendingAssignments();
                        $users[$userId] = $user;
                    }

                }
            }

            // If The Appraiser's Found.
            if(count($users) > 0){
                return response()->json([
                    'status' => true,
                    'message' => 'Appraisers Found!',
                    'data' => $users
                ],200);
            }
            // If The Appraiser's Not Found.
            else{
                return response()->json([
                    'status' => false,
                    'message' => "No Appraisers Found!",
                    'data' => $users
                ],200);
            }
        }
        // Appraisers When Zip Code Provided.
        else{
            // Getting Lat, Long Of Given Zip Code
            $loc = GeoCodeHelper::geocodeZipCode($request->zip_code);

            foreach($assignments as $assignment){
                if($assignment->user){
                    $userId = $assignment->user->id;
                    // Getting Appraiser's Lat & Long.
                    $userLoc = ['latitude' => $assignment->user->latitude, 'longitude' => $assignment->user->longitude];
                    // Calculating the distance b/w the given zip code and user's zip code.
                    $distance = Haversine::calculate($loc['latitude'], $loc['longitude'], $userLoc['latitude'], $userLoc['longitude']);

                    // Checking If The Appraiser Is In Radius Of The Given Zip Code & Storing Them In An Array.
                    if ($distance <= $request->radius) {
                        // Check If The Appraiser Aleardy Exists
                        if(!isset($users[$userId])){
                            $user = $assignment->user->toArray();
                            $user['pendingAssignments'] = $assignment->user->pendingAssignments();
                            $users[$userId] = $user;
                        }
                    }
                }
            }

            // If The Appraiser's Found.
            if(count($users) > 0){
                return response()->json([
                    'status' => true,
                    'message' => 'Appraisers Found!',
                    'data' => $users
                ],200);
            }
            // If The Appraiser's Not Found.
            else{
                return response()->json([
                    'status' => false,
                    'message' => "No Appraisers Found Around $request->radius KM Radius Of This ($request->zip_code) Zip Code!",
                    'data' => $users
                ],200);
            }
        }

    }

    // Locatons
    public function getZipCode($location)
    {
        dd(GeoCodeHelper::geocodeZipCode($location));
    }

    public function searchAssign(Request $request)
    {


        $searchQuery = $request->search_query;

        $assignments = Assignment::where('claim', 'like', "%{$searchQuery}%")
            ->orWhere('owner', 'like', "%{$searchQuery}%")->take(20)
            ->get();

        $assignments = count($assignments) == 0 ? 'No Results Found' : $assignments;

        $users = User::where('role', 'agent')->get();

        $html = view('includes.web.assignment-dropdown', get_defined_vars())->render();

        return response()->json([
            'status' => 'true',
            'assignments' => $assignments,
            'message' => 'assignments searched successfully.',
            'users' => $users,
            'html' => $html
        ]);
    }

    public function detail($id)
    {
        $assignment = Assignment::where('id', $id)
                    ->with('assignment_payments')->first();

        $assignmentDetail = Assignment::where('id', $id)->where('status', 'completed')->first();

        $generalForms = GeneralForm::all();

        $clientForms = ClientForm::all();

        $guideline = Guideline::latest()->first();

        return view('screens.admin.assignment.detail', get_defined_vars());
    }

    public function files($id){

        $assignment = Assignment::where('id',$id)
                    ->with('docs')->first();
        $docs = $assignment->docs;

        $assignmentDetail = Assignment::where('id', $id)->where('status', 'completed')->first();

        $generalForms = GeneralForm::all();

        $clientForms = ClientForm::all();

        $guideline = Guideline::latest()->first();

        return view('screens.admin.assignment.files', get_defined_vars());
    }

    public function updateFile($id, FilesRequest $request)
    {

        $document = AssignmentDocument::find($id);
        // dd($document);

        if ($request->has('file')) {

            $timestamp = time();
            $randomString = Str::random(8);
            $extension = $request->file->getClientOriginalExtension();
            $fileName = "doc_{$timestamp}_{$randomString}.{$extension}";

            $request->file->move(public_path('assignment-docs/'), $fileName);

            $document->update([
                'file' => $fileName,
                'file_type' => $extension
            ]);
        }



        return response()->json([
            'status' => 'true',
            'message' => 'file Uploaded successfully.',
        ]);
    }

    public function destroy(Request $request)
    {

        try {
            $ids = $request->input('ids', [$request->input('id')]);
            $ids = array_filter($ids, fn($id) => !is_null($id));

            if (empty($ids)) {
                return response()->json([
                    'status' => false,
                    'message' => 'No IDs provided for deletion.'
                ], 400);
            }

            DB::transaction(function () use ($ids) {
                AssignmentDocument::whereIn('id', $ids)->delete();
            });


            return response()->json([
                'status' => true,
                'message' => count($ids) > 1 ? 'Documents deleted successfully.' : 'Document deleted successfully.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to delete document(s). Please try again.'
            ], 500);
        }
    }

    public function paymentDetailStore(PaymentStoreRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $assignment = Assignment::find($request->assignment_id);

        $recordsToCreate = array_map(function ($billingType, $miles, $price) {
            return [
                'billing_type' => $billingType,
                'miles' => $miles,
                'price' => $price,
            ];
        }, $validated['billing_type'], $validated['miles'], $validated['price']);

        $recordsToCreate = array_filter($recordsToCreate, function ($record) {
            return !empty($record['billing_type']) || !empty($record['miles']) || !empty($record['price']);
        });

        DB::beginTransaction();

        try {
            if (!empty($recordsToCreate)) {
                $assignment->assignment_payments()->createMany($recordsToCreate);
            }

            DB::commit();

            return response()->json([
                'status' => 'true',
                'message' => 'Payment Details Updated Successfully.'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => 'false',
                'message' => 'Failed to process payment details.'
            ], 500);
        }
    }

    public function assignmentPaymentEdit($id)
    {

        $payment = AssignmentPayment::find($id);

        return response()->json([
            'status' => 'true',
            'message' => 'payment fetched successfully',
            'assignment' => $payment
        ]);
    }

    public function assignmentPaymentUpdate($id, Request $request)
    {

        $payment = AssignmentPayment::find($id);

        $payment->update([
            'billing_type' => $request->billing_type,
            'price' => $request->price,
            'miles' => $request->miles
        ]);

        return response()->json([
            'status' => 'true',
            'message' => 'payment Updated Successfully.'
        ]);
    }

    public function assignmentPaymentDestroy(Request $request)
    {
        $payment = AssignmentPayment::findOrFail($request->id);
        $payment->delete();

        return response()->json(['success' => true, 'message' => 'Payment deleted successfully']);
    }
}
