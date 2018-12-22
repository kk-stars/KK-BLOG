<?php
namespace app\babysbreath\controller;
use app\babysbreath\model\Operation;
use think\cache\driver\Redis;

class About extends Comm{
    public function about()
    {
        $about = db('aboutme') -> where('aboutId','1') -> find();
        $this -> assign('about',$about);

        if(request()->isPost()){
            $about = input('post.');
            if(session('kkstars_adminId') === 1){
                if(!empty($_FILES['wechat']['name'])) {
                    $img = request()->file('wechat');
                    $path = ROOT_PATH . "public" . DS . "static\admin\Upload";
                    $picInfo = $img->validate(['sixe' => '5000 * 1024', 'ext' => 'jpg,gif,jpeg,png'])->move($path);
                    $about['wechat'] = "admin/Upload/" . date('Ymd') . '/' . $picInfo->getFilename();

                    if ($picInfo) {

                    } else {
                        $this->error($picInfo->getError());
                    }
                }

                $upAbout = db('aboutme') -> where('aboutId','1') -> update($about);
                if($upAbout){
                    //记录操作
                    $op = new Operation();
                    $op_admin = session('kkstars_adminName');
                    $op -> op('update','我的信息',$op_admin,'修改信息成功！');

                    $redis = new Redis();
                    $redis -> rm('CommAboutme');

                    $this->success('修改成功！');
                }else{
                    $this->error('修改失败！',url('About/about'));
                }
            }else{
                $this->error('修改失败！你无权限修改网站设置',url('About/about'));
            }
        }
        return view();
    }
}
