<?php
namespace Admin\Controller;
use Think\Controller;

class ArticleController extends CommonController{
	
	
	
	function index(){	
		$map = $this->_search();
		$map['is_del'] = 0;
		$list=M('Article')->where($map)->order("create_time DESC")->select();
		$this->assign('list',$list);
		$this->show();
	}
}
