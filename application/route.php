<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    '__alias__'   => [
        'home'  => 'index/index/index',//简写URL ： home别名    => index模块     / index控制器    / index方法
        'mood'  => 'index/mood/mood',
        'board'  => 'index/board/board',
        'about'  => 'index/about/about',
        'article' => 'index/Article/article_detail',
        'cate'    => 'index/Article/article',
        'search'  => 'index/Search/search',
    ],

];

?>
