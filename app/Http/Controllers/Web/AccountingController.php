<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\User;
use Illuminate\Http\Request;

class AccountingController extends Controller
{
    public function index()
    {
        return view('screens.web.accounts.index');
    }

    public function showAccounting($id, Request $request)
    {
        $user = User::findOrFail($id);

        try {
            // Getting Total Amount Of Pending Assignments.
            $pendingTotal = $user->assignments()
                ->where('status', 'pending')
                ->whereDate('created_at', '>=', $request->start_date)
                ->whereDate('created_at', '<=', $request->end_date)
                ->withSum('assignment_payments', 'price')
                ->get()
                ->sum('assignment_payments_sum_price');

            // Getting Total Amount Of Rejected Assignments.
            $rejectedTotal = Assignment::whereDate('created_at', '>=', $request->start_date)
                ->whereDate('created_at', '<=', $request->end_date)
                ->whereHas('assignment_logs', function ($query) use ($user) {
                    // Only include if the latest log from this user is a rejection
                    $query->where('user_id', $user->id)
                        ->where('is_accept', 0)
                        ->where('created_at', function ($q) use ($user) {
                        $q->selectRaw('MAX(created_at)')
                            ->from('assignment_logs')
                            ->whereColumn('assignment_id', 'assignments.id')
                            ->where('user_id', $user->id);
                    });
                })
                ->distinct()
                ->withSum('assignment_payments', 'price')
                ->get()
                ->sum('assignment_payments_sum_price');

            if ($pendingTotal == 0 && $rejectedTotal == 0) {
                return response()->json([
                    'status' => false,
                    'message' => "Accounting Reports Not Found!",
                ], 404);
            } else {

                // Pending & Rejected Assignments
                // $assignments = Assignment::whereDate('created_at', '>=', $request->start_date)
                //     ->whereDate('created_at', '<=', $request->end_date)
                //     ->where(function ($query) use ($user) {
                //         $query->where(function ($q) use ($user) {
                //             $q->where('status','pending')
                //                 ->where('user_id', $user->id);
                //         })->orWhereHas('assignment_logs', function ($q) use ($user) {
                //             $q->where('is_accept', 0)
                //                 ->where('user_id', $user->id);
                //         });
                //     })
                //     ->with('assignment_payments')
                //     ->distinct()
                //     ->get()
                //     ->map(function ($assignment) use ($user) {
                //         // Determine status for each assignment
                //         $isRejected = $assignment->assignment_logs
                //             ->where('user_id', $user->id)
                //             ->where('is_accept', 0)
                //             ->isNotEmpty();

                //         $assignment->status = $isRejected ? 'rejected' : 'pending';
                //         return $assignment;
                //     });

                // dd($assignments);

                $results = [
                    'pending' => $pendingTotal,
                    'rejected' => $rejectedTotal,
                ];

                return response()->json([
                    'status' => true,
                    'message' => "Accounting Reports Found!",
                    'data' => $results,
                ], 200);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e,
            ], 404);
        }

    }
}
