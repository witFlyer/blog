<?php
namespace Admin\Controller;
use Think\Controller;

class ArticleController extends CommonController{
	
	public function index(){	
		$map = $this->_search();
		$map['is_del'] = 0;
		$list=M('Article')->where($map)->order("create_time DESC")->select();
		$this->assign('list',$list);
		$this->show();
	}
	
	public function add(){
		$widget['upload'] = true;
		$widget['editor'] = true;
		$this -> assign("widget", $widget);
		
		$model = D('SystemTag');
		$tag_list = $model -> get_tag_list($field="id,name",$controller="ArticleTag");
		$this -> assign("tag_list", $tag_list);
		$this->show();
	}
	
	public function upload(){
		if(!empty($_FILES)){
			 $config = array(
                'maxSize'    =>    3145728, 
                'savePath'   =>   '/cover/',  
                'saveName'   =>    array('uniqid',''), 
                'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),  
                'autoSub'    =>    true,   
                'subName'    =>    array('date','Ymd'),
            );
			$upload = new \Think\Upload($config);
			$info = $upload->upload();
 			if(!$info){
 				 $this->error($upload->getError());
  			}else{
  				$result=$info['Filedata']['savepath'].$info['Filedata']['savename'];
                //返回文件地址和名给JS作回调用
                echo $result;
  			}
		}
	}
	
	public function del(){
		$id = $_POST['article_id'];
		$count = $this->_del($id,null,true);
		if($count!==FALSE){
			//删除文章的封面图片
			
			//保存成功
			$this->assign('jumpUrl', get_return_url());
			$this->success("成功删除{$count}条!");
		}else{
			$this->error("删除失败");
		}
	}
	//编辑页
	function edit(){
		$widget['upload'] = true;
		$widget['editor'] = true;
		$this -> assign("widget", $widget);
		
		$id = $_REQUEST['id'];
		$list = M('Article')->where("id=$id")->find();
		$this->assign('list',$list);
		
		$model = D('SystemTag');
		$tag_list = $model -> get_tag_list($field="id,name",$controller="ArticleTag");
		$this -> assign("tag_list", $tag_list);
		$this->show();
	}
}
