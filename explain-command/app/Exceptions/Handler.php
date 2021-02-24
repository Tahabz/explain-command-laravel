<?php

namespace App\Exceptions;

use Facade\FlareClient\Http\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
        if ($e instanceof ModelNotFoundException) {
            return response()->json([
                'error' => 'Entry for '.str_replace('App\\', '', $e->getModel()).' not found'], 404);
        }
        if ($e instanceof QueryException) {
            return parent::render($request, $e);
        }
        if ($e instanceof MethodNotAllowedHttpException) {
            return response()->json([
                'error' => 'Method not allowed.'
            ], 405);
        }
        return parent::render($request, $e);
    }
}
