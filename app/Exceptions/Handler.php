<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;



class Handler extends ExceptionHandler
{




    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
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
        });
    }

    /**
     * Render an exception into an HTTP response
     * 
     * @param \Exception $e
     * @param \Illuminate\Http\Response $response
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $e)
    {
        // return parent::render($request, $e);
        if ($this->isHttpException($e)) {

            $statusCode = $e->getStatusCode();
            if ($statusCode == '404') {
                return response()->view('errors.404');
            }
            if ($statusCode == '500') {
                return response()->view('errors.500');
            }
            if ($statusCode == '419') {
                return response()->view('errors.419');
            }
        }
        return parent::render($request, $e);
    }
}
