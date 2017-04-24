<?php
class comment extends Controller{
    public function add($data=array()){
        //$this->dump($_POST);
        $array=array(
            'state'=>1,
            'uid'=>$_POST['uid'],
            'aid'=>$_POST['aid'],
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
        //$this->dump($_GET);
        $total=$this->model->getAllTotal("comment","where state=1 and aid=".$_GET['aid']);
        $page=new Ajax_Page($total,5);
        $allComment=$this->model->getAll("comment","where state=1 and aid=".$_GET['aid']." order by id desc ".$page->limit);
        foreach($allComment as $key=>$value){
            $oneUser=$this->model->getOne("user", "where id=".$value->uid);
            $value->icon=$oneUser[0]->icon;
            $value->username=$oneUser[0]->username;
        }
        //$this->dump($allComment);
        $temp=array();
        $temp[0]=$allComment;
        $temp[1]=$page->display(array(0,1,2,3,4));
        echo json_encode($temp);
    }
}
?>