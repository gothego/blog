<?php
include_once("common.php");

$cate = allRes("select * from category");
$s->assign('cate',$cate);

if($_POST){
    $title = $_POST['title'];
    $content = $_POST['editor1'];
    $cate_id = $_POST['cate_id'];
    mysql_query("insert into article (title, content, cate_id, date) values ('$title', '$content', '$cate_id', '$date')");
    echo "<script>alert('恭喜您发布成功!')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}




$s->display("add.html");