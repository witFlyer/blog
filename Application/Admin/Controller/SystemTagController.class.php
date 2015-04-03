<?php
namespace Admin\Controller;
use Think\Controller;

class SystemTagController extends CommonController{
	
	function index(){
		
		$this -> assign('js_file',"SystemTag:js/index");
		$this -> display('SystemTag:index');
	}
	
	protected function add(){
		$model = D('SystemTag');
		if(FALSE !== $model->create()){
			$this->error($model->getError());
		}
		//保存当前数据
		$model->module = MODULE_NAME;
	}
}
