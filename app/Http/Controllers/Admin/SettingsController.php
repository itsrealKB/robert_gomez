<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ClientForm\StoreRequest;
use App\Http\Requests\Admin\ClientForm\UpdateRequest;
use App\Models\ClientForm;
use App\Models\GeneralForm;
use App\Models\Guideline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function index()
    {
        return view('screens.admin.settings.index');
    }

    public function guidelines()
    {

        $guideline = Guideline::latest()->first();

        return view('screens.admin.settings.guidelines', get_defined_vars());
    }
    // public function generalForms()
    // {
    //     return view('screens.admin.settings.general-forms');
    // }
    public function clientForms()
    {

        $clientForms = ClientForm::all();

        return view('screens.admin.settings.client-forms', get_defined_vars());
    }
    public function storeClientForm(StoreRequest $request)
    {
        if ($request->has('file')) {
            $fileName = time() . '.' . $request->file->getClientOriginalExtension();

            $request->file->move(public_path('files/client-forms/'), $fileName);
        }


        $client = ClientForm::create([
            'label' => $request->label,
            'file' => $fileName
        ]);

        return response()->json([
            'status' => 'true',
            'message' => 'Client Form Stored Successfully.'
        ]);
    }

    public function editClientForms($id)
    {

        $clientForm = ClientForm::find($id);

        return response()->json([
            'status' => 'true',
            'message' => 'Client Forms detail fetched Successfully.',
            'clientForm' => $clientForm
        ]);
    }

    public function updateClientForms(UpdateRequest $request, $id)
    {

        $clientForm = ClientForm::find($id);

        if ($request->has('file')) {
            $fileName = time() . '.' . $request->file->getClientOriginalExtension();

            $request->file->move(public_path('files/client-forms/'), $fileName);
        } else {
            $fileName = $clientForm->file;
        }

        $clientForm->update([
            'label' => $request->label,
            'file' => $fileName
        ]);


        return response()->json([
            'status' => 'true',
            'message' => 'Client Forms detail updated Successfully.',
        ]);
    }

    public function destroyClientForm(Request $request)
    {

        $clientForm = ClientForm::find($request->id);

        $clientForm->delete();

        return response()->json([
            'status' => 'true',
            'message' => 'Client Form Deleted Successfully.'
        ]);
    }


    public function generalForms()
    {
        $generalForms = GeneralForm::all();
        return view('screens.admin.settings.general-forms', get_defined_vars());
    }

    public function storeGeneralForm(StoreRequest $request)
    {
        if ($request->has('file')) {
            $fileName = time() . '.' . $request->file->getClientOriginalExtension();
            $request->file->move(public_path('files/general-forms/'), $fileName);
        }


        GeneralForm::create([
            'label' => $request->label,
            'file' => $fileName
        ]);

        return response()->json([
            'status' => 'true',
            'message' => 'General Form Stored Successfully.'
        ]);
    }

    public function editGeneralForms($id)
    {
        $generalForm = GeneralForm::find($id);

        return response()->json([
            'status' => 'true',
            'message' => 'General Form detail fetched Successfully.',
            'generalForm' => $generalForm
        ]);
    }

    public function updateGeneralForms(UpdateRequest $request, $id) // Uses new GeneralUpdateRequest
    {
        $generalForm = GeneralForm::find($id);

        if ($request->has('file')) {
            $fileName = time() . '.' . $request->file->getClientOriginalExtension();
            $request->file->move(public_path('files/general-forms/'), $fileName);
        } else {
            $fileName = $generalForm->file;
        }

        $generalForm->update([
            'label' => $request->label,
            'file' => $fileName
        ]);

        return response()->json([
            'status' => 'true',
            'message' => 'General Form detail updated Successfully.',
        ]);
    }

    public function destroyGeneralForm(Request $request)
    {
        $generalForm = GeneralForm::find($request->id);

        $generalForm->delete();

        return response()->json([
            'status' => 'true',
            'message' => 'General Form Deleted Successfully.'
        ]);
    }

    public function guidelinesStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Update or create the guideline
        $guideline = Guideline::updateOrCreate(
            ['id' => 1], // Assuming single record with ID 1
            ['content' => $request->content]
        );

        return response()->json([
            'success' => true,
            'message' => 'Guideline saved successfully!',
            'data' => $guideline
        ]);
    }


}
