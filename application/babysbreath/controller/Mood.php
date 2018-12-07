<?php
namespace app\babysbreath\controller;
use app\babysbreath\model\Operation;

class Mood extends Comm{
    public function mood()
    {
        $mood = db('mood') -> where('status','1') -> paginate(18);
        $mCount = db('mood') -> where('status','1') -> count();
        $this->assign('mood',$mood);
        $this->assign('mCount',$mCount);
        return view();
    }


    public function seemood()
    {
        $moodId = input('moodId');
        $result = db('mood') -> where('moodId',$moodId) -> find();
        if($result){
            $info = array('code' => 1,'message' => '成功','data' => $result);
        }else{
            $info = array('code' => 0,'message' => '失败');
        }
        echo json_encode($info);
    }


    public function delmood()
    {
        $moodId = input('moodId');
        $result = db('mood') -> where('moodId',$moodId) -> update(['status' => 0]);
        if($result){
            $info = array('code' => 1,'message' => '心情随笔删除成功');

            //操作记录
            $op = new Operation();
            $op_admin = session('adminName');
            $op -> op('delete','心情随笔',$op_admin,'心情ID：'.$moodId);
        }else{
            $info = array('code' => 0,'message' => '心情随笔删除失败');
        }
        echo json_encode($info);
    }
}
