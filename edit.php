<?php
include_once("common.php");


$id = $_GET['id'];  //用GET方式调出id
$s->assign("id", $id);  //使PHP代码在HTML中可以直接使用


$xiu = fetch_one_array("select * from article where id='$id'"); //查询单条语句
$s->assign("xiu", $xiu);

$cate = allRes("select * from category"); //取出数据库中栏目的所有信息
$s->assign('cate',$cate);

if($_POST){   //提交出所需要得到的值
    $title =$_POST['title'];
    $editor1 = $_POST['editor1'];
    $cate_id = $_POST['cate_id'];
    mysql_query("update article set title='$title', content='$editor1', cate_id='$cate_id' where id='$id'");
    echo "<script>alert('恭喜您修改成功!')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}

$s->display("edit.html");