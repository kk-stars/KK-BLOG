<?php

namespace app\babysbreath\validate;
use \think\Validate;

class ValidateMood extends Validate{

    //规则
    protected $rule = [
        'moodTitle'    => 'require|max:100',
        'moodContent'  => 'require',
    ];

    //错误信息
    protected $message = [
        'moodTitle.require'    => '标题不能为空！',//require : 验证某个字段必须(不能为空)
        'moodTitle.max'        => '标题长度不能超过100位字符！',//max : 验证某个字段的值的最大长度
        'moodContent.require'  => '内容不能为空！',
    ];

}

?>