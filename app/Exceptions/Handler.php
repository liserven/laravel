<?php

namespace App\Exceptions;

use Exception;
use Faker\Provider\Base;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;

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
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if( $exception instanceof BaseException)
        {
            return [
                'data'=> 11
            ];
        }else{
            return parent::render($request, $exception);

        }
    }
    protected function unauthenticated($request, AuthenticationException $exception)
    {

        if($request->expectsJson()){
            $response=response()->json([
                'status'=>3,
                'msg' => $exception->getMessage(),
                'errors'=>[],
            ], 200);
        }else{
            $response=redirect()->guest(route('login'));
        }
        return $response;
    }

    protected function invalidJson($request, ValidationException $exception)
    {
        return response()->json([
            'status'=>2,
            'msg' => $exception->getMessage(),
            'errors' => $exception->errors(),
        ], $exception->status);
    }
}