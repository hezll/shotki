<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($vod_name); ?>在线播放-<?php echo ($list_name); ?>-<?php echo ($sitename); ?></title>
<meta name="keywords" content="<?php echo ($vod_name); ?>免费在线观看,<?php echo ($vod_name); ?>剧情介绍,<?php echo ($vod_name); ?>数据海报" />
<meta name="description" content="提供<?php echo ($vod_name); ?>免费在线观看和剧情介绍" />
<link href="<?php echo ($tpl); ?>images/channel.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/plus_vod_ud.css">
<script type="text/javascript" src="__PUBLIC__/js/plus_vod_ud.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo ($tpl); ?>js/ajax.js" charset="utf-8"></script>
</head>
<body class="zhuanji">
<div class="wrap">
  <div class="nav navBg">
    <h2 class="navLogo"> <a href="<?php echo ($siteurl); ?>"> <img src="<?php echo ($tpl); ?>images/logo.png" width="95" height="26" /> </a> </h2>
    <div class="navList"> <a href="<?php echo ($siteurl); ?>">首页</a><?php $cidarr=array(1,2,3,4,5,23,7,21); ?>
<?php if(is_array($cidarr)): $i = 0; $__LIST__ = $cidarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$i;$mod = ($i % 2 )?>&nbsp;| <a href="<?php echo getlistname($ppcid,'list_url');?>"><?php echo getlistname($ppcid);?></a><?php endforeach; endif; else: echo "" ;endif; ?>
&nbsp;| <a href="<?php echo getlistname($ppcid,'list_url');?>">排行榜</a></div>
    <form name="formsearch"  method="post"  class="navSearch" action="index.php?s=vod-search" >
      <input type="text" id="suggestText" class="inputText navBg" name="id"/>
      <input type="Submit" class="inputbtn navBg" value="" title="搜索"  alt="搜索" id="searchClick" onmouseover="this.className='inputbtn navBg inputbtn_'" onmouseout="this.className='inputbtn navBg'" />
      
    </form>
  </div>
  <div class="topInfo2">
    <div id="topInfo2" class="topInfo2"><div class="topInfoC"><a href="<?php echo ($root); ?>index.php?s=gb.html" target="_blank" class="fankuikou">在线留言</a> </div> 您现在的位置：<span  id="navbar"><a href="<?php echo ($root); ?>">首页</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<a href="<?php echo ($list_url); ?>"><?php echo ($list_name); ?></a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<?php echo ($vod_name); ?></span> </div>
  </div>
  <div class="mBg3">
    <div class="m705">
      <div class="tw" id="ctgInfo"><a alt="<?php echo ($vod_name); ?>" title="<?php echo ($vod_name); ?>" id="infolink" class="imgBg1"> <img height="160" width="120" src="<?php echo (getpicurl($vod_pic)); ?>" alt=""></a>
        <div class="twC">
          <h2 class="h2Title1">
              <strong><a id="imgHref" title="<?php echo ($vod_name); ?>"><?php echo ($vod_name); ?></a></strong>
              <em><?php if(($vod_continu)  !=  "0"): ?><font color="red">连载至<?php echo ($vod_continu); ?>集</font>
                      <?php else: ?>
                      <font color="red">全集完结</font><?php endif; ?>
              </em>
              <span id="plus_gold" style="float:right;">
                  <?php for($i=1;$i<=10;$i++){echo '<img src="'.$tpl.'images/x2.png" onmouseover="plus_gold_img('.$i.');" onmouseout="plus_gold_show();" onclick="plus_gold('.$i.');" />';} ?>
              </span>
          </h2>
          
          <p>标签：<?php echo ($vod_title); ?> <?php echo ($vod_keywords); ?></p>
          <p>主演：<?php echo (getactorurl($vod_actor)); ?></p>
          <p>所属分类：<?php echo ($list_name); ?> <?php echo ($vod_area); ?></p>
          <p>更新时间：<?php echo (date('Y-m-d H:i:s',$vod_addtime)); ?></p>
          <p>播放：<script type="text/javascript" src="<?php echo ($root); ?>index.php?s=vod-ajaxhot-id-<?php echo ($vod_id); ?>-t-1"></script>次</p>
         <p>影片映像：<a href="javascript:" onclick="plus_vod_ud(<?php echo ($vod_id); ?>,1,'<?php echo ($root); ?>');" class="vup">顶/<span id="s1"><?php echo ($vod_up); ?></span></a> <a href="javascript:" onclick="plus_vod_ud(<?php echo ($vod_id); ?>,2,'<?php echo ($root); ?>');" class="vdown">踩/<span id="s2"><?php echo ($vod_down); ?></span></a>&nbsp;&nbsp;共<span id="golder"><?php echo ($vod_golder); ?></span>人评分/平均得分<span id="gold"><?php echo ($vod_gold); ?></span>/总得分<span id="goldall"><?php echo ($vod_gold); ?></span></p>
    <p class="input"><script language="javascript" src="<?php echo ($tpl); ?>js/copy.js"></script></p>
      <!-- JiaThis Button BEGIN -->
<div id="jiathis_style_32x32">    
    <a class="jiathis_button_tsina"></a>
    <a class="jiathis_button_tsohu"></a>
	<a class="jiathis_button_qzone"></a>
	<a class="jiathis_button_tqq"></a>
	<a class="jiathis_button_renren"></a>
	<a class="jiathis_button_kaixin001"></a>
	<a href="http://www.jiathis.com/share?uid=894528" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
	<!--<a class="jiathis_counter_style"></a> -->
</div>
<script type="text/javascript">var jiathis_config = {data_track_clickback:true};</script>
<script type="text/javascript" src="http://v2.jiathis.com/code/jia.js?uid=894528" charset="utf-8"></script>
<!-- JiaThis Button END -->
        </div>
      </div>      
     <?php if(is_array($ppplay)): $i = 0; $__LIST__ = $ppplay;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><div class="space102"></div> 
      <div id="listWrapper">
        <div class="title1 titleBg">
          <h2 id="tab-list-0" class="selected"><span><?php echo ($ppvod["servername"]); ?>列表</span></h2>
        </div>
        <div style="display: block; width: 100%;" id="cnt-list-0">
        <ul class="ulTw r5" id="cnt0">
		<?php if(is_array($ppvod['son'])): $i = 0; $__LIST__ = $ppvod['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><li><a href="<?php if(($ppvod["playname"])  ==  "down"): ?><?php echo ($ppvodson["playpath"]); ?><?php else: ?><?php echo ($ppvodson["playurl"]); ?><?php endif; ?>" target="_blank"><?php echo ($ppvodson["playname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
         
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
	  <div class="space102"></div> 
      <div id="listWrapper">
        <div class="title1 titleBg">
          <h2 id="tab-list-0" class="selected"><span>影片介绍</span></h2>
        </div>
		<div style="display: block; width: 100%;" id="cnt-list-0">
		<ul class="ulTw r5" id="cnt0">
      <?php echo ($vod_content); ?>
	  </ul>
         </div>
      </div>
       <div class="space102"></div> 
      <div id="listWrapper">
        <div class="title1 titleBg">
          <h2 id="tab-list-0" class="selected"><span>影片评论</span></h2>
        </div>
      <div id="ajax_vod_cm"></div>

	<script type="text/javascript">plus_vod_ud(<?php echo ($vod_id); ?>,0,'<?php echo ($root); ?>');var gold_id=<?php echo ($vod_id); ?>;var gold_root='<?php echo ($root); ?>';var gold_model='vod';plus_gold(0);plus_cm_list('vod','<?php echo ($root); ?>',<?php echo ($vod_id); ?>);</script>
         
      </div>
    </div>
    <div class="m250 mL15">
      <div id="gd01">
<?php echo getadsurl('left250250');?> 
      </div>
      <div class="space102"></div>
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
    <div class="mBg3BottomBg"></div>
  </div>
  <!--bottom-->
	<div class="footer"><?php echo ($copyright); ?><?php echo ($tongji); ?><br /><?php echo ($icp); ?></div>
	<!-- JiaThis Button BEGIN -->
<script type="text/javascript" src="http://v2.jiathis.com/code/jiathis_r.js?btn=r4.gif&amp;uid=894528" charset="utf-8"></script>
<!-- JiaThis Button END -->
  </div>
</body>
<SCRIPT language=javascript type=text/javascript>
function Show_Sub(id_num,num){
for(var i = 0;i <= 9;i++){
   if(GetObj("S_Menu_" + id_num + i)){GetObj("S_Menu_" + id_num + i).className = '';}
   if(GetObj("S_Cont_" + id_num + i)){GetObj("S_Cont_" + id_num + i).style.display = 'none';}
}

if(GetObj("S_Menu_" + id_num + num)){GetObj("S_Menu_" + id_num + num).className = 'selected';}
if(GetObj("S_Cont_" + id_num + num)){GetObj("S_Cont_" + id_num + num).style.display = 'block';}
}
function GetObj(objName){
if(document.getElementById){
   return document.getElementById(objName);

}else{
   return document.all.objName;
}
}
</SCRIPT>
</html>