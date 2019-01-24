<?php
namespace app\index\controller;
use think\Controller;
use think\cache\driver\Redis;
use think\Cookie;
use think\Request;
use app\index\model\RedisModel;

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

        $ip = Request::instance() -> ip(); // 获取用户IP地址
        $res = explode('.', $ip);
        for($i = 0;$i < count($res);$i++){
            static $num = '';
            $num .= $res[$i];
        }

        if(!isset($_COOKIE['ip_'.$num])){
            cookie('ip_'.$num,$ip);
            db('config') -> where('id',1) -> setInc('visit');
        }else{}

        $this -> comtArticles();

        $this -> heatArticles();

        $this -> praiseArticles();

        $aid = $redisM -> RedisGet('CommArticle');
        if($aid == 0){
            $aid = db('article') -> field('articleId') -> select();

            $redis -> set('CommArticle',$aid,3600 * 24);
        }
        foreach($aid as $k => $v){
            $cid = db('comment') -> where('commentArticleid',$v['articleId']) -> count();
            db('article') -> where('articleId',$v['articleId']) -> update(['articleComments' => $cid]);
        }


    }

    //热门推荐  按comment评论排序
    public function comtArticles(){
        $redis = new Redis();
        $redisM = new RedisModel();

        $heat = $redisM -> RedisGet('comtArticles');
        if($heat == 0){
            $heat = db('article') -> where('status',1) -> order('articleComments desc') -> limit(5) -> select();
            $redis -> set('comtArticles',$heat,3600 * 24);
        }
        $this -> assign('comtArticles',$heat);
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

    //点赞排名  按点赞排序
    public function praiseArticles(){
        $redis = new Redis();
        $redisM = new RedisModel();

        $praise = $redisM -> RedisGet('praiseArticles');
        if($praise == 0){
            $praise = db('article') -> where('status',1) -> order('praiseClicks desc') -> limit(5) -> select();
            $redis -> set('praiseArticles',$praise,3600 * 24);
        }
        $this -> assign('praiseArticles',$praise);

    }

    //点赞
    public function Praise(){

        $praise = input('post.');

        if ($praise != null) {
            $apnum = db('article') -> where('articleId',$praise['aid']) -> field('praiseClicks,articleId') -> find();
            $pnum = $apnum['praiseClicks'];
            $puid = $praise['puser'];

            if( !isset( $_COOKIE['cpuser_'.$puid.'_'.$apnum['articleId']] ) ){
                //如果没有设置 cookie【‘cpuser’】，说明此用户第一次点赞， 那么点赞
                $pnum = $pnum + 1;//点赞数加一   点赞
                db('article') -> where('articleId',$praise['aid']) -> update(['praiseClicks' => $pnum]);
                Cookie::set('cpuser_'.$puid.'_'.$apnum['articleId'],$puid.'_'.$apnum['articleId']);//将用户id存放入cookie里，用来验证用户登录点赞的唯一性

                $info = array('code' => 1,'message' => '点赞','pnum' => $pnum);

            }elseif( $_COOKIE['cpuser_'.$puid.'_'.$apnum['articleId']]  ==  $puid.'_'.$apnum['articleId'] ){
                //如果cookie里面保存的用户id 等于    前台提交过来的用户id，就说明此用户已点过赞
                $pnum = $pnum - 1;//点赞数减一  取消赞
                db('article') -> where('articleId',$praise['aid']) -> update(['praiseClicks' => $pnum]);
                Cookie::delete( 'cpuser_'.$puid.'_'.$apnum['articleId'] );//取消赞后，将此用户id从cookie中删除

                $info = array('code' => 0,'message' => '取消','pnum' => $pnum);

            }else{
                $info = array('code' => -1,'message' => '未知错误');
            }
        }else{
            $info = array('code' => -2,'message' => '数据错误');
        }

        echo json_encode($info);die;

    }
}

?>