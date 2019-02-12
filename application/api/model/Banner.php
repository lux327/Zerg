<?php
/**
 * Created by PhpStorm.
 * User: 噼里啪啦云小砸
 * Date: 2018/11/22
 * Time: 22:43
 */
namespace app\api\model;



use think\Exception;

class Banner
{
    public static function getBannerByID($id){
        //TODO 根据Banner ID号 获取Banner信息
        try{
            1 / 0;
        }catch (Exception $ex){
            //TODO 可以记录日志
            throw $ex;
        }
        return 'this is banner info';
    }
}