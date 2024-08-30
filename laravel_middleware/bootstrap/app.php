<?php

use App\Http\Middleware\Testuser;
use App\Http\Middleware\Validuser;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'IsValiduser' => Validuser::class,
        ]);

        $middleware->appendToGroup('ok-user', [
            Validuser::class,
            Testuser::class
        ]);


        // global middleware
        // $middleware->append(Testuser::class);
        // $middleware->use([
        //     Testuser::class,
        //     Validuser::class
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
