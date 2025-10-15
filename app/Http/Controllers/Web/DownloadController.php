<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\AssignmentDocument;
use App\Models\ClientForm;
use App\Models\GeneralForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use ZipArchive;

class DownloadController extends Controller
{
    public function general_forms($id): Response
    {
        $generalForm = GeneralForm::findOrFail($id);
        // dd();

        // CHANGE THIS LINE: Use public_path() instead of storage_path()
        $filePath = public_path('files/general-forms/' . $generalForm->file);

        return response()->download($filePath, $generalForm->file);


        // abort(404, 'File not found!');
    }

    public function client_forms($id): Response
    {
        $clientForm = ClientForm::findOrFail($id);


        $filePath = public_path('files/client-forms/' . $clientForm->file);

        return response()->download($filePath, $clientForm->file);
    }
    public function assignment_docs($id): Response
    {
        $assignmentDocs = AssignmentDocument::findOrFail($id);

        $filePath = public_path('files/client-forms/' . $assignmentDocs->file);

        return response()->download($filePath, $assignmentDocs->file);
    }

    public function all_assignment_docs($id)
{

    set_time_limit(300);

    $assignment = Assignment::find($id);


    $tmpFile = tempnam(sys_get_temp_dir(),'zip_');
    $zip = new ZipArchive;
    $zip->open($tmpFile, ZipArchive::CREATE);

    foreach($assignment->docs as $doc){

        $filePath = $doc->getFile(); 

        if(!empty($filePath) && file_exists($filePath)){

            $zip->addFile($filePath, basename($filePath));
        }
    }

    $zip->close();

    return response()->download($tmpFile, 'assignment-docs.zip', [
        'Content-Type' => 'application/zip',
    ]);
}
}
