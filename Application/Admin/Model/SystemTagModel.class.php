<?php
namespace Admin\Model;
use Think\Model;

class SystemTagModel extends CommonModel{
	
	public function get_tag_list($field = "id,name",$controller = CONTROLLER_NAME){
		$where['controller'] = $controller;
		$list = $this->where($where)->field($field)->order('sort ASC')->select();
		return $list; 
	}
	
	//删除标签
	public function del_tag(){
		
	}
}
