<?php

namespace app\babysbreath\validate;
use \think\Validate;

class ValidateArticle extends Validate{

    //规则
    protected $rule = [
        'articleTitle'    => 'require|max:99',
        'articleContent'  => 'require',
        'articleCate'     => 'require',
    ];

    //错误信息
    protected $message = [
        'articleTitle.require'    => '文章标题不能为空！',//require : 验证某个字段必须(不能为空)
        'articleTitle.max'        => '文章标题长度不能超过99位字符！',//max : 验证某个字段的值的最大长度
        'articleContent.require'  => '文章内容不能为空！',
        'articleCate.require'     => '请选择文章的所属栏目！',
    ];

}

?>