<?php
namespace app\babysbreath\controller;

class Comment extends Comm{
    public function comment()
    {
        $comment = db('comment') -> alias('c') -> join('article a','c.commentArticleid = a.articleId') -> field('c.*,a.articleTitle') -> order('c.commentId asc') -> where('c.status','1') -> paginate(12);
        $this->assign('comment',$comment);
        return view();
    }


    public function seeComment()
    {
        $commentId = $_POST['commentId'];
        //$commentId = input('commentId');
        $result = db('comment') -> alias('c') -> join('article a','c.commentArticleid = a.articleId') -> field('c.*,a.articleTitle') -> where('c.commentId',$commentId) -> find();
        //dump($result);die;
        if($result){
            $info = array('code' => '1','message' => $result);
        }else{
            $info = array('code' => '0','message' => '数据查询错误!');
        }
        echo json_encode($info);die;
        return view();
    }


    public function delComment()
    {
        $commentId = input('commentId');
        $result = db('comment') -> where('commentId',$commentId) -> delete();
        if($result){
            $info = array('code' => '1','message' => '数据删除成功!');

            $op_details = db('comment') -> where('commentId',$commentId) -> field('articleId') -> find();
            //操作记录
            $op = new Operation();
            $op_admin = session('adminName');
            $op -> op('delete','评论',$op_admin,'评论ID：'.$commentId.'，文章ID：'.$op_details['articleId']);
        }else{
            $info = array('code' => '0','message' => '数据删除错误!');
        }
        echo json_encode($info);die;
        return view();
    }
}
