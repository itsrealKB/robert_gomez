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

        if($assignment){
            if ($assignment->user_id !== auth()->id()) {
                return redirect()->back();
            }
        }
        else{
            return redirect()->back();
        }

        return $next($request);
    }
}
