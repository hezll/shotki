<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($list_name); ?>-<?php echo ($sitename); ?></title>
<meta name="keywords" content="<?php echo ($list_name); ?>-<?php echo ($sitename); ?>" />
<meta name="description" content="<?php echo ($list_name); ?>-<?php echo ($sitename); ?>" />
<link href="<?php echo ($tpl); ?>images/channel.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo ($tpl); ?>js/jquery-1.4.4.min.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo ($tpl); ?>js/detail.js" charset="utf-8"></script>
<?php echo ($css); ?>
</head>
<body class="fllb">
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
<?php if(is_array($cidarr)): $i = 0; $__LIST__ = $cidarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$i;$mod = ($i % 2 )?>&nbsp;|&nbsp;<a href="<?php echo getlistname($ppcid,'list_url');?>"><?php echo getlistname($ppcid);?></a><?php endforeach; endif; else: echo "" ;endif; ?>
&nbsp;| <a href="<?php echo getlistname($ppcid,'list_url');?>">排行榜</a></div>
    <form name="formsearch"  method="post"  class="navSearch" action="index.php?s=vod-search" >
      <input type="text" id="suggestText" class="inputText navBg" name="id"/>
      <input type="Submit" class="inputbtn navBg" value=""  />
      
    </form>
  </div>
  <div class="topInfo2">
    <div id="topInfo2" class="topInfo2"><div class="topInfoC"><a href="<?php echo ($root); ?>index.php?s=gb.html" target="_blank" class="fankuikou">在线留言</a> </div> 您现在的位置：<span  id="navbar"><a href="<?php echo ($root); ?>">首页</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<?php echo ($list_name); ?></span> </div>
  </div>

 <div class="mBg4">
    <div class="m250">
	      <dl class="fllbDl">

 </dl>

<div class="phbTitle phbTitle2"><h2>电影热播</h2></div>
<div class=pfbItem id=cnt-rank-0 style="DISPLAY: block">
<OL>
<?php $dy_hot1=$pplist->ppvod('pid:1;num:1;order:vod_hits desc'); ?>
<?php if(is_array($dy_hot1)): $i = 0; $__LIST__ = $dy_hot1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><LI class=li1><A class=imgBg1 href="<?php echo ($ppvod["vod_url"]); ?>"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>" width="75" height="100" border="0"/><SPAN class=num1></SPAN></A><STRONG><A title=<?php echo ($ppvod["vod_name"]); ?> href="<?php echo ($ppvod["vod_url"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"><FONT color=#010101 size=3><?php echo (msubstr($ppvod["vod_name"],0,8)); ?></FONT></A></STRONG><BR>播放：<?php echo ($ppvod["vod_hits"]); ?>次<BR>日期：<SPAN class=dafen3><?php echo (date('Y-m-d',$ppvod["vod_addtime"])); ?></SPAN><BR>主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></LI><?php endforeach; endif; else: echo "" ;endif; ?>

 <?php $dy_hot2=$pplist->ppvod('pid:1;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($dy_hot2)): $i = 0; $__LIST__ = $dy_hot2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><LI><A title=<?php echo ($ppvod["vod_name"]); ?> href="<?php echo ($ppvod["vod_url"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,20)); ?></A><?php echo ($ppvod["vod_hits"]); ?>次</LI><?php endforeach; endif; else: echo "" ;endif; ?>

</OL>
</div>
<div>
 
<div class="phbTitle phbTitle2"><h2>剧场热播</h2></div>
<div class=pfbItem id=cnt-rank-0 style="DISPLAY: block">
<OL>
<?php $dsj_hot1=$pplist->ppvod('pid:2;num:1;order:vod_hits desc'); ?>
<?php if(is_array($dsj_hot1)): $i = 0; $__LIST__ = $dsj_hot1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><LI class=li1><A class=imgBg1 href="<?php echo ($ppvod["vod_url"]); ?>"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>" width="75" height="100" border="0"/><SPAN class=num1></SPAN></A><STRONG><A title=<?php echo ($ppvod["vod_name"]); ?> href="<?php echo ($ppvod["vod_url"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"><FONT color=#010101 size=3><?php echo (msubstr($ppvod["vod_name"],0,8)); ?></FONT></A></STRONG><BR>播放：<?php echo ($ppvod["vod_hits"]); ?>次<BR>日期：<SPAN class=dafen3><?php echo (date('Y-m-d',$ppvod["vod_addtime"])); ?></SPAN><BR>主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></LI><?php endforeach; endif; else: echo "" ;endif; ?>

 <?php $dsj_hot2=$pplist->ppvod('pid:2;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($dsj_hot2)): $i = 0; $__LIST__ = $dsj_hot2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><LI><A title=<?php echo ($ppvod["vod_name"]); ?> href="<?php echo ($ppvod["vod_url"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,20)); ?></A><?php echo ($ppvod["vod_hits"]); ?>次</LI><?php endforeach; endif; else: echo "" ;endif; ?>
 
</OL>
</div>
 
 
<div class="phbTitle phbTitle2"><h2>动漫热播</h2></div>
<div class=pfbItem id=cnt-rank-0 style="DISPLAY: block">
<OL>
<?php $dm_hot1=$pplist->ppvod('pid:3;num:1;order:vod_hits desc'); ?>
<?php if(is_array($dm_hot1)): $i = 0; $__LIST__ = $dm_hot1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><LI class=li1><A class=imgBg1 href="<?php echo ($ppvod["vod_url"]); ?>"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>" width="75" height="100" border="0"/><SPAN class=num1></SPAN></A><STRONG><A title=<?php echo ($ppvod["vod_name"]); ?> href="<?php echo ($ppvod["vod_url"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"><FONT color=#010101 size=3><?php echo (msubstr($ppvod["vod_name"],0,8)); ?></FONT></A></STRONG><BR>播放：<?php echo ($ppvod["vod_hits"]); ?>次<BR>日期：<SPAN class=dafen3><?php echo (date('Y-m-d',$ppvod["vod_addtime"])); ?></SPAN><BR>主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></LI><?php endforeach; endif; else: echo "" ;endif; ?>

 <?php $dm_hot2=$pplist->ppvod('pid:3;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($dm_hot2)): $i = 0; $__LIST__ = $dm_hot2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><LI><A title=<?php echo ($ppvod["vod_name"]); ?> href="<?php echo ($ppvod["vod_url"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,20)); ?></A><?php echo ($ppvod["vod_hits"]); ?>次</LI><?php endforeach; endif; else: echo "" ;endif; ?>
 
</OL>
</div>
</div><div id="fenleirank"></div>

    </div>

    <div class="m705 mL15">
      <div class="fllbJs">

        <div id="bqC">
		 <dl class="fllbJsDl">
            <dt>按分类</dt>
            <dd> 
<?php if(is_array($ppmenu)): $i = 0; $__LIST__ = $ppmenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php if(($ppvod["list_sid"])  ==  "1"): ?><?php if(is_array($ppvod["son"])): $i = 0; $__LIST__ = $ppvod["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><a href="<?php echo ($ppvodson["list_url"]); ?>"><?php echo ($ppvodson["list_name"]); ?></a>&nbsp;|&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
</dd>
          </dl>
          <dl id="area" class="fllbJsDl">
            <dt>按地区</dt>
            <dd> 
<a href="index.php?s=vod-search-x-area-id-%E5%A4%A7%E9%99%86">大陆</a>
<a href="index.php?s=vod-search-x-area-id-%E5%8F%B0%E6%B9%BE">台湾</a>
<a href="index.php?s=vod-search-x-area-id-%E9%A6%99%E6%B8%AF">香港</a>
<a href="index.php?s=vod-search-x-area-id-%E9%9F%A9%E5%9B%BD">韩国</a>
<a href="index.php?s=vod-search-x-area-id-%E6%97%A5%E6%9C%AC">日本</a>
<a href="index.php?s=vod-search-x-area-id-%E5%8D%B0%E5%BA%A6">印度</a>
<a href="index.php?s=vod-search-x-area-id-%E6%AC%A7%E7%BE%8E">欧美</a>
<a href="index.php?s=vod-search-x-area-id-%E5%85%B6%E5%AE%83">未知</a>
</dd>
          </dl>
		   <dl id="area" class="fllbJsDl">
            <dt>按字母</dt>
            <dd><?php echo getletter(vod);?></dd>
          </dl>
        </div>
      </div>
      <div id="paixu" class="paixu">
        <input type="hidden" value="poster" id="j-list-view"/>
        <strong>排序方式：</strong> <a href="<?php echo ($list_url); ?>" class="selected" >最新</a><a href="index.php?s=vod-show-id-<?php echo ($list_id); ?>-o-hits.html" class="selected" >按人气</a><a href="index.php?s=vod-show-id-<?php echo ($list_id); ?>-o-up.html" class="selected" >按投票</a></div>
      <div style="display: block;" id="c1">
        <ul id="j-search-poster" class="ulList r4">
<?php $list=$pplist->ppvod('pid:'.$list_id.';num:16;page:true;');$page=$list[0]['page']; ?>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="160" width="120" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>" onmouseover="D.show(this,'<?php echo (msubstr($ppvod["vod_name"],0,10)); ?>','<?php echo ($ppvod["vod_hits"]); ?>','<?php echo ($ppvod["vod_area"]); ?>','<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?>','<?php echo (msubstr(h($ppvod["vod_content"]),0,69)); ?>','<?php echo ($ppvod["vod_play"]); ?>')" onmouseout="D.hide()"></a><a title="<?php echo ($ppvod["vod_name"]); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>" ><?php echo (msubstr($ppvod["vod_name"],0,8)); ?></a><br>
            <span class="breakBlock">主演：<?php echo (msubstr($ppvod["vod_actor"],0,7)); ?></span> 播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      <div id="page" class="page"><?php echo ($page); ?></div>
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