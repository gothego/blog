<?php
/*
 * 连接数据库
 * */
$con = mysql_connect("localhost", "root", ""); //本地地址,用户名,密码
if (!$con) {
    die('Could not connect: ' . mysql_error()); //错误提示
}
mysql_select_db("blog", $con);
mysql_query("set names utf8");

