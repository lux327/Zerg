<?php
/**
 * Created by PhpStorm.
 * User: 噼里啪啦云小砸
 * Date: 2018/12/13
 * Time: 17:31
 */

namespace app\exception;



use think\Exception;
use think\exception\Handle;

class ExceptionHandler extends Handle
{
    public function rander(Exception $ex){
        return json('~~~~~~~~~');
    }

}