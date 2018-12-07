<?php
namespace app\babysbreath\controller;
use app\babysbreath\model\Operation;

class Article extends Comm{
    protected function _initialize(){
        if (!session('adminId')){
            $this->error('尚未登录系统!请先登录……',url('Login/Login'));
        }

        $aid = db('article') -> field('articleId') -> select();
        //$article = db('article') -> select();
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

            //操作记录
            $op = new Operation();
            $op_admin = session('adminName');
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

                //操作记录
                $op = new Operation();
                $op_admin = session('adminName');
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
            $result = db('article') -> where('articleId',$articleId) -> delete();
            if($result){
                $info = array('code' => 1,'message' => '文章彻底删除成功!');

                //操作记录
                $op = new Operation();
                $op_admin = session('adminName');
                $op -> op('delete','文章',$op_admin,$op_details['articleTitle']);
            }else{
                $info = array('code' => 0,'message' => '文章彻底删除失败!');
            }
        }
        echo json_encode($info);die;
    }
}
