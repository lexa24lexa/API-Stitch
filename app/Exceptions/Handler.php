<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    public function render($request, Exception $exception)
    {
        // Handle 404 Not Found errors
        if ($exception instanceof NotFoundHttpException) {
            return response()->view('errors.404', [], 404);
        }

        // Handle 500 Internal Server Error
        if ($exception instanceof HttpException && $exception->getStatusCode() == 500) {
            return response()->view('errors.500', [], 500);
        }

        // Fallback to default error handling
        return parent::render($request, $exception);
    }
}
