<?php
namespace app\index\controller;
use think\Controller;

class Search extends Comm {
    public function search(){

        $text = input('k');
        $text = strip_tags($text);//清除变量里的HTML和PHP标签

        $text = '%' . $text . '%';

        $result = db('article') ->
        alias('a') ->
        join('cate c','a.articleCate = c.cateId') ->
        where([
            'a.articleTitle|a.articleTags|a.articleKeywords|a.articleDescription' => ['like',$text],
            'a.status' => 1
            ]) -> paginate('13');

        if($result){

            $this -> assign('art',$result);

        }

        return view();
    }
}

?>