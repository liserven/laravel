<?php
/**
 * Created by PhpStorm.
 * User: 李沈阳
 * Date: 2018/5/21
 * Time: 15:02
 */

namespace App\Validate;




use App\Exceptions\ParameterException;
use Illuminate\Support\Facades\Validator;

class BaseValidate extends Validator
{
    protected $rules , $message, $alias=[];

    public function goCheck($data=[])
    {
        if( !is_array($this->rules) || !is_array($this->message)){
            throw new ParameterException([
                'msg'=> '参数错误'
            ]);
        }

        $param = empty($data) ? request()->all() : $data;
        if( empty($param))
        {
            throw new ParameterException();
        }
        $validator = self::make($param, $this->rules, $this->message, $this->alias);
        if( $validator->fails() )
        {
            redirect()->back()->withErrors($validator);
            $errors = session('errors');
            throw new ParameterException([
                'msg'=> $errors->first(),
            ]);
        }
        return true;
    }
}