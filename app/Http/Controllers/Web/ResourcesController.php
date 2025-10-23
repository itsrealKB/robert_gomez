<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\ClientForm;
use App\Models\GeneralForm;

class ResourcesController extends Controller
{
    public function index()
    {
        $clientForms = ClientForm::all();
        $generalForms = GeneralForm::all();
        $assignments = Assignment::where('user_id', auth()->id())
                    ->whereHas('docs')
                    ->with('docs')
                    ->get();
        $docs = [];

        foreach ($assignments as  $assignment) {
            foreach ($assignment->docs as  $doc) {
                $docs[] = [
                    'title'=> "Assignment Docs",
                    'img'=> $doc->file,
                    'date'=> $doc->created_at->format('m/d/Y'),
                ];
            }
        }

        return view('screens.web.resource.index', get_defined_vars());
    }
}
