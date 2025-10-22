<?php

namespace App\Http\Middleware;

use App\Models\Assignment;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAssignmentOwnership
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    */
    public function handle(Request $request, Closure $next): Response
    {
        // Laravel automatically injects the Blog model
        $id = $request->route('id');
        $assignment = Assignment::find($id);

        if (!$assignment) {
            return $this->handleAjaxResponse($request, 'Assignment not found.', 404);
        }

        if ($assignment->user_id != auth()->id()) {
            return $this->handleAjaxResponse($request, 'This Assignment Is Assigned To Another Appraiser, Kindly Contact Admin For Further Details.', 403);
        }

        return $next($request);
    }
    protected function handleAjaxResponse(Request $request, $message, $status = 403)
    {
        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => false,
                'message' => $message,
                'redirect' => route('dashboard') // Optional: tell frontend to redirect
            ], $status);
        }

        return redirect()->route('dashboard');
    }
}
