<?php

namespace app\babysbreath\validate;
use \think\Validate;

class ValidateSetting extends Validate{

    //规则
    protected $rule = [
        'name'     => 'require|max:16',
        'beian'    => 'require|max:32',
        'mobile'   => 'require|max:11',
        'mobile'   => ['regex' => '/(^1[3|4|5|7|8]\d{9}$)|(^09\d{8}$)/'],
        'title'    => 'require|max:60',
        'alias'    => 'max:18',
        'url'      => 'require|max:64|url',
        'keywords' => 'require|max:64',
        'email'    => 'require|max:64|email',
    ];

    //错误信息
    protected $message = [
        'name.require'     => '负责人姓名不能为空！',//require : 验证某个字段必须(不能为空)
        'name.max'         => '负责人姓名长度不能超过16位字符！',//max : 验证某个字段的值的最大长度

        'beian.require'    => '备案号不能为空！',
        'beian.max'        => '备案号长度不能超过32位字符！',

        'mobile.require'   => '联系电话不能为空！',//require : 验证某个字段必须(不能为空)
        'mobile.max'       => '联系电话长度不能超过11位字符！',//max : 验证某个字段的值的最大长度
        'mobile.regex'     => '无效的联系电话',

        'title.require'    => '网站标题不能为空！',//require : 验证某个字段必须(不能为空)
        'title.max'        => '网站标题长度不能超过60位字符！',//max : 验证某个字段的值的最大长度

        'url.require'      => 'URL网站地址不能为空！',//require : 验证某个字段必须(不能为空)
        'url.max'          => 'URL网站地址长度不能超过64位字符！',//max : 验证某个字段的值的最大长度
        'url.url'          => '无效的URL网站地址！',

        'keywords.require' => '网站关键字不能为空！',//require : 验证某个字段必须(不能为空)
        'keywords.max'     => '网站关键字长度不能超过64位字符！',//max : 验证某个字段的值的最大长度

        'email.require'    => '邮箱地址不能为空！',//require : 验证某个字段必须(不能为空)
        'email.max'        => '邮箱地址长度不能超过64位字符！',//max : 验证某个字段的值的最大长度
        'email.email'      => '无效的邮箱地址！',

        'alias.max'        => '负责人别名长度不能超过18位字符！',//max : 验证某个字段的值的最大长度
    ];

}

?>