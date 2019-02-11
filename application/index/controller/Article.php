<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Cookie;
use app\babysbreath\model\Operation;
use app\index\model\GetIP;

class Article extends Comm{
    public function article_detail(){
        $aid = input('aid');

        db('article') -> where('articleId',$aid) -> setInc('articleClicks');

        //查询指定ID的文章详情数据
        $adata = db('article') -> alias('a') -> join('cate c','a.articleCate = c.cateId') -> where('articleId',$aid) -> field('a.*,c.cateName,c.cateId') -> find();

        if($adata !== null){
            $about = db('aboutme') -> where('meId',$adata['ator']) -> find();

            //strtotime() 函数将任何英文文本的日期或时间描述解析为 Unix 时间戳（自 January 1 1970 00:00:00 GMT 起的秒数）
            $date= strtotime($adata['addTime']);
            $adata['addTime'] = date("Y年m月d日 H:i:s",$date);

            $adata['articleKeywords'] = explode('|',$adata['articleKeywords']);

            $adata['articleTags'] = explode('|', $adata['articleTags']);

            //下一篇
            $down = db('article') -> where('status',1) -> where('articleId','>',$aid) -> order('articleId asc') -> field('articleId,articleTitle') -> find();

            //上一篇
            $up = db('article') -> where('status',1) -> where('articleId','<',$aid) -> order('articleId desc') -> field('articleId,articleTitle') -> find();

            $click = input('clickAid');
            if($click){
                db('article') -> where('articleId',$click) -> setInc('articleClicks');
            }

            $this->assign([
                'a'   => $adata,
                'am'   => $about,
                'up'   => $up,
                'down' => $down,
                'aid'  => $aid
            ]);

        }

        return view();
    }

    //栏目文章
    public function article(){
        if(input('cid') !== null){
            //栏目文章列表
            $cateId = input('cid');
            $cName = db('cate') -> where('cateId',$cateId) -> field('cateName') -> find();

            $articles = db('article') -> alias('a') -> join('cate c','a.articleCate = c.cateId') -> where(['a.articleCate' => $cateId,'a.status' => 1]) -> field('a.*,c.cateName') -> order('addtime desc') -> paginate(13,false,['query' => Request::instance() -> param()]);
            //'query' => Request::instance() -> param() ::: 保留原有的参数

            $this -> assign([
                'cateName' => $cName['cateName'],
                'n'   => '1',
                'art' => $articles,
            ]);

        }else{
            $articles = db('article') -> alias('a') -> join('cate c','a.articleCate = c.cateId') -> where('a.status',1) -> field('a.*,c.cateName') -> order('rand()') -> paginate(13);
            $this -> assign('art',$articles);
        }
        return view();
    }
}