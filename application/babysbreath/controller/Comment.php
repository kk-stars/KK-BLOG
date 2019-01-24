<?php
namespace app\babysbreath\controller;
use app\babysbreath\model\Operation;

class Comment extends Comm{
    public function comment()
    {
        $comment = db('comment') -> alias('c') -> join('article a','c.commentArticleid = a.articleId') -> field('c.*,a.articleTitle') -> order('c.commentId asc') -> where('c.status','1') -> paginate(12);
        $this->assign('comment',$comment);
        return view();
    }


    public function replyComment()
    {
        $replyComment = db('replycomment') -> alias('rc') -> join('comment c','rc.replyCid = c.commentId') -> field('rc.*,c.commentContent') -> where('rc.status','1') -> paginate(12);
        $count = db('replycomment') -> where('status','1') -> count();
        $this -> assign('replyComment',$replyComment);
        $this -> assign('replyCommentCount',$count);
        return view();
    }


    public function seeComment()
    {
        $commentId = $_POST['commentId'];
        $result = db('comment') -> alias('c') -> join('article a','c.commentArticleid = a.articleId') -> field('c.*,a.articleTitle') -> where('c.commentId',$commentId) -> find();
        if($result){
            $info = array('code' => '1','message' => $result);
        }else{
            $info = array('code' => '0','message' => '数据错误!');
        }
        echo json_encode($info);die;
    }


    public function seeReplyComment()
    {
        $commentId = $_POST['commentId'];
        $result = db('replycomment') -> alias('rc') -> join('comment c','rc.replyCid = c.commentId') -> field('rc.*,c.commentContent') -> where('rc.replyId',$commentId) -> find();

        if($result){
            $info = array('code' => '1','message' => $result);
        }else{
            $info = array('code' => '0','message' => '数据错误!');
        }
        echo json_encode($info);die;
    }


    public function delComment()
    {
        $commentId = input('commentId');
        $commentContent = db('comment') -> where('commentId',$commentId) -> field('commentContent,commentArticleid') -> find();
        if($commentId){
            //在删除评论之前需先删除此评论的回复
            db('replycomment') -> where('replyCid',$commentId) -> delete();
            $result = db('comment') -> where('commentId',$commentId) -> delete();
            if($result){
                $info = array('code' => '1','message' => '评论删除成功!');
                //操作记录
                $op = new Operation();
                $op_admin = session('kkstars_adminName');
                $op -> op('delete','评论',$op_admin,'评论内容：'.$commentContent['commentContent'].'，文章标题：'.$commentContent['commentArticleid']);
            }else{
                $info = array('code' => '0','message' => '评论删除错误!');
            }
            echo json_encode($info);die;
        }
    }


    public function delReplyComment()
    {
        $commentId = input('commentId');
        $replyContent = db('replycomment') -> where('replyId',$commentId) -> field('replyContent,replyCid') -> find();

        $comment = db('comment') -> where('commentId',$replyContent['replyCid']) -> field('commentContent') -> find();

        $result = db('replycomment') -> where('replyId',$commentId) -> delete();
        if($result){
            $info = array('code' => '1','message' => '评论删除成功!');
            //操作记录
            $op = new Operation();
            $op_admin = session('kkstars_adminName');
            $op -> op('delete','评论回复',$op_admin,'回复内容：'.$replyContent['replyContent'].'，回复对象：'.$comment['commentContent']);
        }else{
            $info = array('code' => '0','message' => '评论删除错误!');
        }
        echo json_encode($info);die;
    }
}
