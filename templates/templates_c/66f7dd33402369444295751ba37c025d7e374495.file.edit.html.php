<?php /* Smarty version Smarty-3.1.16, created on 2014-02-21 17:38:36
         compiled from "E:\wamp\wamp\www\blog\templates\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2579530718570a87c1-67095098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66f7dd33402369444295751ba37c025d7e374495' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\blog\\templates\\edit.html',
      1 => 1392975497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2579530718570a87c1-67095098',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5307185716fb74_76607920',
  'variables' => 
  array (
    'id' => 0,
    'xiu' => 0,
    'cate' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5307185716fb74_76607920')) {function content_5307185716fb74_76607920($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0049)http://127.0.0.1/examples/Blog/index.php/Blog/add -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Blog By ThinkPHP 2.1</title>
<link href="static/css/style.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="static/default.css"></head>
<script src="static/ckeditor/ckeditor.js"></script>

<body>
<div id="overlay" class="none"></div><div id="lightbox" class="none"></div>

<div id="header">
    <div id="innerHeader">
      <div id="blogLogo"></div>
      <div class="blog-header">
        <div class="blog-title"><img src="static/image/logo.png" style="border:1px solid gray" border="0" alt="" align="absmiddle"> <a href="http://thinkphp.cn/">ThinkPHP</a></div>
        <div class="blog-desc">PHP最佳实践框架  [ Blog示例程序]</div>
      </div>
      <div id="menu">
        <ul>
        <li><a href="index.php" target="_blank">日志首页</a></li>
        <li><a href="javascript:void 0;">撰写日志</a></li>
        <li><a href="http://thinkphp.cn/">官方网站</a></li>
        </ul>
      </div>
    </div>
</div>

<!--中间部分-->

<div id="mainWrapper">
    <div id="content" class="content">

        <div id="innerContent">
            <div class="commentbox">
                <table cellpadding="3" cellspacing="3" width="1000px">
                    <tbody><tr>
                        <td colspan="2"><div class="block-title"><h5><img src="static/image/modify.gif" width="20" height="23" border="0" alt="" align="absmiddle"> 发表新的日志</h5></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <form method="POST" id="form1" action="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                <table cellpadding="3" cellspacing="3" style="font-size:14px;width:900px;">
                                    <tbody><tr>
                                        <td colspan="2"><div id="result" class="result none"></div></td>
                                    </tr>
                                    <tr>
                                        <td class="tRight tTop" width="20%">标题：</td>
                                        <td class="tLeft">
                                            <input type="text" class="huge text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['xiu']->value['title'];?>
">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tRight tTop">类别：</td>
                                        <td class="tLeft">
                                            <select name="cate_id" class="medium text">
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['xiu']->value['cate_id']==$_smarty_tpl->tpl_vars['v']->value['id']) {?>selected<?php }?>  ><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</option>
                                <?php } ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tRight tTop">日志：</td>
                                        <td class="tLeft">
                                            <textarea name="editor1"><?php echo $_smarty_tpl->tpl_vars['xiu']->value['content'];?>
</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="center">
                                            <div style="width:85%;color:gray">
                                                <div class="fLeft hMargin">
                                                    <input type="reset" class="submit small" value="重 置">
                                                </div>
                                                <div class="fLeft hMargin">
                                                    <input type="submit" id="submit" value="发表日志" class="submit small">
                                                </div>
                                            </div></td>
                                    </tr>
                                </tbody></table>
                            </form>
                        </td>
                    </tr>
                </tbody></table>
            </div>
        </div>


        <script>
            CKEDITOR.replace('editor1',
                    {
                        filebrowserBrowseUrl: 'static/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl: 'static/ckfinder/ckfinder.html?type=Images',
                        filebrowserFlashBrowseUrl: 'static/ckfinder/ckfinder.html?type=Flash',
                        filebrowserUploadUrl: 'static/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl: 'static/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl: 'static/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                    });

        </script>
<!-- 版权信息区域 -->
<div id="footer" class="footer">
    <div id="innerFooter">Powered by ThinkPHP 2.1| Template designed by <a target="_blank" href="http://www.topthink.com.cn/">TopThink</a></div>
</div>

</div></div><div class="ke-reset" style="display: none;"></div><div class="ke-mask" style="opacity: 0.5;"></div></body></html><?php }} ?>
