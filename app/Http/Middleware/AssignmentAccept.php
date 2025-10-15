<?php

namespace App\Http\Middleware;

use App\Models\Assignment;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AssignmentAccept
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $assignmentId = $request->route('id');


        $assignment = Assignment::find($assignmentId);

        if (!$assignment || $assignment->is_accept != 1) {

            return redirect()->route('reject', ['id' => $assignmentId]);
        }

        // If is_accept is 1, proceed to the requested route
        return $next($request);
    }
}
