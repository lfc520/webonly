<?php
class readme extends Controller{
	public function feature(){
		$this->assign("feature",true);
		$this->view("admin/readme.html");
	}
	public function func(){
		$this->assign("func",true);
		$this->view("admin/readme.html");
	}
	public function catalogoue(){
		$this->assign("catalogoue",true);
		$this->view("admin/readme.html");
	}
}
?>