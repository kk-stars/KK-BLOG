<?php
/**
 * Created by PhpStorm.
 * User: ❀
 * Date: 2018/6/27
 * Time: 11:41
 */

namespace app\index\model;
use think\cache\driver\Redis;
use think\Model;


class RedisModel extends Model
{
    public function RedisGet($name)
    {
        $redis = new Redis();
        if($redis -> has($name)){

            $data = $redis -> get($name);

        }else{
            $data = '0';
        }

        return $data;
    }

}