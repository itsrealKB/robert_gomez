<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // dd(auth()->user()->assignments);

        $assignments = auth()->user()->assignments()->orderBy('id','desc')->get();

        return view('screens.web.index',get_defined_vars());
    }

    public function searchAssignment($query)
    {
        $assignments = auth()->user()->assignments()->where('id', $query)
                    ->orWhere('company', 'like', "%{$query}%")
                    ->orWhere('claim', 'like', "%{$query}%")
                    ->get();

        return response()->json([
            'assignments' => $assignments
        ]);
    }
}
