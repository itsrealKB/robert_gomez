<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ClientForm;
use App\Models\GeneralForm;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function index()
    {
        $clientForms = ClientForm::all();
        $generalForms = GeneralForm::all();
        return view('screens.web.resource.index', get_defined_vars());
    }
}
