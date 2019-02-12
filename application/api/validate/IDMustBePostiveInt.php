<?php
/**
 * Created by PhpStorm.
 * User: 噼里啪啦云小砸
 * Date: 2018/11/2
 * Time: 14:01
 */

namespace app\api\validate;


use think\Validate;

class IDMustBePostiveInt extends Validate
{
    protected $rule = [
        'id' => 'required|isPositiveInteger'
    ];

    /*protected  function isPostiveInteger($value, $rule = '', $data = '',$field = '')
    {
        if(is_numeric($value) && is_int($value+0) && ($value+0)>0){
            return true;
        }else{
            return $field.'必须是正整数';
        }
    }*/
}