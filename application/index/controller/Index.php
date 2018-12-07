<?php
namespace app\index\controller;
use think\Controller;
use think\cache\driver\Redis;

class Index extends Comm{
    public function index(){

//        $redis = new Redis();
//        $redis -> set('stars','Babysbreath');
//        $result = $redis -> get('stars');
//        dump($result);die;

        $redis = new Redis();

        //轮播文章
        if($redis -> get('slider') == false){
            //slider 不存在，第一次查询
            $slider = db('article') -> alias('a') -> join('cate c','a.articleCate = c.cateId') -> field('a.*,c.cateName,c.cateId') -> where(['a.status' => 1,'a.slider' => 1]) -> order('a.addTime asc')  -> limit('5') -> select();
            $redis -> set('slider',$slider);
        }
        $slider = $redis -> get('slider');
        $this->assign('slider',$slider);

        return view();
    }

    public function flow(){

        $getPage = isset($_GET['page']) ? $_GET['page'] : 1;

        $redis = new Redis();

        if($redis -> get('flowData'.$getPage) == false){
            $aData = db('article') -> alias('a') -> join('cate c','a.articleCate = c.cateId') -> field('a.*,c.cateName,c.cateId') -> where('a.status',1) -> order('a.addTime desc') -> paginate(10,true,['page' => $getPage]);
            $redis -> set('flowData'.$getPage,$aData);
        }

        $aData = $redis -> get('flowData'.$getPage);

        echo json_encode($aData);
    }
}