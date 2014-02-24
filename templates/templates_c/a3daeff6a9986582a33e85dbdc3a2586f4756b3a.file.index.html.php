<?php /* Smarty version Smarty-3.1.16, created on 2014-02-24 11:04:30
         compiled from "E:\wamp\wamp\www\blog\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:204555306c0823fbd44-12085039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3daeff6a9986582a33e85dbdc3a2586f4756b3a' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\blog\\templates\\index.html',
      1 => 1393211067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204555306c0823fbd44-12085039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5306c082576c24_78587468',
  'variables' => 
  array (
    'duqu' => 0,
    'v' => 0,
    'rizhi' => 0,
    'yuedu' => 0,
    'lun' => 0,
    'cate' => 0,
    'c' => 0,
    'bao' => 0,
    'b' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5306c082576c24_78587468')) {function content_5306c082576c24_78587468($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\wamp\\www\\blog\\smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/examples/Blog/index.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Blog By ThinkPHP 2.1</title>
<link href="static/css/style.css" rel="stylesheet" type="text/css">
<script language="javascript" src="static/js/common.js"></script>
</head>
<body>
<div id="overlay" class="none"></div>
<div id="lightbox" class="none"></div>
<script type="text/javascript" src="static/js/Base.js"></script>
<script type="text/javascript" src="static/js/prototype.js"></script>
<script type="text/javascript" src="static/js/mootools.js"></script>
<script type="text/javascript" src="static/js/ThinkAjax.js"></script>
<div id="ThinkAjaxResult" class="ThinkAjax"></div>
<script type="text/javascript" src="static/js/UbbEditor.js"></script>
<script type="text/javascript" src="static/js/CheckForm.js"></script>
<div id="header">
    <div id="innerHeader">
        <div id="blogLogo">
        </div>
        <div class="blog-header">
            <div class="blog-title">
                <img src="static/image/logo.png" style="border:1px solid gray" border="0" alt="" align="absmiddle"> <a href="http://thinkphp.cn/">ThinkPHP</a>
            </div>
            <div class="blog-desc">
                PHP最佳实践框架  [ Blog示例程序]
            </div>
        </div>
        <div id="menu">
            <ul>
                <li><a href="javascript:void 0;">日志首页</a></li>
                <li><a href="add.php">撰写日志</a></li>
                <li><a href="http://thinkphp.cn/">官方网站</a></li>
            </ul>
        </div>
    </div>
</div>

<!--中间部分-->

<div id="mainWrapper">
    <div id="content" class="content">
        <div id="innerContent">
            <div class="announce text" style="border:1px solid silver;padding:5px;font-size:14px;">
                <h4 style="color:#FF3300"><img src="static/image/wav.gif" width="18" height="18" border="0" alt="" align="absmiddle"> 简单的BLOG示例</h4>
                本示例Blog基于ThinkPHP1.0.0实现，包括日志的新增、修改、列表、统计、评论、标签、归档、上传附件和删除等功能，涵盖了新版ThinkPHP的路由功能、内置模板引擎标签的使用、视图模型、文本字段、AJAX操作、前置和后置操作、自动验证、自动填充、分页功能、查询语言、统计查询、动态查询、自动时间戳记录、CURD操作、触发器、默认模块设置、页面Trace、浏览器缓存、Action缓存、静态缓存、操作重定向、文件上传（批量上传、AJAX上传）、验证码等知识点的实现，可以作为入门ThinkPHP的绝佳示例。
                <p>请按照下面步骤操作，增加分类、添加日志、增加评论。 </p>
            </div>
            <div class="article-top">
                <div class="view-mode">
                    浏览模式: <a href="http://127.0.0.1/examples/Blog/index.php?mode=normal">普通</a> | <a href="http://127.0.0.1/examples/Blog/index.php?mode=list">列表</a>
                </div>
                <div class="pages">
                </div>
            </div>













<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['duqu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <div id="blog_2">
                <div class="textbox-title">
                    <h4><img src="static/image/icon_point2.gif" width="13" height="13" border="0" alt="" align="absmiddle">
                        <a href="show.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a> </h4>
                    <div class="textbox-label">
                        [ <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['date'],"%Y-%m-%d %H:%M:%S");?>
  | <a href="http://127.0.0.1/examples/Blog/index.php/Blog/category/id/2"><?php echo $_smarty_tpl->tpl_vars['v']->value['cate_title'];?>
 </a>]
                    </div>
                </div>
                <div class="textbox-content">
                    <p><strong><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</strong></p>
                </div>
                <div class="textbox-bottom">
                    [ 管理：<a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a>
                    <a href="dele.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a> ]   关键词:
                    <a href="http://127.0.0.1/examples/Blog/index.php/Blog/tag/name/php">php</a>
                    <a href="http://127.0.0.1/examples/Blog/index.php/Blog/tag/name/"></a> |
                    <a href="http://127.0.0.1/examples/Blog/index.php/Blog/show/id/2#reply">评论: <?php echo $_smarty_tpl->tpl_vars['v']->value['ping_lun'];?>
</a> | 浏览: <?php echo $_smarty_tpl->tpl_vars['v']->value['views'];?>

                </div>
                <p> </p>
            </div>
<?php } ?>











            <div class="article-bottom">
                <div class="pages">
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar" class="sidebar">
        <div id="innerSidebar">
            <div id="panelSearch" class="panel">
                <div id="panelStats" class="panel">
                    <h5>统计数据</h5>
                    <div class="panel-content">


                        日志总数：<span style="color:#CC9933"><?php echo $_smarty_tpl->tpl_vars['rizhi']->value;?>
</span><br>

                        阅读总数：<span style="color:#6699FF"><?php echo $_smarty_tpl->tpl_vars['yuedu']->value['vi'];?>
</span><br>
                        评论总数：<span style="color:#FF9900"><?php echo $_smarty_tpl->tpl_vars['lun']->value;?>
</span> <br>
                    </div>
                </div>
                <h5>日志分类 </h5>
                <div class="panel-content">
                    <ul id="category">
                        <li>
                            <div class="fLeft">
                                <input type="text" id="categoryName" class="text" name="name">
                            </div>
                            <input type="button" value="增 加" class="submit hMargin small" onclick="addCategory()">
                            <br style="clear:both;float:auto">
                        </li>



                     <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                        <li id="category_2">
                            <img src="static/image/folder.gif" width="18" height="18" border="0" alt="" align="absmiddle">
                            <a href="http://127.0.0.1/examples/Blog/index.php/Blog/category/id/2"><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</a> <span>(<?php echo $_smarty_tpl->tpl_vars['c']->value['wenz'];?>
)</span>
                            <img src="static/image/del.gif" style="cursor:pointer" width="20" height="20" border="0" alt="" onclick="delCategory(2)" align="absmiddle">
                        </li>
                     <?php } ?>


                    </ul>
                </div>
            </div>
            <div id="panelSearch" class="panel">
                <h5>最新日志</h5>
                <div class="panel-content">
                    <ul>

                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['duqu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <li><img src="static/image/icon_ctb.gif" width="11" height="11" border="0" alt="" align="absmiddle">
                            <a href="http://127.0.0.1/examples/Blog/index.php/Blog/show/id/3" title="jQuery"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                            <sup style="color:silver;font-size:12px"> [<span style="color:#3366CC"><?php echo $_smarty_tpl->tpl_vars['v']->value['ping_lun'];?>
</span> |<span style="color:#FF6600"> <?php echo $_smarty_tpl->tpl_vars['v']->value['views'];?>
</span>]</sup></li>
                    <?php } ?>


                    </ul>
                </div>
            </div>
            <div id="panelSearch" class="panel">
                <h5>最新评论</h5>

            <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bao']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['a']->value = $_smarty_tpl->tpl_vars['b']->key;
?>
                <div class="panel-content">
                    <ul>
                        <li><img src="static/image/Comment.gif" width="9" height="9" border="0" alt="" align="absmiddle">
                            <a href="mailto:"> <span style="color:#3366CC"><?php echo $_smarty_tpl->tpl_vars['b']->value['username'];?>
</span></a>：
                            <a href="http://127.0.0.1/examples/Blog/index.php/blog/3#12" title=""><?php echo $_smarty_tpl->tpl_vars['b']->value['content'];?>
</a></li>

                    </ul>
                </div>
            <?php } ?>

            </div>

        </div>
    </div>
</div>

<!-- 版权信息区域 -->
<div id="footer" class="footer">
    <div id="innerFooter">
        Powered by ThinkPHP 2.1| Template designed by <a target="_blank" href="http://www.topthink.com.cn/">TopThink</a>
    </div>
</div>
</body>
</html><?php }} ?>
