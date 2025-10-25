<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assignment;

class HomeController extends Controller
{
    public function index()
    {
        $assignedCount = Assignment::whereNotNull('user_id')->count();
        $unassignedCount = Assignment::whereNull('user_id')->count();
        $completedCount = Assignment::whereNotNull('user_id')
            ->where('status','completed')
            ->count();

        $assignedAmount = Assignment::whereNotNull('user_id')
            ->withSum('assignment_payments', 'price')
            ->get()
            ->sum('assignment_payments_sum_price');

        $unassignedAmount = Assignment::whereNull('user_id')
            ->withSum('assignment_payments', 'price')
            ->get()
            ->sum('assignment_payments_sum_price');

        $completedAmount = Assignment::whereNotNull('user_id')
            ->where('status','completed')
            ->withSum('assignment_payments', 'price')
            ->get()
            ->sum('assignment_payments_sum_price');

        return view('screens.admin.index',get_defined_vars());
    }
}
