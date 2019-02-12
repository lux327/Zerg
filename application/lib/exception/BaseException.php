<?php
/**
 * Created by PhpStorm.
 * User: 噼里啪啦云小砸
 * Date: 2018/12/13
 * Time: 17:33
 */

namespace app\lib\exception;


class BaseException
{
    //HTTP状态码 404,200
    public $code = 404;

    //错误具体信息
    public $msg = '参数错误';

    //自定义的错误码
    public $errorCode = 10000;
}