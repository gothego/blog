<?php /* Smarty version Smarty-3.1.16, created on 2014-02-21 17:11:13
         compiled from "edit.php" */ ?>
<?php /*%%SmartyHeaderCode:435453071831eb5ab9-70110014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a43fbd6278f69d23ccc883e94d621833fb820c0d' => 
    array (
      0 => 'edit.php',
      1 => 1392973866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '435453071831eb5ab9-70110014',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53071831f0b9d6_97434436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53071831f0b9d6_97434436')) {function content_53071831f0b9d6_97434436($_smarty_tpl) {?><<?php ?>?php
include("common.php");


$id = $_GET['id'];
$xiu = fetch_one_array("select * from article where id='$id'");

if($_POST){
    $title =$_POST['title'];
    $content = $_POST['content'];

}

$s->display("edit.php");<?php }} ?>
