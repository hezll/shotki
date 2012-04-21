<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>资源库列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin.css'>
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/jquery.js"></script>
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
<style>
/*公用表格*/
.ctable{margin:5px; background: #EBEBEB; width:95%; margin:0px auto}
tr{ background-color:#FFFFFF; height:25px; line-height:25px; text-align:center}
.tl{text-align:left}
.red,sup{color:#FF0000}
label{ color: #009900;}
.c3{color:#666;}
</style>
<script language="javascript">
function changeurl($cid,$hour){
	self.location.href = getjumpurl($cid,$hour);
}
function getjumpurl($action,$cid,$hour){
	return '?s=Admin-Collect-<?php echo constant("ACTION_NAME");?>-action-'+$action+'-fid-<?php echo ($fid); ?>-xmlurl-<?php echo ($xmlurl); ?>-reurl-<?php echo ($reurl); ?>-vodids-<?php echo ($vodids); ?>-play-<?php echo ($play); ?>-inputer-<?php echo ($inputer); ?>-cid-'+$cid+'-wd-<?php echo ($wd); ?>-h-'+$hour;
}
//表单提交
function post($url){
	$('#myform').attr('action',$url);
	$('#myform').submit();
}
//全选与反选
function checkall($all){
	if($all){
		$("input[name='ids[]']").each(function(){
				this.checked = true;
		});		
	}else{
		$("input[name='ids[]']").each(function(){
			if(this.checked == false)
				this.checked = true;
			else
			   this.checked = false;
		});		
	}
}
//绑定分类
function setbind(event,cid,bind){
	$('#showbg').css({width:$(window).width(),height:$(window).height()});	
	var left = event.clientX+document.body.scrollLeft-70;
	var top = event.clientY+document.body.scrollTop+5;
	$.ajax({
		url: 'index.php?s=Admin-Collect-Setbind-cid-'+cid+'-bind-'+bind,
		async: false,
		success: function(res){
			if(res.indexOf('status') > 0){
				alert('对不起,您没有该功能的管理权限!');
			}else{
				$("#setbind").css({left:left,top:top,display:""});			
				$("#setbind").html(res);
			}
		}
	});
}
//取消绑定
function hidebind(){
	$('#showbg').css({width:0,height:0});
	$('#setbind').hide();
}
//提交绑定分类
var submitbind = function (cid,bind){
	$.ajax({
		url: '?s=Admin-Collect-Insertbind-cid-'+cid+'-bind-'+bind,
		success: function(res){
			$("#bind_"+bind).html(" <a href='javascript:void(0)' onClick=setbind(event,'"+cid+"','"+bind+"');>已绑定</a>");
			hidebind();
		}
	});	
}
</script>
</head>
<body>
<!--背景灰色变暗-->
<div id="showbg" style="position:absolute;left:0px;top:0px;filter:Alpha(Opacity=0);opacity:0.0;background-color:#fff;z-index:8;"></div>
<!--绑琮分类表单框-->
<div id="setbind" style="position:absolute;display:none;background: #85BFDC;padding:4px 5px 5px 5px;z-index:9;"></div>
<div class="right">
  <div class="right_top"><?php echo C("admin_welcome");?></div>
  <div class="right_main">
<form action="?s=Admin-Collect-<?php echo constant("ACTION_NAME");?>" method="post" name="myform" id="myform">{__NOTOKEN__}
<table border="0" cellpadding="4" cellspacing="1" class="ctable">
<thead><tr><th colspan="7" class="r"><span style="float:left">分类绑定设置 <?php if(!empty($cid)): ?><a href="javascript:changeurl('','');"><font color="red">查看全部资源</font></a><?php endif; ?></span><span style="float:right"><a href="?s=Admin-Collect-Xmllist">返回资源库列表</a></span></th></tr></thead>
  <tr><?php if(is_array($list_class)): $i = 0; $__LIST__ = $list_class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php if($i != 1 and $i%7 == 1): ?></tr><tr><?php endif; ?>
  <td><a href="?s=Admin-Collect-<?php echo constant("ACTION_NAME");?>-fid-<?php echo ($fid); ?>-xmlurl-<?php echo ($xmlurl); ?>-reurl-<?php echo ($reurl); ?>-play-<?php echo ($play); ?>-inputer-<?php echo ($inputer); ?>-cid-<?php echo ($ppvod["list_id"]); ?>-wd-<?php echo ($wd); ?>"><?php echo ($ppvod["list_name"]); ?></a> <a href="javascript:void(0)" onClick="setbind(event,'<?php echo ($ppvod["list_id"]); ?>','<?php echo ($ppvod["bind_id"]); ?>');" id="bind_<?php echo ($ppvod["bind_id"]); ?>"><?php if(ff_bind_id($ppvod['bind_id']) > 0): ?><font color="green">已绑定</font><?php else: ?><font color="red">未绑定</font><?php endif; ?></a></td><?php endforeach; endif; else: echo "" ;endif; ?>
  </tr>
  <tr><td colspan="7" class="ct"><input type="button" value="全选" class="submit" onClick="checkall('all');"> <input name="" type="button" value="反选" class="submit" onClick="checkall();"> <input type="button" value="采集" class="submit" onClick="post(getjumpurl('ids','',''));"> <input type="button" value="采集当天" class="submit" onClick="post(getjumpurl('day','',24));"> <?php if(!empty($cid)): ?><input type="button" value="采集本类" class="submit" onClick="post(getjumpurl('all','<?php echo ($cid); ?>',''));"><?php endif; ?> <input type="button" value="采集所有" class="submit" onClick="post(getjumpurl('all','',''));"> <input type="text" name="wd" id="wd" maxlength="20" value="<?php echo (urldecode($wd)); ?>" onClick="this.select();" style="color:#666666"> <input type="button" value="搜索" class="submit" onClick="post(getjumpurl('','',''));"></td>
  </tr> 
</table>
<br />
<table border="0" cellpadding="4" cellspacing="1" class="ctable">
<?php if(is_array($list_vod)): $i = 0; $__LIST__ = $list_vod;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><tr>
    <td class="tl"><span style="float:right"><label><?php echo (str_replace('$$$',' ',$ppvod["vod_play"])); ?></label> <?php echo ($ppvod["vod_addtime"]); ?></span><input name='ids[]' type='checkbox' value='<?php echo ($ppvod["vod_id"]); ?>' class="noborder">『<?php echo ($ppvod["list_name"]); ?>』<?php echo ($ppvod["vod_name"]); ?><?php echo ($ppvod["vod_title"]); ?> <label class="c3"><?php echo ($ppvod["vod_actor"]); ?></label> <?php if(($ppvod['vod_continu'])  !=  "0"): ?><label><?php echo ($ppvod["vod_continu"]); ?><?php endif; ?></label></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
   <tr><td class="pages"><?php echo ($pagelist); ?></td></tr>
</table>
</form>
  </div>
</div>
<br /><center>Powered by： <a href="<?php echo C("admin_url");?>" target="_blank"><?php echo C("admin_name");?></a> v<?php echo C("admin_var");?></center>
</body>
</html>