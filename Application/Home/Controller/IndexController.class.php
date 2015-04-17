<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$list = M('Article')->where("is_del=0")->select();
		$this->assign('list',$list);
		
		$tag_list = M('SystemTag')->where("controller='ArticleTag'")->field('id,name')->select();
		foreach($tag_list as $k=>$v){
			$where['tag'] = $v['id'];
			$where['is_del'] = 0;
			$count = M('Article')->where($where)->count();
			$tag_list[$k]['count'] = $count;
		}
		$this->assign('tag_list',$tag_list);
        $this->show();
    }
    public function read(){
    	$id = $_REQUEST['id'];
		$result = M('Article')->where("id=$id")->find();
		$this->assign('result',$result);
    	$this->show();
    }
	public function tag_article(){
		$id = $_REQUEST['tag_id'];
		
		$tag_name = M('SystemTag')->where("id=$id")->getField('name');
		$article_list = M('Article')->where("tag=$id")->select();
		$count = M('Article')->where("tag=$id")->count();
		
		$tag_list = M('SystemTag')->where("controller='ArticleTag'")->field('id,name')->select();
		foreach($tag_list as $k=>$v){
			$where['tag'] = $v['id'];
			$where['is_del'] = 0;
			$count = M('Article')->where($where)->count();
			$tag_list[$k]['count'] = $count;
		}
		
		$this->assign('tag_list',$tag_list);
		$this->assign('article_list',$article_list);
		$this->assign('tag_name',$tag_name);
		$this->assign('count',$count);

		$this->show();
	}
    public function game(){
    	$this->show();
    }
}