<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/11
 * Time: 15:38
 */

namespace App\Exceptions;


use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\JsonResponse;
use function MongoDB\BSON\toJSON;

class ApiHandler extends Handler
{

    public $code;
    public $bol;
    public $msg;
    public $error_code;


    public function handler(Exception $exception)
    {
        if ($exception instanceof BaseException)
        {
            //如果是自定义异常，则控制http状态码，不需要记录日志
            //因为这些通常是因为客户端传递参数错误或者是用户请求造成的异常
            //不应当记录日志
            $this->code = $exception->code;
            $this->bol = $exception->bol;
            $this->msg = $exception->msg;
            $this->error_code = $exception->error_code;

        }elseif ($exception instanceof ValidationException ){
            redirect()->back()->withErrors();
            $errors = session('errors');
            throw new ParameterException([
                'msg'=> $errors->first(),
            ]);
        }
        else{
            $this->code = 500;
            $this->bol = false;
            $this->msg = $exception->getMessage();
            $this->error_code = 999;

        }
        $result = [
            'msg'  => $this->msg,
            'bol'  => $this->bol,
            'error_code' => $this->error_code,
            'request_url' => request()->path()
        ];
        return response()->json($result);
    }


    public function render($request, Exception $exception)
    {
       if( config('app.debug'))
       {
           return parent::render($request, $exception);
       }
       return $this->handler($exception);
    }
}