<?php
class feedback extends Controller{
    public function getFeedback(){
        $array=array(
            'username'=>$_POST['username'],
            'reportMsg'=>$_POST['reportMsg'],
            'contact'=>$_POST['contact'],
            'state'=>0,
            'reportTime'=>date('Y-m-d H:i:s')
        );
        $result=$this->model->add("feedback", $array);
        if($result){
            echo 'ok';
        }else{
            echo "failed";
        }
    }
    public function deleteAll(){
        if(isset($_POST['send'])){
            $multiId=implode(",", $_POST['selectAll']);
            //echo $multiId;
            if($this->model->delete("feedback","where id in (".$multiId.")")){
                $this->redirect("多删成功","/feedback/admin");
            }else{
                $this->redirect("多删失败","",0);
            }
        }
        $this->assign("admin",true);
        $this->view("admin/feedback.html");
    }
    public function state($data=array()){
        $this->setState($data,"feedback","admin/feedback.html");
    }
    public function admin(){
        $this->checkPermission(16);
        $this->page($this->model->getAllTotal("feedback"));
        $AllFeedback=$this->model->getAll("feedback","order by id desc",$this->limit);
        //$this->dump($AllFeedback);
        foreach ($AllFeedback as $value){
        switch ($value->state){
                case 0:
                    $value->state="<span style='color:red;'>[未处理]</span>
							<a href='/feedback/state/flag/show/id/".$value->id."'>处理</a>";
                    break;
                case 1:
                    $value->state="<span style='color:green;'>[已处理]</span>
							<a href='/feedback/state/flag/hide/id/".$value->id."'>未处理</a>	";
            }
        }
        $this->assign("AllFeedback",$AllFeedback);
        $this->assign("admin",true);
        $this->view("admin/feedback.html");
    }
}
?>