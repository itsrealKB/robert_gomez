<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use Illuminate\Http\Request;

class AccountingController extends Controller
{
    public function index()
    {
        return view('screens.admin.accounts.index');
    }

    public function show(Request $request)
    {

        try {
            $pendingTotal = Assignment::where('status', 'pending')
                ->whereNotNull('user_id')
                ->whereDate('created_at', '>=', $request->start_date)
                ->whereDate('created_at', '<=', $request->end_date)
                ->withSum('assignment_payments', 'price')
                ->get()
                ->sum('assignment_payments_sum_price');

            $unAssignedTotal = Assignment::whereNull('user_id')
                ->whereDate('created_at', '>=', $request->start_date)
                ->whereDate('created_at', '<=', $request->end_date)
                ->withSum('assignment_payments', 'price')
                ->get()
                ->sum('assignment_payments_sum_price');

            $assignments = Assignment::whereDate('created_at', '>=', $request->start_date)
                ->whereDate('created_at', '<=', $request->end_date)
                ->with('assignment_payments')
                ->get();

            $results = [
                'pending' => $pendingTotal,
                'unassigned' => $unAssignedTotal,
                'assignments' => $assignments,
            ];

            return response()->json([
                'status' => true,
                'message' => "Accounting Reports Found!",
                'data' => $results,
            ], 200);

        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => $e,
            ], 404);
        }
    }
}
