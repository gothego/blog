<?php

include_once("common.php");

$id = $_GET['id'];
$s->assign("id", $id);

mysql_query("delete from article where id='$id'");

echo "<script>alert('恭喜您删除成功!')</script>";

echo "<meta http-equiv='refresh' content='0; url=index.php'>";

$s->display("index.html");