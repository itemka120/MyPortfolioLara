<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable; // Importing Throwable from global namespace

class Handler extends ExceptionHandler
{
    public function render($request, Throwable $e)
    {
        try {
            return parent::render($request, $e);
        } catch (HttpException $exception) {
            $statusCode = $exception->getStatusCode();
            if ($statusCode == 404) {
                return response()->view('errors.404', [], 404);
            } else {
                return response()->view('errors.unknown');
            }
        }
    }
}
