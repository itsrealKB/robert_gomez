<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCmsController extends Controller
{
    public function index()
    {
        return view('screens.admin.cms.index');
    }
}
