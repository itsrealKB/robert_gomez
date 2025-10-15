<?php

use App\Http\Middleware\AssignmentAccept;
use App\Http\Middleware\CheckAdminLogin;
use App\Http\Middleware\CheckAgentLogin;
use App\Http\Middleware\PreventBackHistory;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware(['web','prevent-back-history', 'CheckAdmin'])
                ->prefix('admin')
                ->name('admin.')
                ->group(base_path('routes/admin.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'CheckAdmin' => CheckAdminLogin::class,
            'CheckAgent' => CheckAgentLogin::class,
            'prevent-back-history' => PreventBackHistory::class,
            // 'AssignmentCheckAcceptance' =>  AssignmentAccept::class,
        ]);

        $middleware->redirectUsersTo(function (Request $request) {
            $user = $request->user();

            if ($user->role === 'agent') {
                return route('dashboard');
            } elseif ($user->role === 'admin') {
                return route('admin.index');
            }

            return route('index');
        });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
