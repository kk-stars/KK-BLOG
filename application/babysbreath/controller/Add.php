<?php
namespace app\babysbreath\controller;

use app\babysbreath\model\Cate as CateModel;
use app\babysbreath\model\Operation;
use think\cache\driver\Redis;

class Add extends Comm{
    //文章
    public function addArticle(){
        $cateModel = new CateModel();
        $cateSort = $cateModel->cateTree();
        $this->assign('cate',$cateSort);

        if(request()->isPost()){
            $data = input('post.');
            $data['ator'] = session('kkstars_adminName');

            //通过控制器上传图片
            if (!empty($_FILES['articlePic']['name'])){
                $pic = request()->file('articlePic');
                $path = ROOT_PATH."public".DS."static\admin\Upload";
                $picInfo = $pic -> validate(['sixe'=>'5000 * 1024','ext'=>'jpg,gif,jpeg,png']) -> move($path);
                if ($picInfo){
                    $data['articlePic'] = "admin/Upload/" . date('Ymd') . '/' . $picInfo->getFilename();
                }else{
                    return $this->error($pic->getError());
                }
            }

            $validate = \think\loader::Validate('ValidateArticle');
            if($validate -> check($data)){

                $addResult = db('article') -> insert($data);
                if($addResult){

                    //操作记录
                    $op = new Operation();
                    $op_admin = session('kkstars_adminName');
                    $op -> op('add','文章',$op_admin,$data['articleTitle']);

                    $redis = new Redis();
                    $redis -> clear();

                    $this->success('文章添加成功!正在跳转……',url('Article/article'));
                }else{
                    $this->error('文章添加失败!');
                }

            }else{
                $this -> error($validate -> getError());
            }
        }
        return view();
    }
    //栏目
    public function addCategory(){
        $redis = new Redis();

        $cateModel = new CateModel();
        $cateSort = $cateModel->cateTree();
        $this->assign('cate',$cateSort);

        if(request()->isPost()){
            $cateData = input('post.');

            $validateCate = \think\loader::validate('ValidateCate');
            if($validateCate -> check($cateData)){

                $result = db('cate') -> insert($cateData);
                if($result){

                    //操作记录
                    $op = new Operation();
                    $op_admin = session('kkstars_adminName');
                    $op -> op('add','栏目',$op_admin,$cateData['cateName']);


                    //当添加栏目成功后 需要更新旧缓存
                    if($redis -> has('CommCate')){

                        $cate = db('cate') -> where('status',1) -> select();

                        $redis -> set('CommCate',$cate);
                    }

                    $redis = new Redis();
                    $redis -> rm('CommCate');
                    $redis -> rm('rightCate');

                    $this->success('栏目添加成功!正在跳转……',url('Cate/category'));

                }else{
                    $this->error('栏目添加失败!');
                }

            }else{

                $this -> error($validateCate -> getError());

            }
        }
        return view();
    }


    public function addFlink(){
        $linkData = input('post.');
        if(request()->isPost()){

            if(!empty($_FILES['pic']['name'])){
                $pic = request() -> file('pic');
                $path = ROOT_PATH.'public'.DS."static\admin\Upload";
                $picinfo = $pic -> validate(['sixe' => '5000 * 1024','ext' => 'jpeg,gif,jpg,png']) -> move($path);
                if($picinfo){
                    $linkData['pic'] = 'admin/Upload/'.date('Ymd').'/'.$picinfo -> getFilename();
                }else{
                    return $this->error($pic -> getError());
                }

            }

            $validateFlink = \think\loader::validate('ValidateFlink');
            if($validateFlink -> check($linkData)){

                $result = db('friendshiplink') -> insert($linkData);
                if($result){

                    //操作记录
                    $op = new Operation();
                    $op_admin = session('kkstars_adminName');
                    $op -> op('add','友情链接',$op_admin,$linkData['friendshipLinkName']);

                    $this->success('链接添加成功!正在跳转……',url('Flink/flink'));
                }else{
                    $this->error('链接添加失败!');
                }

            }else{

                $this -> error($validateFlink -> getError());

            }
        }
        return view();
    }


    public function addMood(){
        $moodData = input('post.');
        if(request()->isPost()){

            if(!empty($_FILES['moodPic']['name'])){
                $pic = request() -> file('moodPic');
                $path = ROOT_PATH.'public'.DS."static\admin\Upload";
                $picinfo = $pic -> validate(['sixe' => '5000 * 1024','ext' => 'jpeg,gif,jpg,png']) -> move($path);
                if($picinfo){
                    $moodData['moodPic'] = 'admin/Upload/'.date('Ymd').'/'.$picinfo -> getFilename();
                }else{
                    return $this->error($pic -> getError());
                }

            }

            $validateMood = \think\loader::validate('ValidateMood');
            if($validateMood -> check($moodData)){

                $result = db('mood') -> insert($moodData);
                if($result){

                    //操作记录
                    $op = new Operation();
                    $op_admin = session('kkstars_adminName');
                    $op -> op('add','心情随笔',$op_admin,$moodData['moodTitle']);

                    $this->success('新心情添加成功!正在跳转……',url('mood/mood'));
                }else{
                    $this->error('新心情添加失败!');
                }

            }else{

                $this -> error($validateMood -> getError());

            }
        }
        return view();
    }
}
