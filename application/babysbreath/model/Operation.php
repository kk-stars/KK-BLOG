<?php
namespace app\babysbreath\model;
use think\Model;
use think\Request;

class Operation extends Model{

    public function op($op_type,$op_module,$op_admin,$op_details)
    {
        //op_type   操作类型：login为登录，update为修改操作，delete为删除操作，add为添加操作， other为其它操作
        //op_module 操作模块：文章，心情随笔，评论，网站留言，栏目，友情链接，设置，管理员密码

        $op_ip = Request::instance() -> ip(); // 获取用户IP地址

        $op = [
            'op_ip'      => $op_ip,
            'op_type'    => $op_type,
            'op_module'  => $op_module,
            'op_admin'   => $op_admin,
            'op_details' => $op_details,
        ];
        db('operation') -> insert($op);
    }

    public function operation($op){
    }

    public function loginInfo($Name){
        db('admin') -> where('loginName',$Name) -> update(['lastLoginTime' => date("Y-m-d H:i:s")]);/* 保存登录时间  */
        db('admin') -> where('loginName',$Name) -> setInc('numberOfLogin');/* 登录成功后登录次数加  1   */

    }
}

?>