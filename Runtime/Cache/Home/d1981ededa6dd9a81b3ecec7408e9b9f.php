<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>正在播放 <?php echo ($vod_name); ?> <?php echo ($sitename); ?></title>
<meta name="Keywords" content="<?php echo ($vod_name); ?>免费在线观看,<?php echo ($vod_name); ?>剧情介绍,<?php echo ($vod_name); ?>数据海报" />
<meta name="description" content="<?php echo ($vod_name); ?>免费在线观看,<?php echo ($vod_name); ?>剧情介绍,<?php echo ($vod_name); ?>数据海报" />
<script type="text/javascript" src="<?php echo ($tpl); ?>js/jquery-1.4.4.min.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo ($tpl); ?>js/detail.js" charset="utf-8"></script>
<script>
if(jQuery.browser.msie!=true){
    alert("注意！射客影视为了给您带来更高速的体验，现在只支持IE内核的浏览器播放。推荐使用百度影音的播放资源。")
}
</script>
<?php echo ($css); ?>
<link href="<?php echo ($tpl); ?>images/channel.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo ($tpl); ?>images/favicon.ico" />
</head>
<body class="dyzzy">
<!--movie_info热播的hover-->
<div id="movie_info" style="display:none;" class="kuang">
<div class="bg_tm"></div>
<div class="win_content" id="div_tip_detail"></div>
</div>
<div class="wrap">
  <div class="nav navBg">
    <h2 class="navLogo"> <a href="<?php echo ($siteurl); ?>"> <img src="<?php echo ($tpl); ?>images/logo.png" width="95" height="26" /> </a> </h2>
    <div class="navList"> <a href="<?php echo ($siteurl); ?>">首页</a>
	<?php $cidarr=array(1,2,3,4,5,23,7,21); ?>
<?php if(is_array($cidarr)): $i = 0; $__LIST__ = $cidarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$i;$mod = ($i % 2 )?>&nbsp;| <a href="<?php echo getlistname($ppcid,'list_url');?>"><?php echo getlistname($ppcid);?></a><?php endforeach; endif; else: echo "" ;endif; ?>
&nbsp;| <a href="<?php echo getlistname($ppcid,'list_url');?>">排行榜</a></div>
    <form name="formsearch"  method="post"  class="navSearch" action="index.php?s=vod-search" >
      <input type="text" id="suggestText" class="inputText navBg" name="id"/>
      <input type="Submit" class="inputbtn navBg" value="" title="搜索"  alt="搜索"  />
      
    </form>

  </div>
  <div class="topInfo">
    <div class="topInfoC"><a href="<?php echo ($root); ?>index.php?s=gb.html" target="_blank" class="fankuikou">在线留言</a> </div>
    您现在的位置：<span  id="navbar"><a href="<?php echo ($root); ?>">首页</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<a href="<?php echo ($list_url); ?>"><?php echo ($list_name); ?></a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<?php echo ($vod_name); ?></span>
  </div>
  <?php echo ($vod_player); ?>
  <div class="main mBg4">
<!-- 播放页推荐影片 -->
    <div class="m660">
     <div>
        <div class="title1 titleBg">
          <h2 id="t01" class="selected"><span>您可能还喜欢</span></h2>
        </div>
        <ul style="display: block;" class="ulTw r5" id="ul01">
<?php $vod_tj=$pplist->ppvod('num:8;order:vod_hits desc'); ?>  <!-- stars:4,5; 2011/9/28 add by hzl-->
<?php if(is_array($vod_tj)): $i = 0; $__LIST__ = $vod_tj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a class="imgBg1" href="<?php echo ($ppvod["vod_url"]); ?>"><img height="126" width="95" title="<?php echo ($ppvod["vod_name"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" onmouseover="D.show(this,'<?php echo (msubstr($ppvod["vod_name"],0,10)); ?>','<?php echo ($ppvod["vod_hits"]); ?>','<?php echo ($ppvod["vod_area"]); ?>','<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?>','<?php echo (msubstr(h($ppvod["vod_content"]),0,69)); ?>','<?php echo ($ppvod["vod_play"]); ?>')" onmouseout="D.hide()"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div><!-- 播放页推荐影片END -->
	<!-- 播放页介绍 -->
    <div class="m300 mL10 borderTop">
      
      <div id="tvzjrank">
        <div class="phbTitle">
          <h2 class="">热播榜</h2></div>
        <div id="cnt-rank-0" class="pfbItem">
          <ol>
<?php $vod_hot=$pplist->ppvod('pid:'.$list_id.';num:1;order:vod_hits desc'); ?>
<?php if(is_array($vod_hot)): $i = 0; $__LIST__ = $vod_hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" > <span class="num1"></span></a><strong><a  title="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,8)); ?></a></strong><br>
              播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
              评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
              主演：<?php echo (msubstr($ppvod["vod_actor"],0,10)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
<?php $vod_hot2=$pplist->ppvod('pid:'.$list_id.';num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($vod_hot2)): $i = 0; $__LIST__ = $vod_hot2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ol>
        </div>
      </div>
    </div>
		<!-- 播放页介绍结束 -->
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