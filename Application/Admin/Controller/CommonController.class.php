<?php
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller{
	
	protected function _initialize(){
		
		$user_id = session('user_id');
		if(!isset($user_id)){
			redirect(U('Login/index'));
		}
//		//分配文件下的js文件
		$this->assign('js_file',CONTROLLER_NAME.'/js/'.ACTION_NAME);
	}
	
	//生成查询条件
	protected function _search($name=null){
		//过滤非查询条件
		$map = array();
		$request = array_filter(array_keys(array_filter($_REQUEST,"filter_search_null")),"filter_search_field");
		if(empty($name)){
			$name = CONTROLLER_NAME;
		}
		$model = D($name);
		$fields = get_model_fields($model);
		foreach ($request as $val){
			$field = substr($val, 3);
			$prefix = substr($val, 0,3);
			if(in_array($field, $fields)){
				if($prefix=='be'){
					if(isset($_REQUEST['en_'.$field])){
						if(strpos($field, "time")){
							$map[$field] = array(array('egt',strtotime(trim($val))),array('elt',strtotime(trim('en_'.$field))));
						}
					}
				}
				if($prefix =='li_'){
					$map[$field] = array('like','%'.trim($_REQUEST[$val]).'%');
				}
				if($prefix =='eq_'){
					$map[$field] = array('eq',trim($_REQUEST[$val]));
				}
				if($prefix == 'lt_'){
					$map[$field] = array('elt',trim($_REQUEST[$val]));
				}
				if($prefix == 'gt_'){
					$map[$field] = array('egt',trim($_REQUEST[$val]));
				}
			}
		}
		return $map;
	}
	
	//标签管理
	protected function _tag_manage($tag_name,$has_pid=true){
		$this->assign('tag_name',$tag_name);
		$this->assign('has_pid',$has_pid);
		R('SystemTag/index');
		$this->assign('js_file',"SystemTag:js/index");
	}
	
	//查看页面
	function read(){
		$this->_edit();
	}
	
	protected function _edit($name=null,$id=null){
		if(empty($name)){
			$name = CONTROLLER_NAME;
		}
		
		$id = $_REQUEST["id"];
		$model = M($name);
		$vo = $model->find($id);
		if(IS_AJAX){
			if($vo !== FALSE){
				$this->ajaxReturn($vo);
			}else{
				$this->ajaxReturn(0);
				die;
			}
		}
		die;
		$this->assign("vo",$vo);
		$this->display();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}