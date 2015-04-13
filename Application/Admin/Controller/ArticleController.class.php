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
	
	function add(){
		$widget['upload'] = true;
		$widget['editor'] = true;
		$this -> assign("widget", $widget);
		$this->show();
	}
	
	function upload(){
		$model = M('Article');
		$upload = new \Think\Upload();
		$upload->exts = array('jpg','png','gif','jpeg');
		$upload->maxSize = 3145728;
		$upload->savePath = './'.C('SAVE_PATH');
		$info = $upload->upload();
 		if(!$info){// 上传错误提示错误信息
  			$this->error($upload->getError());
  		}else{// 上传成功 获取上传文件信息
  			$this->success("上传成功!");
  		}
  		for($i=0;$i<count($info);$i++){
  			$data['name']=$info[$i]['savename'];
  			$data['size']=$info[$i]['size'];
  			$data['type']=$info[$i]['extension'];
  			echo $info[$i]['savename'];
//			$rs=$ph->add($data);
  		}
	}
}
