<?php
namespace app\babysbreath\controller;

use app\babysbreath\model\Article;
use app\babysbreath\model\Cate as CateModel;
use app\babysbreath\model\Operation;
use think\cache\driver\Redis;

class Update extends Comm{
    public function updateArticle()
    {
        $articleId = input('articleId');
        if($articleId){
            $idData = db('article') -> where('articleId',$articleId) -> find();
            $cateModel = new CateModel();
            $cateSort = $cateModel->cateTree();

            $this->assign('article',$idData);
            $this->assign('cate',$cateSort);

            if(request()->isPost()){
                $articleModel = new Article;
                $upData = input('post.');

                //通过控制器上传图片
                if (!empty($_FILES['articlePic']['name'])){
                    $pic = request()->file('articlePic');
                    $path = ROOT_PATH."public".DS."static\admin\Upload";
                    $picInfo = $pic -> validate(['sixe'=>'5000 * 1024','ext'=>'jpg,gif,jpeg,png']) -> move($path);
                    if ($picInfo){
                        $upData['articlePic'] = "admin/Upload/" . date('Ymd') . '/' . $picInfo->getFilename();
                    }else{
                        return $this->error($pic->getError);
                    }
                }

                $update = $articleModel-> update($upData);
                if($update){

                    //操作记录
                    $op = new Operation();
                    $op_admin = session('kkstars_adminName');
                    $op -> op('update','文章',$op_admin,$upData['articleTitle']);

                    $redis = new Redis();
                    $redis -> clear();

                    $this->success('修改文章成功!正在跳转……',url('Article/article'));
                }else{
                    $this->error('修改文章失败!');
                }

            }
        }
        return view();
    }

    public function updateCategory()
    {
        $redis = new Redis();

        $cateModel = new CateModel();
        $cateSort = $cateModel->cateTree();
        $this->assign('cates',$cateSort);

        $cateId = input('cateId');
        $cate = db('cate') -> where('cateId',$cateId) -> find();
        $this -> assign('cate',$cate);

        if(request() -> isPost()){
            $update = input('post.');
            $result = db('cate') -> where('cateId',$cateId) -> update($update);
            if($result){

                //操作记录
                $op = new Operation();
                $op_admin = session('kkstars_adminName');
                $op -> op('update','栏目',$op_admin,$update['cateName']);

                //当更改栏目成功后 需要更新旧缓存
                if($redis -> has('CommCate')){

                    $cate = db('cate') -> where('status',1) -> select();

                    $redis -> set('CommCate',$cate);
                }

                $redis = new Redis();
                $redis -> rm('CommCate');
                $redis -> rm('rightCate');

                $this->success('修改栏目成功!正在跳转……',url('cate/category'));

            }else{
                $this->error('修改栏目失败!');
            }
        }

        return view();
    }

    public function updateFlink()
    {
        $id = input('id');
        if($id){
            $UpdateData = db('friendshiplink') -> where('friendshipLinkId',$id) -> find();
            $this -> assign('UpdateData',$UpdateData);
        }
        if(request() -> isPost()){
            $data = input('post.');
            if($data){
                $result = db('friendshiplink') -> where('friendshipLinkId',$data['friendshipLinkId']) -> update($data);
                if($result){

                    //操作记录
                    $op = new Operation();
                    $op_admin = session('kkstars_adminName');
                    $op -> op('update','友情链接',$op_admin,$data['friendshipLinkName']);

                    $this -> success('修改成功!');
                }else{
                    $this -> error('修改失败!');
                }
            }
        }
        return view();
    }

}
