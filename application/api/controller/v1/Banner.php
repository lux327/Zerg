<?php
/**
 * Created by PhpStorm.
 * User: 噼里啪啦云小砸
 * Date: 2018/11/2
 * Time: 13:18
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use think\Exception;

class Banner
{
    /*
     * 获取指定id的banner信息
     * @url /banner/id
     * @http GET
     * @id banner的id号
     */
    public function getBanner($id){
      /*  $validate = new IDMustBePostiveInt();
        $validate->goCheck();
        $banner = BannerModel::getBannerById($id);
        if(!$banner){
            throw new MissException([
               'msg'=>'请求banner不存在',
               'errorCode'=>'40000'
            ]);
        }
        return $banner;*/
        (new IDMustBePostiveInt())->goCheck();

        $banner = BannerModel::getBannerByID($id);

        return $banner;
    }
}