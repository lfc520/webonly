<?php
    include "../../vendor/kong/Ajax_Page.class.php";
    $pdo=new PDO("mysql:host=qdm199428682.my3w.com;dbname=qdm199428682_db","qdm199428682", "kongxiangrui");
    $pdo->query("set names utf8");
    $q=$pdo->query("select * from comment");
    $total=$q->rowCount();
    //echo $total;
    $page=new Ajax_Page($total,5);
    $sql="select * from comment where state=1 order by id desc ".$page->limit;
    //echo $sql;
    $query=$pdo->query($sql);
    $temp=array();
    $temp[0]=$query->fetchAll(PDO::FETCH_OBJ);
    $temp[1]=$page->display(array(0,1,2,3,4));
    echo json_encode($temp);
?>