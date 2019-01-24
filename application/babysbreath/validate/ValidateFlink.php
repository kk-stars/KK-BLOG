<?php

namespace app\babysbreath\validate;
use \think\Validate;

class ValidateFlink extends Validate{

    //规则
    protected $rule = [
        'friendshipLinkName' => 'require|max:200',
        'friendshipLinkURL'  => 'require',
    ];

    //错误信息
    protected $message = [
        'friendshipLinkName.require' => '友情链接名不能为空！',//require : 验证某个字段必须(不能为空)
        'friendshipLinkName.max'     => '友情链接名长度不能超过200位字符！',//max : 验证某个字段的值的最大长度
        'friendshipLinkURL.require'  => '友情链接地址不能为空！',
    ];

}

?>