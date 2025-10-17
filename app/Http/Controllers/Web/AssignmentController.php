<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Assignment\DocsRequest;
use App\Http\Requests\Web\Assignment\RejectRequest;
use App\Models\Assignment;
use App\Models\AssignmentDocument;
use App\Models\AssignmentLog;
use App\Models\ClientForm;
use Illuminate\Support\Str;
use App\Models\GeneralForm;
use App\Models\Guideline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssignmentController extends Controller
{
    public function updateStatus(Request $request)
    {
        $assignment = Assignment::find($request->assignment);


        $assignment->update([
            'status' => $request->status,
        ]);


        return response()->json([
            'status' => 'true',
            'message' => 'assignment completed successfully.'

        ]);
    }

    public function view($id)
    {
        $assignment = Assignment::find($id);

        $clientForms = ClientForm::all();

        $generalForms = GeneralForm::all();

        $guideline = Guideline::latest()->first();


        // $assignment= AssignmentLog::where('')

        return view('screens.web.assignment.view', get_defined_vars());
    }

    public function isAccept_view($id)
    {
        $assignment = Assignment::find($id);


        return view('screens.web.assignment.reject', get_defined_vars());
    }

    public function isAccept(Request $request, $id)
    {
        $assignment = Assignment::find($id);

        $reason = $request->reason == null ? null : $request->reason;

        $user = $request->accept == 0 ? null : $assignment->user_id;

        $route = $request->accept == 0 ? route('dashboard') : route('view', $id);

        $assignment->assignment_logs()->create([
            'is_accept' => $request->accept,
            'reason_rejection' => $request->reason,
            'user_id' => $assignment->user_id,
        ]);

        $assignment->update([
            'is_accept' => $request->accept,
            'reason_rejection' => $request->reason,
            'user_id' => $user,
            'status' => 'pending'
        ]);

        return response()->json([
            'status' => 'true',
            'message' => 'Your  Assignment rejection status updated successfully.',
            'route' => $route
        ]);
    }

    public function change_phase_view($id)
    {
        $assignment = Assignment::find($id);

        return view('screens.web.assignment.changePhase', get_defined_vars());
    }

    public function docs_view($id)
    {
        $assignment = Assignment::find($id);

        return view('screens.web.assignment.docs', get_defined_vars());
    }

    public function upload_docs($id, DocsRequest $request)
    {


        // dd($request->all());
        $assignment = Assignment::find($id);


        if ($request->has('file')) {

            $timestamp = time();
            $randomString = Str::random(8);
            $extension = $request->file->getClientOriginalExtension();
            $fileName = "doc_{$timestamp}_{$randomString}.{$extension}";


            $request->file->move(public_path('assignment-docs/'), $fileName);

            $assignment->docs()->create([
                'file' => $fileName,
                'file_type' => $extension
            ]);
        }



        return response()->json([
            'status' => 'true',
            'message' => 'file Uploaded successfully.',
        ]);
    }
    public function update_docs($id, DocsRequest $request)
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

    public function assignDetail(Request $request, $id)
    {
        $assignment = Assignment::find($id);

        if (!$assignment) {
            return response()->json([
                'status' => false,
                'message' => 'Assignment not found.'
            ], 404);
        }

        $data = $request->except('_token');

        try {

            $assignment->update($data);

            return response()->json([
                'status' => true,
                'message' => 'Form updated successfully.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update form data: ' . $e->getMessage()
            ], 500);
        }
    }

    public function paymentInfo($id, Request $request)
    {

        $assignment = Assignment::find($id);

        $assignment->update([
            'payment_info' => $request->paymentInfo
        ]);

        return response()->json([
            'status' => 'true',
            'message' => 'payment info send successfully.'
        ]);
    }
}
