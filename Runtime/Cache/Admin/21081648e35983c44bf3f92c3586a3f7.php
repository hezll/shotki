<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>资源采集管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin.css'>
<style>
a{color:green}
.ctable {margin:5px; background: #EBEBEB; width:95%}
tr{ background-color:#FFFFFF; height:25px; line-height:25px; text-align:center}
.tl{text-align:left}
.red{color:#FF0000}
.h{color: #666666}
</style>
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/jquery.js"></script>
<script language="JavaScript">
$(document).ready(function(){	
	$('#xmllist').html($('#xml').html());
	$('#xml').html('');
});
</script>
</head>
<body>
<div class="right">
  <div class="right_top"><?php echo C("admin_welcome");?> <?php if(!empty($jumpurl)): ?><a href="<?php echo ($jumpurl); ?>" style="color:#FF0000;font-weight:bold">上次有采集任务没有完成，是否接着采集?</a><?php endif; ?></div>
  <div class="right_main" id="xmllist">资源列表载入中……</div>
</div>
<br /><center>Powered by： <a href="<?php echo C("admin_url");?>" target="_blank"><?php echo C("admin_name");?></a> v<?php echo C("admin_var");?></center>
<span id="xml"><script language="JavaScript" charset="utf-8" type="text/javascript" src="http://union.ff84.com/up/ppvod_xml_list.js?20110601"></script></span>
</body>
</html>