<?php
class comment extends Controller{
    public function deleteAll(){
        if(isset($_POST['send'])){
            $this->multiDelete("comment");
        }
        $this->assign("adminShow",true);
        $this->view("admin/comment.html");
    }
    public function state($data=array()){
        $this->setState($data,"comment", "admin/comment.html");
    }
    public function adminShow(){
        $this->checkPermission(2);
        $this->page($this->model->getAllTotal("comment"));
        $data=$this->model->getAll("comment","order by id desc",$this->model->limit);
        foreach ($data as $value){
            $oneArticle=$this->model->getOne("article","where id=".$value->aid);
            //Tools::dump($oneArticle);
            $value->title=$oneArticle[0]->title;
            switch ($value->state){
                case 0:
                    $value->state="<span style='color:red;'>[否]</span>
							<a href='/comment/state/flag/show/id/".$value->id."'>显示</a>";
                    break;
                case 1:
                    $value->state="<span style='color:green;'>[是]</span>
							<a href='/comment/state/flag/hide/id/".$value->id."'>隐藏</a>	";
            }
            $oneUser=$this->model->getOne("user", "where id=".$value->uid);
            $value->username=$oneUser[0]->username;
        }
        $this->assign("data",$data);
        $this->assign("show",true);
        $this->view("admin/comment.html");
    }
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
    public function addProductComment($data=array()){
        //$this->dump($_POST);
        $array=array(
            'state'=>1,
            'uid'=>$_POST['uid'],
            'cid'=>$_POST['cid'],
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
    public function getAllProductComment(){
        //$this->dump($_GET);
        $total=$this->model->getAllTotal("comment","where state=1 and cid=".$_GET['cid']);
        $page=new Ajax_Page($total,5);
        $allComment=$this->model->getAll("comment","where state=1 and cid=".$_GET['cid']." order by id desc ".$page->limit);
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