<?php
/**
 * Created by PhpStorm.
 * User: 噼里啪啦云小砸
 * Date: 2018/11/2
 * Time: 13:31
 */

namespace app\api\validate;


use think\Validate;

class TestValidate extends Validate
{
    protected $rule = [
        'name' => 'require|max:10',
        'email' => 'email'
    ];
}