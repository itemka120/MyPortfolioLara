<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    function render($request, Throwable $e)
    {
        if ($this->isHttpException($e)) {
            if ($e->getStatusCode() == 404) {
                return response()->view('errors.404', [], 404);
            }
        }
        return parent::render($request, $e);
    }
}
