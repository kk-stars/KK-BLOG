<?php
namespace app\index\controller;
use think\Controller;
use think\cache\driver\Redis;
use think\Cookie;
use think\Request;
use app\index\model\RedisModel;
use app\index\model\GetIP;

class Comm extends Controller{
    public function _initialize(){
        $redis = new Redis();
        $redisM = new RedisModel();

        //网站配置
        $config = $redisM -> RedisGet('CommConfig');
        if($config == 0){
            $config = db('config') -> limit('1') -> find();

            $redis -> set('CommConfig',$config,3600 * 24);
        }
        $this->assign('conf',$config);

        //判断是否关闭网站
        if($config['close'] === 1){
            $this->close();
        }

        $cate = $redisM -> RedisGet('CommCate');
        if($cate == 0){

            $cate = db('cate') -> where('status',1) -> select();

            $redis -> set('CommCate',$cate,3600 * 24);
        }
        $this->assign('cate',$cate);

        //栏目云
        $rightCate = $redisM -> RedisGet('rightCate');
        if($rightCate == 0){
            $rightCate = db('cate') -> where('cateArticles','neq','0') -> field('cateName,cateId') -> select();

            $redis -> set('rightCate',$rightCate,3600 * 24);
        }
        $this->assign('rightCate',$rightCate);

        //关于我
        $about = $redisM -> RedisGet('CommAboutme');
        if($about == 0){
            $about = db('aboutme') -> where('meId',1) -> find();
            $about['lifeSentence'] = explode('|', $about['lifeSentence']);
            $about['birthDate'] = date('Y-m-d',strtotime($about['birthDate']));

            $redis -> set('CommAboutme',$about,3600 * 24);
        }
        $this->assign('about',$about);

        $ip = new GetIP();
        $ip = $ip -> GetIP(); // 获取用户IP地址
        $res = explode('.', $ip);
        for($i = 0;$i < count($res);$i++){
            static $num = '';
            $num .= $res[$i];
        }

        if(!isset($_COOKIE['ip_'.$num])){
            cookie('ip_'.$num,$ip);
            db('config') -> where('id',1) -> setInc('visit');
        }else{}
        
        $this -> heatArticles();

        $aid = $redisM -> RedisGet('CommArticle');
        if($aid == 0){
            $aid = db('article') -> field('articleId') -> select();

            $redis -> set('CommArticle',$aid,3600 * 24);
        }


    }

    //点击排序  按点击量排序
    public function heatArticles(){
        $redis = new Redis();
        $redisM = new RedisModel();

        $clicks = $redisM -> RedisGet('heatArticles');
        if($clicks == 0){
            $clicks = db('article') -> where('status',1) -> order('articleClicks desc') -> limit(5) -> select();
            $redis -> set('heatArticles',$clicks,3600 * 24);
        }
        $this -> assign('heatArticles',$clicks);
    }
}

?>