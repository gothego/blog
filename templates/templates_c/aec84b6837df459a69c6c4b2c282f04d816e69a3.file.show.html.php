<?php /* Smarty version Smarty-3.1.16, created on 2014-02-24 11:37:09
         compiled from "E:\wamp\wamp\www\blog\templates\show.html" */ ?>
<?php /*%%SmartyHeaderCode:32326530ab6c1a1d558-74785835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aec84b6837df459a69c6c4b2c282f04d816e69a3' => 
    array (
      0 => 'E:\\wamp\\wamp\\www\\blog\\templates\\show.html',
      1 => 1393213027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32326530ab6c1a1d558-74785835',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530ab6c1a82e77_17498047',
  'variables' => 
  array (
    'duqu' => 0,
    'v' => 0,
    'bao' => 0,
    'b' => 0,
    'cate' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ab6c1a82e77_17498047')) {function content_530ab6c1a82e77_17498047($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\wamp\\www\\blog\\smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0055)http://127.0.0.1/examples/Blog/index.php/Blog/show/id/3 -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Blog By ThinkPHP 2.1</title>
<link href="static/css/style.css" rel="stylesheet" type="text/css">
<script language="javascript" src="static/js/common.js"></script></head><body><div id="overlay" class="none"></div><div id="lightbox" class="none"></div>
<script type="text/javascript" src="static/js/Base.js"></script>
<script type="text/javascript" src="static/js/prototype.js"></script>
<script type="text/javascript" src="static/js/mootools.js"></script>
<script type="text/javascript" src="static/js/ThinkAjax.js"></script><div id="ThinkAjaxResult" class="ThinkAjax"></div>
<script type="text/javascript" src="static/js/UbbEditor.js"></script>
<script type="text/javascript" src="static/js/CheckForm.js"></script>

<div id="header">
    <div id="innerHeader">
      <div id="blogLogo"></div>
      <div class="blog-header">
        <div class="blog-title"><img src="static/image/logo.png" style="border:1px solid gray" border="0" alt="" align="absmiddle"> <a href="http://thinkphp.cn/">ThinkPHP</a></div>
        <div class="blog-desc">PHP最佳实践框架  [ Blog示例程序]</div>
      </div>
      <div id="menu">
        <ul>
        <li><a href="http://127.0.0.1/examples/Blog/index.php">日志首页</a></li>
        <li><a href="http://127.0.0.1/examples/Blog/index.php/Blog/add">撰写日志</a></li>
        <li><a href="http://thinkphp.cn/">官方网站</a></li>
        </ul>
      </div>
    </div>
</div>
<div id="mainWrapper">
<div id="content" class="content">
<div id="innerContent">
  <div class="article-top">
    <div class="prev-article"> <a href="http://127.0.0.1/examples/Blog/index.php/Blog/4"></a></div>
    <div class="next-article"> <a href="http://127.0.0.1/examples/Blog/index.php/Blog/2">php</a></div>
  </div>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['duqu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<div class="textbox-title"><h4><img src="static/image/icon_ctb.gif" width="11" height="11" border="0" alt="" align="absmiddle">  <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
 </h4>
	<div class="textbox-label"><span style="color:gray;font-weight:normal">
        [ <img src="static/image/write.gif" width="17" height="16" border="0" alt="" align="absmiddle">  <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['date'],"%Y-%m-%d %H:%M:%S");?>
 发表在
        <a href="http://127.0.0.1/examples/Blog/index.php/cate/3"><?php echo $_smarty_tpl->tpl_vars['v']->value['cate_title'];?>
</a>  ]</span></div></div>
	<div class="textbox-content"><p><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</p> </div>

	<fieldset style="width:75%;margin:8px;color:gray">
		<legend>附件列表</legend>
		<div>
		还没有上传任何附件	</div>
	</fieldset>	<div class="textbox-bottom"> 关键词:  <a href="http://127.0.0.1/examples/Blog/index.php/Blog/tag/name/js">js</a>   <a href="http://127.0.0.1/examples/Blog/index.php/Blog/tag/name/jquery">jquery</a>   | <img src="static/image/cm_t_ArtRank2.gif" width="12" height="12" border="0" alt="" align=""> <a href="http://127.0.0.1/examples/Blog/index.php/Blog/show/id/3#reply">我有话要说</a> </div>
	<div class="textbox-urls" align="right"></div>
	<div class="no-comment-box"> [ 管理：<a href="http://127.0.0.1/examples/Blog/index.php/Blog/edit/id/3" target="_blank">编辑日志</a> <a href="javascript:delBlog(3)">删除日志</a> ]</div>
    <?php } ?>
	<script language="JavaScript">
	<!--
		function delComplete(data,status){
			if (status==1)
			{
			$('comment_'+data).style.display = 'none';
			}
		}
		function delComment(id){
			ThinkAjax.send('/examples/Blog/index.php/Blog/delComment','ajax=1&id='+id,delComplete);
		}
		function doComplete(data,status){
			if (status==1)
			{
			$('comments').innerHTML += '<div id="comment_'+data.id+'" class="commentbox" style="border:1px solid #56CD2E;"><div class="commentbox-content"> '+data.content+' </div></div>';
			$('form1').reset();
			fleshVerify();
			}
		}
	//-->
	</script>

	<div id="comments">
		<div class="comment-pages"> 11 条评论 1/3 页  <a href="http://127.0.0.1/examples/Blog/index.php/Blog/show/id/3?&p=2">下一页</a>     &nbsp;<span class="current">1</span>&nbsp;<a href="http://127.0.0.1/examples/Blog/index.php/Blog/show/id/3?&p=2">&nbsp;2&nbsp;</a>&nbsp;<a href="http://127.0.0.1/examples/Blog/index.php/Blog/show/id/3?&p=3">&nbsp;3&nbsp;</a>   </div>
        <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bao']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['a']->value = $_smarty_tpl->tpl_vars['b']->key;
?>
        <div id="comment_2" class="commentbox">
<a name="2"></a> <div class="commentbox-title"> <a href="mailto:aa@aa.com"><?php echo $_smarty_tpl->tpl_vars['b']->value['username'];?>
</a> 发表的评论 <span style="color:gray">[ 3年7个月前 ]</span>
<a href="javascript:delComment(2)">删除评论</a></div>
<div class="commentbox-content"><?php echo $_smarty_tpl->tpl_vars['b']->value['content'];?>
<img src="static/image/puke.gif" align="absmiddle" style="border:none;margin:0px 1px"><img src="static/love.gif" align="absmiddle" style="border:none;margin:0px 1px"><img src="static/sweat.gif" align="absmiddle" style="border:none;margin:0px 1px"></div>
	</div>
        <?php } ?>
        <div id="comment_3" class="commentbox">
	</div>	<div class="comment-pages"> 11 条评论 1/3 页  <a href="http://127.0.0.1/examples/Blog/index.php/Blog/show/id/3?&p=2">下一页</a>
        &nbsp;<span class="current">1</span>&nbsp;<a href="http://127.0.0.1/examples/Blog/index.php/Blog/show/id/3?&p=2">&nbsp;2&nbsp;</a>
        &nbsp;<a href="http://127.0.0.1/examples/Blog/index.php/Blog/show/id/3?&p=3">&nbsp;3&nbsp;</a>
    </div>
    </div>

	<a name="reply"></a>
	<div id="comment">
	<div id="result" class="result none"></div>
	<form method="POST" id="form1">
	<table cellpadding="3" cellspacing="3" width="450px">
	<tbody><tr>
	<td class="tRight tTop"></td>
	<td class="tLeft">用户名：<input type="text" name="author" class="text"> 邮箱: <input type="text" name="email" class="text"></td>
	</tr>
	<tr>
	<td class="tRight tTop"></td>
	<td class="tLeft"><script type="text/javascript" src="static/UbbEditor.js"></script><div style="padding:1px;width:450px;border:1px solid silver;float:left;"><script language="JavaScript"> showTool(); </script><div><a href="javascript:bold()"><img src="static/image/bold.gif" class="hMargin" border="0" alt="粗体"></a><a href="javascript:underline()"><img src="static/image/underline.gif" class="hMargin" border="0" alt="下划线"></a><a href="javascript:italicize()"><img src="static/image/italic.gif" class="hMargin" border="0" alt="斜体"></a><a href="javascript:subscript()"><img src="static/image/subscript.gif" width="21" height="20" class="hMargin" border="0" alt=""></a><a href="javascript:superscript()"><img src="static/image/superscript.gif" width="21" height="20" class="hMargin" border="0" alt=""></a><img src="static/image/separator.gif" width="2" height="20" class="hMargin" border="0" alt=""><select onchange="setColor(options[this.selectedIndex].value)" class="hMargin" style="width:65px;color:#FFFFEC" name="color"><option value="white" style="background:white;color:black">颜色</option><option style="background: skyblue;" value="skyblue">skyblue</option> <option style="background: royalblue" value="royalblue">royalblue</option> <option style="background: blue" value="blue">blue</option> <option style="background: darkblue" value="darkblue">darkblue</option> <option style="background: orange" value="orange">orange</option> <option style="background: orangered" value="orangered">orangered</option> <option style="background: crimson" value="crimson">crimson</option> <option style="background: red" value="red">red</option> <option style="background: firebrick" value="firebrick">firebrick</option> <option style="background: darkred" value="darkred">darkred</option> <option style="background: green" value="green">green</option> <option style="background: limegreen" value="limegreen">limegreen</option> <option style="background: seagreen" value="seagreen">seagreen</option> <option style="background: deeppink" value="deeppink">deeppink</option> <option style="background: tomato" value="tomato">tomato</option> <option style="background: coral" value="coral">coral</option> <option style="background: purple" value="purple">purple</option> <option style="background: indigo" value="indigo">indigo</option> <option style="background: burlywood" value="burlywood">burlywood</option> <option style="background: sandybrown" value="sandybrown">sandybrown</option> <option style="background: sienna" value="sienna">sienna</option> <option style="background: chocolate" value="chocolate">chocolate</option> <option style="background: teal" value="teal">teal</option> <option style="background: silver" value="silver">silver</option></select><a href="javascript:hyperlink()"><img src="static/image/url.gif" class="hMargin" border="0" alt="超链接"></a><a href="javascript:email()"><img src="static/image/email.gif" border="0" alt="插入邮箱链接"></a><img src="static/image/separator.gif" width="2" height="20" class="hMargin" border="0" alt=""><a href="javascript:quote()"><img src="static/image/quote.gif" border="0" class="hMargin" alt="引用"></a><a href="javascript:insertHr()"><img src="static/image/hr.gif" class="hMargin" border="0" alt="水平分割线"></a><a href="javascript:setMore()"><img src="static/image/more.gif" border="0" class="hMargin" alt="分割"></a><a href="javascript:code()"><img src="static/image/code.gif" border="0" class="hMargin" alt="代码"></a></div></div><div><textarea id="UBBEditor" name="content" style="clear:both;float:none;width:450px;height:185px"></textarea></div><div style="padding:1px;width:450px;border:1px solid silver;float:left;"><script language="JavaScript">showEmot();  </script><div style="padding:3px"><a href="javascript:addEmot('smile');"><img src="static/image/smile.gif"></a><a href="javascript:addEmot('coolsmile');">
        <img src="static/image/coolsmile.gif"></a><a href="javascript:addEmot('laugh')"><img src="static/image/laugh.gif"></a><a href="javascript:addEmot('angry');"><img src="static/image/angry.gif"></a><a href="javascript:addEmot('astonish');"><img src="static/astonish.gif"></a><a href="javascript:addEmot('cry');"><img src="static/cry.gif"></a><a href="javascript:addEmot('mute');"><img src="static/mute.gif"></a><a href="javascript:addEmot('sweat');"><img src="static/sweat.gif"></a><a href="javascript:addEmot('zzz');"><img src="static/zzz.gif"></a><a href="javascript:addEmot('puzzled');"><img src="static/puzzled.gif"></a><a href="javascript:addEmot('good');"><img src="static/good.gif"></a><a href="javascript:addEmot('bad');"><img src="static/bad.gif"></a><a href="javascript:addEmot('flower');"><img src="static/flower.gif"></a><a href="javascript:addEmot('money');"><img src="static/money.gif"></a><a href="javascript:addEmot('love');"><img src="static/love.gif"></a><a href="javascript:addEmot('heartache');"><img src="static/heartache.gif"></a><a href="javascript:addEmot('puke');"><img src="static/puke.gif"></a><a href="javascript:addEmot('shy');"><img src="static/shy.gif"></a><a href="javascript:addEmot('fear');"><img src="static/fear.gif"></a><a href="javascript:addEmot('envy');"><img src="static/envy.gif"></a><a href="javascript:addEmot('sad');"><img src="static/sad.gif"></a></div></div></td>
	</tr>
	<tr>
		<td></td>
		<td class="center">
		<input type="hidden" name="ajax" value="1">
		<input type="hidden" name="module" value="Blog">
		<input type="hidden" name="recordId" value="3">
		<div class="fLeft hMargin"><input type="button" id="submit" value="发表评论" onclick="ThinkAjax.sendForm(&#39;form1&#39;,&#39;/examples/Blog/index.php/Blog/comment/&#39;,doComplete,&#39;result&#39;);" class="submit small"></div>
		</td>
	</tr>
	</tbody></table>
	</form>
	</div>
</div>

</div>
<div id="sidebar" class="sidebar">
<div id="innerSidebar">
  <div id="panelSearch" class="panel">
	<h5>日志分类</h5><div class="panel-content">
  <ul>
      <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
  <li><img src="static/image/folder.gif" width="18" height="18" border="0" alt="" align="absmiddle">
      <a href="http://127.0.0.1/examples/Blog/index.php/cate/2"><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</a> <span>(<?php echo $_smarty_tpl->tpl_vars['c']->value['wenz'];?>
)</span></li>
      <?php } ?>
</div>

  <div id="panelSearch" class="panel">
<h5>最新日志</h5>
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['duqu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
      <div class="panel-content">
  <ul><li><img src="static/image/icon_ctb(1).gif" width="11" height="11" border="0" alt="" align="absmiddle">
      <a href="http://127.0.0.1/examples/Blog/index.php/blog/3" title="jQuery"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
      <sup style="color:silver;font-size:12px"> [<span style="color:#3366CC"><?php echo $_smarty_tpl->tpl_vars['v']->value['ping_lun'];?>
</span> |<span style="color:#FF6600"> <?php echo $_smarty_tpl->tpl_vars['v']->value['views'];?>
</span>]</sup></li>
</div>
      <?php } ?>

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
  <ul><li><img src="static/image/Comment.gif" width="9" height="9" border="0" alt="" align="absmiddle">
      <a href="mailto:"> <span style="color:#3366CC"><?php echo $_smarty_tpl->tpl_vars['b']->value['username'];?>
</span></a>：<a href="http://127.0.0.1/examples/Blog/index.php/blog/3#12" title=""><?php echo $_smarty_tpl->tpl_vars['b']->value['content'];?>
</a></li>
</div>
      <?php } ?>
  <div id="panelSearch" class="panel">
	<h5>日志归档</h5> 	<div class="panel-content">
  <ul></ul></div>
</div>
</div>
</div>
</div>
<!-- 版权信息区域 -->
<div id="footer" class="footer">
    <div id="innerFooter">Powered by ThinkPHP 2.1| Template designed by <a target="_blank" href="http://www.topthink.com.cn/">TopThink</a></div>
</div>

</body></html><?php }} ?>
