<?php
/**
 * Created by PhpStorm.
 * User: ❀
 * Date: 2018/6/27
 * Time: 11:41
 */

namespace app\index\model;
use think\Model;


class GetIP extends Model
{
    public function GetIP()
    {
    	if(isset($_SERVER["HTTP_VIA"]) && isset($_SERVER["HTTP_X_FORWARDED_FOR"]) && isset($_SERVER["REMOTE_ADDR"])){
    		$IP = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
    	}else{
    		$IP = "0.0.0.0";
    	}

    	return $IP;
    }

}