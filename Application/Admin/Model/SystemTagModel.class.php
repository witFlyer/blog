<?php
namespace Admin\Model;
use Think\Model;

class SystemTagModel extends CommonModel{
	
	public function get_tag_list($field = "id,name",$module = CONTROLLER_NAME){
		$where['module'] = $module;
		$list = $this->where($where)->order('sort ASC')->getField($field);
		return $list; 
	}
}
