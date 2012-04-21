<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>热门频道 精彩连放-<?php echo ($sitename); ?></title>
<meta name="keywords" content="热门频道 精彩连放-<?php echo ($sitename); ?>" />
<meta name="description" content="热门频道 精彩连放-<?php echo ($sitename); ?>" />
<link href="<?php echo ($tpl); ?>images/channel.css" rel="stylesheet">
</head>
<body class="phb paihang">
<div class="wrap">
  <div class="nav navBg">
    <h2 class="navLogo"><a href="<?php echo ($siteurl); ?>"><img src="<?php echo ($tpl); ?>images/logo.png" width="95" height="26" /></a></h2>
    <div class="navList"> <a href="<?php echo ($siteurl); ?>">首页</a>
<?php $cidarr=array(1,2,3,4); ?>
<?php if(is_array($cidarr)): $i = 0; $__LIST__ = $cidarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$i;$mod = ($i % 2 )?>&nbsp;|&nbsp;<a href="<?php echo getlistname($ppcid,'list_url');?>"><?php echo getlistname($ppcid);?></a><?php endforeach; endif; else: echo "" ;endif; ?> </div>
    <form name="formsearch"  method="post"  class="navSearch" action="index.php?s=vod-search" >
      <input type="text" id="suggestText" class="inputText navBg" name="id"/>
      <input type="Submit" class="inputbtn navBg" value=""  />
      
    </form>
  </div>
  <div class="topInfo2">
    <div id="topInfo2" class="topInfo2"><div class="topInfoC"><a href="<?php echo ($root); ?>index.php?s=gb.html" target="_blank" class="fankuikou">在线留言</a> </div> 您现在的位置：<span  id="navbar"><a href="<?php echo ($root); ?>">首页</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;热播排行榜</span>  </div>
  </div>
  <div class="m128">
    <h2 class="pfbH2"><img src="<?php echo ($tpl); ?>images/img.png" width="128" height="39" alt="排行榜分类" /> </h2>
    <div> </div>
    <p class="pfbList"> <a href="#" class="selected" >全部</a>
<?php $cidarr=array(1,2,3,4); ?>
<?php if(is_array($cidarr)): $i = 0; $__LIST__ = $cidarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$i;$mod = ($i % 2 )?><a href="<?php echo getlistname($ppcid,'list_url');?>"><?php echo getlistname($ppcid);?>
</a><?php endforeach; endif; else: echo "" ;endif; ?> </p>
  </div>
  <div class="m825 ml15">
    <div class="paixu"><a href="#" onclick="_changeCount();return false" id="t1" onfocus="this.blur();" class="selected">热播榜</a>  </div>
    <div id="c1" class="pfb" style="display: block;">
<?php $vod_hot=array(1,2,3,4,5,7); ?>
<?php if(is_array($vod_hot)): $i = 0; $__LIST__ = $vod_hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$i;$mod = ($i % 2 )?><?php $allid=getcount($ppcid);$vod_hot1=$pplist->ppvod('pid:'.$ppcid.';day:0;num:1;order:vod_hits desc'); ?>
      <div class="pfbItem">
        <h2><?php echo getlistname($ppcid);?>热播榜</h2>
        <ol>
        <?php if(is_array($vod_hot1)): $i = 0; $__LIST__ = $vod_hot1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,8)); ?></a></strong><br>
            播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
            评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
            主演：<?php echo (msubstr($ppvod["vod_actor"],0,8)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
<?php $allid=getcount($ppcid);$vod_hot2=$pplist->ppvod('pid:'.$ppcid.';num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($vod_hot2)): $i = 0; $__LIST__ = $vod_hot2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ol>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    
  </div>
<!--bottom-->
	<div class="footer"><?php echo ($copyright); ?><?php echo ($tongji); ?><br /><?php echo ($icp); ?></div>
	<!-- JiaThis Button BEGIN -->
<script type="text/javascript" src="http://v2.jiathis.com/code/jiathis_r.js?btn=r4.gif&amp;uid=894528" charset="utf-8"></script>
<!-- JiaThis Button END -->
</div>

</body>
</html>