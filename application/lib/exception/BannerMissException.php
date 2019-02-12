<?php
/**
 * Created by PhpStorm.
 * User: 噼里啪啦云小砸
 * Date: 2018/12/14
 * Time: 9:18
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;

    public $msg = '请求banner不存在';

    public $errorCode = 40000;
}