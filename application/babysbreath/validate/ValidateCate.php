<?php

namespace app\babysbreath\validate;
use \think\Validate;

class ValidateCate extends Validate{

    //规则
    protected $rule = [
        'cateName'       => 'require|max:50',
        'cateAlias'      => 'require|max:50',
        'cateFather'     => 'require',
    ];


    //错误信息
    protected $message = [
        'cateName.require'    => '栏目标题不能为空！',//require : 验证某个字段必须(不能为空)
        'cateName.max'        => '栏目标题长度不能超过50位字符！',//max : 验证某个字段的值的最大长度
        'cateAlias.require'   => '栏目别名不能为空！',
        'cateAlias.max'       => '栏目别名长度不能超过50位字符',
        'cateFather.require'  => '请选择栏目的父级栏目！',
    ];

}

?>