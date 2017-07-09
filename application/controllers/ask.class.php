<?php
class ask extends Controller{
    private function course($num=0){
        $str=null;
        $allCourse=$this->model->getAll("course");
        foreach ($allCourse as $key=>$value){
            if($num==$value->id){
                $selected="selected='selected'";
            }else{
                $selected='';
            }
            $str.="<option value='".$value->id."' ".$selected.">".$value->name."</option>";
        }
        $this->assign("course",$str);
    }
    public function detail($data=array()){
        if($data['id']){
            $oneAsk=$this->model->getOne("ask","where id=".$data['id']);
            $oneAskUser=$this->model->getOne("user","where id=".$oneAsk[0]->uid);
            $oneAsk[0]->uid=$oneAskUser[0]->username;
            $oneAsk[0]->icon=$oneAskUser[0]->icon;
            $oneAsk[0]->reponse_num=$this->model->getAllTotal("ask","where pid=".$oneAsk[0]->id);
            //$this->dump($oneAsk);
            $this->page($this->model->getAllTotal("ask","where pid=".$data['id']));
            $responds=$this->model->getAll("ask","where pid=".$data['id']." order by id desc ",$this->model->limit);
            foreach ($responds as $key=>$value){
                $oneUser=$this->model->getOne("user","where id=".$value->uid);
                $value->uid=$oneUser[0]->username;
                $value->icon=$oneUser[0]->icon;
                $value->subResponds=$this->model->getAll("ask","where pid=".$value->id." order by id desc","limit 0,10");
                foreach ($value->subResponds as $k=>$v){
                    $oneUser=$this->model->getOne("user","where id=".$v->uid);
                    $v->uid=$oneUser[0]->username;
                    $v->icon=$oneUser[0]->icon;
                }
            }
            //$this->dump($value->subResponds);
            $this->assign("responds",$responds);
            $this->assign("oneAsk",$oneAsk[0]);
        }
        $this->assign('detail',true);
        $this->view("home/ask.html");
    }
    /*@todo  */
    public function addResponse($data=array()){
        if(isset($_POST['send'])){
            $this->dump($_POST);
            /* $array=array(
                'cid'=>$_POST['cid'],
                'content'=>$_POST['respond'],
                'uid'=>$_POST['uid'],
                'pid'=>$_POST['id'],
                'date'=>date("Y-m-d H:i:s")
            );
            if($this->model->add("ask",$array)){
                //$this->redirect("回复成功","/home/index");
                //$this->redirect("回复成功","/ask/detail/id=".$_POST['id']);
                //header("location:?".$_SERVER['HTTP_REFERER']);
            }else{
                exit("回复失败！");
            } */
        }
        $this->assign("respond",true);
        $this->view("home/ask.html");
    }
    public function respond($data=array()){
        if(isset($_POST['send'])){
            //$this->dump($_POST);
            $array=array(
             'cid'=>$_POST['cid'],
             'content'=>$_POST['respond'],
             'uid'=>$_POST['uid'],
             'pid'=>$_POST['id'],
             'cid'=>$_POST['cid'],
             'date'=>date("Y-m-d H:i:s")
             );
            if($this->model->add("ask",$array)){
                $this->model->exec("update ask set answerNum=answerNum+1 where id=".$_POST['id']);
                $this->redirect("回复成功","/home/index");
            }else{
                $this->redirect("回复失败","/home/index",0);
            }
        }
        $this->hotAsk();
        $this->assign("id",$data['id']);
        $oneTopic=$this->model->getOne("ask","where id=".$data['id']);
        $this->assign("oneTopic",$oneTopic[0]);
        $this->assign("pid",$oneTopic[0]->id);
        $this->assign("cid",$oneTopic[0]->cid);
        $this->assign("respond",true);
        $this->view("home/ask.html");
    }
    private function hotAsk(){
        //热门回答
        $askLeaderboard=$this->model->getAll("ask","where pid=0 order by answerNum desc limit 0,7");
        foreach ($askLeaderboard as $k=>$v){
            $oneUser=$this->model->getOne("user","where id=".$v->uid);
            $v->uid=$oneUser[0]->username;
        }
        $this->assign("askLeaderboard",$askLeaderboard);
    }
    public function addTopic(){
        if(isset($_POST['send'])){
            //$this->dump($_POST);
            $array=array(
                'topic'=>$_POST['topic'],
                'content'=>$_POST['content'],
                'uid'=>$_POST['uid'],
                'date'=>date('Y-m-d H:i:s'),
                'pid'=>0,
                'cid'=>$_POST['cid']
            );
            if($this->model->add("ask",$array)){
                $this->redirect("添加提问成功","/home/index");
            }else{
                $this->redirect("添加提问失败",$_SERVER['HTTP_REFERER'],0);
            }
        }
        $this->assign("showTopic",true);
        $this->view("home/ask.html");
    }
    public function deleteAll(){
        if(isset($_POST['send'])){
            $this->multiDelete("ask");
        }
        $this->assign("show",true);
        $this->view("admin/ask.html");
    }
    public function showTopic(){
		$this->hotAsk();
        $this->course();
        $this->assign("showTopic",true);
        $this->view("home/ask.html");
    }
    public function show(){
        $this->checkPermission(20);
        $AllCourse=$this->model->getAll("course");
        $courseStr=null;
        foreach ($AllCourse as $value){
            $courseStr.=$value->id.",";
        }
        $courseStr=rtrim($courseStr,",");
        //echo $levelStr;
        if(empty($_GET['kind'])){
            $kind=$courseStr;
        }else{
            $kind=$_GET['kind'];
        }
        $this->page($this->model->getAllTotal("ask"));
        $AllAsk=$this->model->getAll("ask","order by id desc",$this->model->limit);
        foreach ($AllAsk as $key=>$value){
            $oneCourse=$this->model->getOne("course","where id=".$value->cid);
            $value->courseName=$oneCourse[0]->name;
            $value->answerNum=$this->model->getAllTotal("ask","where pid=".$value->id);
            $oneUser=$this->model->getOne("user","where id=".$value->uid);
            $value->username=$oneUser[0]->username;
        }
        $this->course($_GET['kind']);
        //Tools::dump($AllAsk);
        $this->assign("AllAsk",$AllAsk);
        $this->assign("show",true);
        $this->view("admin/ask.html");
    }
}
?>