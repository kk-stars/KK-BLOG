<?php
namespace app\babysbreath\controller;
use app\babysbreath\model\Operation;

class Message extends Comm{
    public function message()
    {
        $message = db('message') -> where('status','1') -> paginate(18);
        $mCount = db('message') -> where('status','1') -> count();
        $this->assign('message',$message);
        $this->assign('mCount',$mCount);
        return view();
    }


    public function replyMessage()
    {
        $replyMessage = db('replymessage') -> alias('rm') -> join('message m','rm.replyMid = m.messageId') -> where('rm.status','1') -> field('rm.*,m.messageContent') -> paginate(18);
        $rmCount = db('replymessage') -> where('status','1') -> count();
        $this->assign('replyMessage',$replyMessage);
        $this->assign('rmCount',$rmCount);
        return view();
    }


    public function seeMessage()
    {
        $messageId = $_POST['messageId'];
        $result = db('message') -> alias('m') -> join('replymessage rm','m.messageId = rm.replyMid') -> where('messageId',$messageId) -> find();
        if($result){
            $info = array('code' => '1','message' => $result);
        }else{
            $info = array('code' => '0','message' => '数据查询错误!');
        }
        echo json_encode($info);die;
        return view();
    }


    public function seeReplyMessage()
    {
        $messageId = $_POST['messageId'];
        $result = db('replymessage') -> alias('rm') -> join('message m','rm.replyMid = m.messageId') -> where('rm.replyId',$messageId) -> find();
        if($result){
            $info = array('code' => '1','message' => $result);
        }else{
            $info = array('code' => '0','message' => '数据错误!');
        }
        echo json_encode($info);die;
    }


    public function delMessage()
    {
        $messageId = input('messageId');

        if($messageId){
            $messageContent = db('message') -> where('messageId',$messageId) -> field('messageContent') -> find();

            //在删除留言之前需先删除此留言的回复
            db('replymessage') -> where('replyMid',$messageId) -> delete();
            $result = db('message') -> where('messageId',$messageId) -> delete();

            if($result){
                $info = array('code' => '1','message' => '留言删除成功!');

                //操作记录
                $op = new Operation();
                $op_admin = session('kkstars_adminName');
                $op -> op('delete','留言',$op_admin,'网站留言内容：'.$messageContent['messageContent']);
            }else{
                $info = array('code' => '0','message' => '留言删除错误!');
            }
            echo json_encode($info);die;
        }
    }


    public function delReplyMessage()
    {
        $messageId = input('messageId');
        if($messageId){

            $replyContent = db('replymessage') -> where('replyId',$messageId) -> field('replyContent,replyMid') -> find();

            $message = db('message') -> where('messageId',$replyContent['replyMid']) -> field('messageContent') -> find();

            $result = db('replymessage') -> where('replyMid',$messageId) -> delete();

            if($result){
                $info = array('code' => '1','message' => '留言删除成功!');

                //操作记录
                $op = new Operation();
                $op_admin = session('kkstars_adminName');
                $op -> op('delete','留言',$op_admin,'回复内容'. $replyContent['replyContent'] .'回复对象：'. $message['messageContent']);
            }else{
                $info = array('code' => '0','message' => '留言删除错误!');
            }
            echo json_encode($info);die;
        }
    }


}
