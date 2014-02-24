<?php
include('common.php');

$chakan = "select a.*, c.title as cate_title
from article as a left join category as c
on a.cate_id = c.id order by a.date desc" ;
$duqu = allRes($chakan);

foreach ($duqu as $key => $value) {
    $shu = $value['id'];
    $ping = "select * from comment where a_id='$shu'";
    $dan = num_rows($ping);
    $duqu[$key]['ping_lun'] = $dan;

}

$comm = "select * from comment order by id desc limit 0,8";
$bao = allRes($comm);


$cate = allRes("select * from category");

foreach ($cate as $key => $value){
    $lan = $value['id'];
    $a = "select * from article where cate_id='$lan'";
    $b = num_rows($a);
    $cate[$key]['wenz'] = $b;
}

$rizhi = num_rows("select * from article");

$lun = num_rows("select * from comment");

$yuedu = fetch_one_array("select sum(views) as vi from article");
$s->assign("yuedu", $yuedu);



/*
foreach ($duqu as $key => $value) {
    $cate_id = $value['cate_id'];
    $lanmu = "select * from category where id='$cate_id'";
    $dan = fetch_one_array($lanmu);
    $duqu[$key]['cate_title'] = $dan['title'];
}
*/


//dump($duqu);
$s->assign("duqu", $duqu);
$s->assign("bao", $bao);
$s->assign("cate", $cate);
$s->assign("rizhi", $rizhi);
$s->assign("lun", $lun);
$s->display("index.html");//加载模板
