<?php
/**
 * Created by PhpStorm.
 * User: 噼里啪啦云小砸
 * Date: 2018/8/15
 * Time: 17:18
 */

namespace app\sample\controller;

use think\Request;
class Test
{
        public function index(Request $request){
            //$all = input('param.');
            //$all = Request::instance()->param();
            $all  = $request->param();
            var_dump($all);
        }
}