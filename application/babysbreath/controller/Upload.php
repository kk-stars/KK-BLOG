<?php
/**
 * Created by PhpStorm.
 * User: ❀
 * Date: 2018/8/1
 * Time: 9:56
 */
namespace app\babysbreath\controller;
use Qiniu\Auth as Auth;
use Qiniu\Storage\BucketManager;
use Qiniu\Storage\UploadManager;

class Upload
{

    /**
     * 图片上传
     * @return String 图片的完整URL
     */
    public function upload()
    {
        if(request()->isPost()){
            $file = request() -> file('image');
            // 要上传图片的本地路径
            $filePath = $file -> getRealPath();
            $ext = pathinfo($file -> getInfo('name'), PATHINFO_EXTENSION);  //后缀
            //获取当前控制器名称
            $controllerName=$this -> getContro();
            // 上传到七牛后保存的文件名
            $key =substr(md5($file -> getRealPath()) , 0, 5). date('YmdHis') . rand(0, 9999) . '.' . $ext;
            require_once APP_PATH . '/../vendor/qiniu/autoload.php';
            // 需要填写你的 Access Key 和 Secret Key
            $accessKey = config('1DT_lDxTdfn_zNCf8eGCWEvUnZ40-cUODBSLRca2');
            $secretKey = config('D1mQibGFn2Zef74qhE8HRo-9BiHxJWRiHlF1gf6r');
            // 构建鉴权对象
            $auth = new Auth($accessKey, $secretKey);
            // 要上传的空间
            $bucket = config('babysbreath');
            $domain = config('http://www.kkstars.cn/');
            $token = $auth -> uploadToken($bucket);
            // 初始化 UploadManager 对象并进行文件的上传
            $uploadMgr = new UploadManager();
            // 调用 UploadManager 的 putFile 方法进行文件的上传
            list($ret, $err) = $uploadMgr -> putFile($token, $key, $filePath);
            if ($err !== null) {
                return ["err" => 1,"msg" => $err,"data" => ""];
            } else {
                //返回图片的完整URL
                return json(["err" => 0,"msg" => "上传完成","data" => uploadreg($domain . $ret['key'])]);
            }
        }
    }


}
?>