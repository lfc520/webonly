<?php
class comment extends Controller{
    public function add($data=array()){
        //$this->dump($_POST);
        $array=array(
            'state'=>1,
            'uid'=>$_POST['uid'],
            'tid'=>$_POST['tid'],
            'content'=>$_POST['content'],
            'date'=>date("Y-m-d H:i:s")
        );
        $result=$this->model->add("comment", $array);
        if($result){
            echo "ok";
        }else{
            echo "failed";
        }
    }
    public function getAll(){
        $total=$this->model->getAllTotal("comment","where state=1");
        $page=new Ajax_Page($total,5);
        $allComment=$this->model->getAll("comment","where state=1 order by id desc ".$page->limit);
        $temp=array();
        $temp[0]=$allComment;
        $temp[1]=$page->display(array(0,1,2,3,4));
        echo json_encode($temp);
    }
}
?>