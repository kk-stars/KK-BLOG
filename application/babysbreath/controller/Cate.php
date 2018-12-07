<?php
namespace app\babysbreath\controller;

use app\babysbreath\model\Cate as CateModel;
use app\babysbreath\model\Operation;

class Cate extends Comm{

    protected function _initialize(){
        if (!session('adminId')){
            $this->error('尚未登录系统!请先登录……',url('Login/Login'));
        }

        //更新文章总数
        $cateId = db('cate') -> field('cateId') -> select();
        foreach ($cateId as $k => $v){
            $article = db('article') -> where(['articleCate' => $v['cateId'] , 'status' => '1' ]) -> count();
            db('cate') -> where('cateId',$v['cateId']) -> update(['cateArticles' => $article]);
        }
    }

    public function category()
    {
        $cateModel = new CateModel();
        $cateSort = $cateModel->cateTree();
        $count = count($cateSort);

        $this->assign('cate',$cateSort);
        $this->assign('count',$count);

        return view();
    }

    //删除栏目（ 状态改为  0 ，让其显示到回收站中，可在回收站中还原栏目 ！ ）
    public function delCate(){
        $cateId = input('cateId');
        //删除栏目时，先将其此栏目下的文章删除
        $articleCate = db('article') -> where('articleCate',$cateId) -> field('articleId') -> select();
        if($articleCate){
            foreach($articleCate as $k => $v){
                db('article') -> where('articleId',$v['articleId']) -> update(['status' => '0']);
            }
        }

        $cateModel = new CateModel();
        $cateChildrenId = $cateModel -> getchilrenid($cateId);
        if ($cateChildrenId){
            foreach ($cateChildrenId as $k => $v){
                CateModel::where(array('cateId' => $v)) -> update(['status' => '0']);
            }
        }

        $result = db('cate') -> where('cateId',$cateId) -> update(['status' => '0']);
        if($result){

            $op_details = db('cate') -> where('cateId',$cateId) -> field('cateName') -> find();
            //操作记录
            $op = new Operation();
            $op_admin = session('adminName');
            $op -> op('delete(update status -> 0)','栏目',$op_admin,$op_details['cateName'].'以及此栏目下的所有子栏目以及文章');

            $this->success('栏目删除成功!正在跳转……',url('cate/category'));
        }else{
            $this->error('栏目删除失败!');
        }
    }

    //回收站
    public function cateRecovery(){
        $cate = db('cate') -> where('status','0') -> paginate(15);
        $count = count($cate);
        $this->assign('count',$count);
        $this->assign('cate',$cate);

        return view();
    }

    //还原栏目（ 从回收站中还原栏目  ）
    public function cateRecoveryUp(){

        $cateId = input('cateId');
        $cateFather = db('cate') -> where('cateId',$cateId) -> field('cateName,cateFather') -> find();
        $cateStatus = db('cate') -> where('cateId',$cateFather['cateFather']) -> field('status') -> find();
        if($cateStatus['status'] == 1 || $cateStatus == null){
            if($cateId){
                $result = db('cate') -> where('cateId',$cateId) -> update(['status' => '1']);
                if($result){

                    //操作记录
                    $op = new Operation();
                    $op_admin = session('adminName');
                    $op -> op('reduction','栏目',$op_admin,$cateFather['cateName']);

                    $this->success('栏目还原成功!正在跳转……',url('cate/cateRecovery'));
                }else{
                    $this->error('栏目还原失败!');
                }
            }
        }else{
            $this->error('此栏目的上级栏目不存在,无法还原!');
        }
    }

    //彻底删除（ 将栏目从回收站彻底删除，不可还原 ！ ）
    public function cateRecoveryDel(){
        $cateId = input('cateId');
        if($cateId){
            //删除栏目时，先将其此栏目下的文章删除
            $articleCate = db('article') -> where('articleCate',$cateId) -> field('articleId') -> select();
            if($articleCate){
                foreach($articleCate as $k => $v){
                    $articleDel = db('article') -> where('articleId',$v['articleId']) -> update(['status' => 0]);
                }
            }

            $cateModel = new CateModel();
            $cateChildrenId = $cateModel -> getchilrenid($cateId);
            if ($cateChildrenId){
                foreach ($cateChildrenId as $k => $v){
                    CateModel::where(array('cateId' => $v)) -> update(['status' => 0]);
                }
            }
            $result = db('cate') -> where('cateId',$cateId) -> update(['status' => 0]);
            if($result){
                $info = array('code' => 1,'message' => '栏目彻底删除成功!正在跳转……');

                $op_details = db('cate') -> where('cateId',$cateId) -> field('cateName') -> find();
                //操作记录
                $op = new Operation();
                $op_admin = session('adminName');
                $op -> op('delete','栏目',$op_admin,$op_details['cateName'].'以及此栏目下的所有子栏目以及文章');
            }else{
                $info = array('code' => 0,'message' => '栏目彻底删除失败!');
//              $this->error('栏目彻底删除失败!');
            }
        }
        echo json_encode($info);die;
    }
}
