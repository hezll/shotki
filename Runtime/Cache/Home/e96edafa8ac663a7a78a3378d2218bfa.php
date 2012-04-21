<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言本 - <?php echo ($sitename); ?></title>
<meta name="Keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />
<link href="<?php echo ($tpl); ?>images/channel.css" rel="stylesheet">
</head>
<body class="dyzzy">
<div class="wrap">
  <div class="nav navBg">
    <h2 class="navLogo"> <a href="<?php echo ($siteurl); ?>"> <img src="<?php echo ($tpl); ?>images/logo.png" width="95" height="26" /> </a> </h2>
    <div class="navList"> <a href="<?php echo ($root); ?>">首页</a>
	<?php $cidarr=array(1,2,3,4,5,6,7,21,22); ?>
<?php if(is_array($cidarr)): $i = 0; $__LIST__ = $cidarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$i;$mod = ($i % 2 )?>| <a href="<?php echo getlistname($ppcid,'list_url');?>"><?php echo getlistname($ppcid);?></a><?php endforeach; endif; else: echo "" ;endif; ?> </div>
    <form name="formsearch"  method="post"  class="navSearch" action="index.php?s=vod-search" >
      <input type="text" id="suggestText" class="inputText navBg" name="id"/>
      <input type="Submit" class="inputbtn navBg" value="" title="搜索"  alt="搜索"  />
      
    </form>
    <div class="navLinks" >
      <div id="topC1" class="topC" style="display: none;">
        <div class="topCBg">
          <p class="pRight"> <a id="clear" data-key="clear" href="javascript:void(0)">清空记录</a> | <a
	data-key="close" href="javascript:void(0)" class="fOrange" >关闭</a> </p>
          <ul class="topC_ulList" id="ulList">
          </ul>
        </div>
        <div class="topCBottomBg"> </div>
      </div>
    </div>
  </div>
  <div class="topInfo">
    <div class="topInfoC"><a href="#input" class="fankuikou">[发布留言]</a></div>
    <h2 class="h2Title1" id="navbar"><?php echo ($sitename); ?>-留言本</h2>
  </div>
   <!-- 留言本 -->
   <div class="gb">
	<dl class="tit clear"><dt><?php echo ($sitename); ?>留言本 共有<?php echo ($gb_count); ?>条留言记录</dt></dl>
    <div class="list">
        <ul><?php if(is_array($gb_list)): $i = 0; $__LIST__ = $gb_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li>
        <dd class="left"><h2>网友：<?php echo (msubstr($ppvod["gb_user"],0,20)); ?></h2><p><img src="/Public/plus/gb/face.gif" /><br />IP:<?php echo ($ppvod["gb_ip"]); ?></p></dd><dd class="line"></dd>
        <dd class="right"><h2><span>第<?php echo ($ppvod["gb_floor"]); ?>楼</span>时间：<?php echo (date('Y-m-d H:i:s',$ppvod["gb_addtime"])); ?> QQ:<?php echo (msubstr($ppvod["gb_qq"],0,4)); ?>***</h2><p>主题：<?php echo ($ppvod["gb_content"]); ?><?php if(!empty($ppvod["gb_intro"])): ?><br />回复：<em><?php echo ($ppvod["gb_intro"]); ?></em><?php endif; ?></p></dd>
        </li><?php endforeach; endif; else: echo "" ;endif; ?></ul>
    </div>
    <div class="pages"><?php echo ($gb_page); ?></div>
</div> 
<div class="gb"> 
	<dl class="tit clear"><dt>发布留言：请自觉遵守国家相关法律法规,网友对所发信息将负全部法律责任!</dt></dl> 
    <div class="form"><a name='input'></a>
        <form action="index.php?s=Gb-Add" method="post"><input name="gb_del" type="hidden" value="1" /><input name="gb_cid" type="hidden" value="<?php echo ($gb_cid); ?>" />
        <ul class="right"><textarea name="gb_content" onFocus="if(this.value=='请在此输入留言内容!'){this.value='';}"><?php echo ($gb_content); ?></textarea></ul>
        <ul class="left"><li><dl>用 户 呢 称：</dl><input name="gb_user" type="text" class="btn-1" value="匿名"/></li>
        <li><dl>OICQ 号 码：</dl><input name="gb_qq" type="text" class="btn-1"/></li>
        <li><dl>验 证 密 码：</dl><input name="gb_code" type="text" class="btn-1"/> <img src="index.php?s=Gb-Gbcode-time-" style="cursor:pointer" alt='点击我更换图片' align="absbottom" onclick="this.src=this.src+'?'"></li>
        <li class="submit"><input type="submit" name="submit" value="提 交" class="btn-2"/><input type="reset" name="submit2" value="取 消" class="btn-2" /></li></ul>
        </form>
    
    </div>
		<!-- 留言本结束 -->
    <div class="mBg2BottomBg"></div>
    </div>
  <!--bottom-->
	<div class="footer"><?php echo ($copyright); ?><?php echo ($tongji); ?><br /><?php echo ($icp); ?></div>
	<!-- JiaThis Button BEGIN -->
<script type="text/javascript" src="http://v2.jiathis.com/code/jiathis_r.js?btn=r4.gif&amp;uid=894528" charset="utf-8"></script>
<!-- JiaThis Button END -->
  </div>
</body>
</html>