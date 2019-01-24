<?php
namespace app\babysbreath\controller;
use app\babysbreath\model\Operation;
use think\cache\driver\Redis;

class Article extends Comm{
    protected function _initialize(){
        $this -> CheckLoginTime();

        if (!session('kkstars_adminId') && !session('LoginTime') && !session('kkstars_adminName')){
            $this->error('尚未登录系统!请先登录……',url('Login/Login'));
        }

        $aid = db('article') -> field('articleId') -> select();
        foreach($aid as $k => $v){
            $cid = db('comment') -> where('commentArticleid',$v['articleId']) -> count();
            db('article') -> where('articleId',$v['articleId']) -> update(['articleComments' => $cid]);
        }
    }


    public function article()
    {
        $selectResult = db('article') -> alias('a') -> join('cate c','a.articleCate = c.cateId') -> field('a.*,c.cateName') -> order('a.articleId asc') -> where('a.status','1') -> paginate(6);
        $this->assign('articleData',$selectResult);

        return view();
    }

    //删除
    public function delArticle(){
        $op_details = db('article') -> where('ArticleId',input('articleId')) -> field('articleTitle') -> find();
        $update = db('article') -> where('ArticleId',input('articleId')) -> update(['status' => '0']);
        if ($update){
            $info = array('code' => 1,'message' => '删除文章成功!');

            $redis = new Redis();
            $redis -> clear();

            //操作记录
            $op = new Operation();
            $op_admin = session('kkstars_adminName');
            $op -> op('delete(update status -> 0)','文章',$op_admin,$op_details['articleTitle']);
        }else {
            $info = array('code' => 0,'message' => '删除文章成功!');
        }
        echo json_encode($info);die;
    }

    //还原
    public function reduction(){
        $articleId = input('articleId');
        $articleAll = db('article') -> where('articleId',$articleId) -> find();
        $articleCate = db('cate') -> where('cateId',$articleAll['articleCate']) -> field('status') -> find();

        if($articleCate['status'] == 1 || $articleCate == null){
            $update = db('article') -> where('ArticleId',$articleId) -> update(['status' => '1']);
            if ($update){
                $info = array('code' => 1,'message' => '还原文章成功!');

                $redis = new Redis();
                $redis -> clear();

                //操作记录
                $op = new Operation();
                $op_admin = session('kkstars_adminName');
                $op -> op('reduction','文章',$op_admin,$articleAll['articleTitle']);
            }else {
                $info = array('code' => 0,'message' => '还原文章失败!');
            }
        }else{
            $info = array('code' => -1,'message' => '此文章的所属栏目不存在,无法还原!');
        }
        echo json_encode($info);die;
    }

    //回收站
    public function articleRecovery(){
        $selectResult = db('article') -> where('status','0') -> paginate(6);
        //dump($selectResult);die;
        $this->assign('articleData',$selectResult);

        return view();
    }

    //彻底删除
    public function delRecovery(){

        $articleId = input('articleId');
        $op_details = db('article') -> where('articleId',$articleId) -> field('articleTitle') -> find();
        if($articleId){

            //在删除文章前需先删除此文章下的评论以及回复评论
            $cid = db('comment') -> where('commentArticleid',$articleId) -> field('commentId') -> select();
            foreach($cid as $key => $value){
                db('replycomment') -> where('replyCid',$value['commentId']) -> delete();
            }
            db('comment') -> where('commentArticleid',$articleId) -> delete();

            $result = db('article') -> where('articleId',$articleId) -> delete();

            if($result){
                $info = array('code' => 1,'message' => '文章彻底删除成功!');

                $redis = new Redis();
                $redis -> clear();

                //操作记录
                $op = new Operation();
                $op_admin = session('kkstars_adminName');
                $op -> op('delete','文章',$op_admin,$op_details['articleTitle']);
            }else{
                $info = array('code' => 0,'message' => '文章彻底删除失败!');
            }
            echo json_encode($info);die;
        }
    }

    public function CheckLoginTime()
    {
        if(session('LoginTime') && session('kkstars_adminName') && session('kkstars_adminId')){
            //检查登录是否超时
            $NowTime = time();
            $LoginTime = session('LoginTime');
            // $timeout 超时时间（s）
            $timeout = db('config') -> where('id','1')  -> field('loginTimeout') -> find();
            if(($NowTime - $LoginTime) > $timeout['loginTimeout'] ){

                //操作记录
                $op = new Operation();
                $op_admin = session('kkstars_adminName');
                $op -> op('login timeout','登录超时',$op_admin,'登录已超时，请重新登录');

                session('[destroy]');
                session(null);
                $this -> error('登录已超时，请重新登录',url('Login/login'));
            }else{
                session('LoginTime',$NowTime);
            }
        }else{
            $this->error('尚未登录系统!请先登录……',url('Login/Login'));
        }
    }
}
