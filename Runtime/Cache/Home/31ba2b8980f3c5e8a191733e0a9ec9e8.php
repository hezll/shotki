<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>首页-<?php echo ($sitename); ?></title>
<meta name="keywords" content="<?php echo ($sitename); ?>" />
<meta name="description" content="<?php echo ($sitename); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo ($tpl); ?>images/index.css" />
<script type="text/javascript" src="<?php echo ($tpl); ?>images/AC_RunActiveContent.js"></script>
<script type="text/javascript" src="<?php echo ($tpl); ?>images/public.js"></script>
<script type="text/javascript" src="<?php echo ($tpl); ?>js/jquery-1.4.4.min.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo ($tpl); ?>js/detail.js" charset="utf-8"></script>
<?php echo ($css); ?>
</head>
<body class="qs">
<!--movie_info热播的hover-->
<div id="movie_info" style="display:none;" class="kuang">
<div class="bg_tm"></div>
<div class="win_content" id="div_tip_detail"></div>
</div>
<div class="wrap">
  <!-- 标准导航 -->
  <div class="nav">
    <span><h2 class="navLogo"> <a href="<?php echo ($siteurl); ?>"><img src="<?php echo ($tpl); ?>images/logo.jpg" width="191" height="51"/> </a> </h2> Beta</span>
    <form name="formsearch" action="index.php?s=vod-search" method="post" class="navForm">
	<a href="<?php echo ($root); ?>index.php?s=gb.html">在线留言</a> |  
      <a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top">排行榜</a> 
      <input type="text" class="navInput navInputText" id="suggestText" name="id" />
      <input class="navInput navInputBtn" value="搜索" id="searchClick" type="Submit" onclick="Null()" />
    </form>

  </div>
  <!-- 标准导航 end -->
</div>
<div class="wrap2">
  <div class="nav">
    <div class="topInfo">
      <p class="navList"> <a href="<?php echo ($root); ?>">首页</a>
<?php $cidarr=array(1,2,3,4,5,23,7,21); ?>
<?php if(is_array($cidarr)): $i = 0; $__LIST__ = $cidarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$i;$mod = ($i % 2 )?><a href="<?php echo getlistname($ppcid,'list_url');?>"><?php echo getlistname($ppcid);?></a><?php endforeach; endif; else: echo "" ;endif; ?>
</p>
      <div class="topInfoC">网站总影片：【<font color="#FF0000"><?php echo getcount(0);?></font>部】 |  今日更新数：【<font color="#FF0000"><?php echo getcount(999);?></font>部】 
	 </div>
   
    </div>
  </div>
  <div id="flashbox" class="flash">
    <script language="javascript"> 
	if (AC_FL_RunContent == 0) {
		alert("This page requires AC_RunActiveContent.js.");
	} else {
	if(DetectFlashVer(9.0,9.0)){
		AC_FL_RunContent(
			'width', '960',
			'height', '392', 
			'src', 'qiyi_player',
			'wmode', 'transparent',
			'id', 'qiyi_player',
			'bgcolor', '#000000',
			'name', 'qiyi_player',
			'movie', 'pic/slide/index.swf',
            'flashVars','',  
			'wrapper','flashbox'
			); //end AC code
       	
}else{
	 var isWin = (navigator.platform == "Win32") || (navigator.platform == "Windows");
	 if(!isWin){
		document.write("你需要升级FLASH播放器版本至9.0+,请<a href='http://get.adobe.com/flashplayer/otherversions/'>下载</a>");

	 }else{
		if($IE){
			document.write("你需要升级FLASH播放器版本至9.0+,请<a href='http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash'>下载</a>");
		}else{
			document.write("你需要升级FLASH播放器版本至9.0+,请<a href='http://fpdownload.macromedia.com/get/flashplayer/current/install_flash_player.exe'>下载</a>");
		}
	 }
}
}
</script>
  </div>
  <div>
    <script language="javascript"> 
	if (AC_FL_RunContent == 0) {
		alert("This page requires AC_RunActiveContent.js.");
	} else {
		AC_FL_RunContent(
			'width', 1,
			'height', 1,
			'src', 'images/clear.swf',
			'wmode', 'transparent',
			'id', 'clearswf',
			'bgcolor', 'ffffff',
			'movie', 'images/clear.swf',
			'flashVars','',
			'align','middle'
			); //end AC code
			  
	}
</script>
  </div>
</div>
<div class="wrap">
  <!-- 主内容 -->
  <!-- 电影 -->
  <div class="main">
    <div class="mainBg">
      <div class="m130 mL20">
        <h2 class="h2Title"><img src="<?php echo ($tpl); ?>images/dy.jpg" width="80" height="42" alt="电影" title="电影" /></h2>
        <dl class="dlList">
          <dt>按类型</dt>
          <dd>
<a href="<?php echo getlistname(8,'list_url');?>">动作片</a>
<a href="<?php echo getlistname(9,'list_url');?>">喜剧片</a>
<a href="<?php echo getlistname(10,'list_url');?>">爱情片</a>
<a href="<?php echo getlistname(11,'list_url');?>">科幻片</a>
<a href="<?php echo getlistname(12,'list_url');?>">恐怖片</a>
<a href="<?php echo getlistname(13,'list_url');?>">战争片</a>
<a href="<?php echo getlistname(14,'list_url');?>">故事片</a>
</dd>
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
          <dt>按明星</dt>
          <dd>
<a href="index.php?s=vod-search-x-actor-id-%E6%9D%8E%E8%BF%9E%E6%9D%B0">李连杰</a>
<a href="index.php?s=vod-search-x-actor-id-%E6%A2%81%E6%9C%9D%E4%BC%9F">梁朝伟</a>
<a href="index.php?s=vod-search-x-actor-id-%E5%88%98%E5%BE%B7%E5%8D%8E">刘德华</a>
<a href="index.php?s=vod-search-x-actor-id-%E6%88%90%E9%BE%99">成龙</a>
<a href="index.php?s=vod-search-x-actor-id-%E5%91%A8%E6%98%9F%E9%A9%B0">周星驰</a>
<a href="index.php?s=vod-search-x-actor-id-%E8%B0%A2%E9%9C%86%E9%94%8B">谢霆锋</a>
<a href="index.php?s=vod-search-x-actor-id-%E7%94%84%E5%AD%90%E4%B8%B9">甄子丹</a>
<a href="index.php?s=vod-search-x-actor-id-%E8%83%A1%E6%AD%8C">胡歌</a>
</dd>
        </dl>

      </div>
      <div class="m510 mL25">
<?php $dy_news1=$pplist->ppvod('pid:1;num:1;order:vod_addtime desc'); ?>
<?php if(is_array($dy_news1)): $i = 0; $__LIST__ = $dy_news1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><div class="tw"> <a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" width="220" height="147" alt="<?php echo ($ppvod["vod_name"]); ?>" /></a>
          <div class="twC"> <strong><a href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,15)); ?></a></strong>
            <p>主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></p>
            <p><?php echo (msubstr(trim($ppvod["vod_content"]),0,95)); ?> <a href="<?php echo ($ppvod["vod_url"]); ?>" class="aBg1">详细>></a></p>
          </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <ul class="ulList r4">
<?php $dy_news2=$pplist->ppvod('pid:1;num:1,4;order:vod_addtime desc'); ?>
<?php if(is_array($dy_news2)): $i = 0; $__LIST__ = $dy_news2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" width="95" height="127" alt="<?php echo ($ppvod["vod_name"]); ?>" onmouseover="D.show(this,'<?php echo (msubstr($ppvod["vod_name"],0,10)); ?>','<?php echo ($ppvod["vod_hits"]); ?>','<?php echo ($ppvod["vod_area"]); ?>','<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?>','<?php echo (msubstr(h($ppvod["vod_content"]),0,69)); ?>','<?php echo ($ppvod["vod_play"]); ?>')" onmouseout="D.hide()"/></a> <strong><a href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,8)); ?></a></strong><br />
            <?php echo (msubstr($ppvod["vod_actor"],0,8)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <p class="pMore2"><?php $cidarr=array(1); ?>
<?php if(is_array($cidarr)): $i = 0; $__LIST__ = $cidarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$i;$mod = ($i % 2 )?><a href="<?php echo getlistname($ppcid,'list_url');?>">更多>></a><?php endforeach; endif; else: echo "" ;endif; ?></p>
      </div>
      <div class="m240 mL25">
        <div id="mvindex_">
          <div class="phbTitle">
            <h2 class="">电影热播榜1</h2>
           <span style="cursor:pointer;" id="S_Menu_31"  class="selected" onclick="Show_Sub(3,1)">全部</span><span style="cursor:pointer;" id=S_Menu_32 onclick="Show_Sub(3,2)">月</span><span style="cursor:pointer;" id=S_Menu_33 onclick="Show_Sub(3,3)">周</span><span style="cursor:pointer;" id=S_Menu_34 onclick="Show_Sub(3,4)">日</span>
          </div>
          <div style="display: none;" id="S_Cont_31" class="pfbItem">
            <ol>
<?php $dy_hot=$pplist->ppvod('pid:1;num:1;order:vod_hits desc'); ?>
<?php if(is_array($dy_hot)): $i = 0; $__LIST__ = $dy_hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
                播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
                评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
                主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                 
<?php $dy_hot2=$pplist->ppvod('pid:1;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($dy_hot2)): $i = 0; $__LIST__ = $dy_hot2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
              
            </ol>
            <p><a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top.html">TOP10&gt;&gt;</a></p>
          </div>
          <div style="display: none;" id="S_Cont_32" class="pfbItem">
            <ol>
           <?php $dy_hot30=$pplist->ppvod('pid:1;day:30;num:1;order:vod_hits desc'); ?>
<?php if(is_array($dy_hot30)): $i = 0; $__LIST__ = $dy_hot30;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
                播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
                评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
                主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                 
<?php $dy_hot30_2=$pplist->ppvod('pid:1;day:30;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($dy_hot30_2)): $i = 0; $__LIST__ = $dy_hot30_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ol>
            <p><a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top.html">TOP10&gt;&gt;</a></p>
          </div>
          <div style="display: block;" id="S_Cont_33" class="pfbItem">
            <ol>
<?php $dy_hot7=$pplist->ppvod('pid:1;day:7;num:1;order:vod_hits desc'); ?>
<?php if(is_array($dy_hot7)): $i = 0; $__LIST__ = $dy_hot7;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
                播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
                评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
                主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                 
             <?php $dy_hot7_2=$pplist->ppvod('pid:1;day:7;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($dy_hot7_2)): $i = 0; $__LIST__ = $dy_hot7_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ol>
            <p><a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top.html">TOP10&gt;&gt;</a></p>
          </div>
          <div style="display: none;" id="S_Cont_34" class="pfbItem">
            <ol>
<?php $dy_hot1_1=$pplist->ppvod('pid:1;day:1;num:1;order:vod_hits desc'); ?>
<?php if(is_array($dy_hot1_1)): $i = 0; $__LIST__ = $dy_hot1_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
                播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
                评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
                主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>

<?php $dy_hot1_2=$pplist->ppvod('pid:1;day:1;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($dy_hot1_2)): $i = 0; $__LIST__ = $dy_hot1_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ol>
            <p><a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top.html">TOP10&gt;&gt;</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <!--首页第一个广告970-90-->
  <div class="ad970-90"><?php echo getadsurl('97090_1');?></div>
<!-- 970-90广告结束 -->
  <div class="main">
    <div class="mainBg">
      <div class="m130 mL20">
        <h2 class="h2Title"><img src="<?php echo ($tpl); ?>images/dsj.jpg" width="93" height="39" /></h2>
        <dl class="dlList">
          <dt>按类型</dt>
          <dd>
<a href="<?php echo getlistname(15,'list_url');?>">国产剧</a>
<a href="<?php echo getlistname(16,'list_url');?>">港台剧</a>
<a href="<?php echo getlistname(17,'list_url');?>">欧美剧</a>
<a href="<?php echo getlistname(18,'list_url');?>">日韩剧</a> </dd>
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
          <dt>按明星</dt>
          <dd>
<a href="index.php?s=vod-search-x-actor-id-%E6%9D%8E%E8%BF%9E%E6%9D%B0">李连杰</a>
<a href="index.php?s=vod-search-x-actor-id-%E6%A2%81%E6%9C%9D%E4%BC%9F">梁朝伟</a>
<a href="index.php?s=vod-search-x-actor-id-%E5%88%98%E5%BE%B7%E5%8D%8E">刘德华</a>
<a href="index.php?s=vod-search-x-actor-id-%E6%88%90%E9%BE%99">成龙</a>
<a href="index.php?s=vod-search-x-actor-id-%E5%91%A8%E6%98%9F%E9%A9%B0">周星驰</a>
<a href="index.php?s=vod-search-x-actor-id-%E8%B0%A2%E9%9C%86%E9%94%8B">谢霆锋</a>
<a href="index.php?s=vod-search-x-actor-id-%E7%94%84%E5%AD%90%E4%B8%B9">甄子丹</a>
<a href="index.php?s=vod-search-x-actor-id-%E8%83%A1%E6%AD%8C">胡歌</a>
</dd>
        </dl>

      </div>
      <div class="m510 mL25"> 
<?php $dsj_news=$pplist->ppvod('pid:2;num:1;order:vod_addtime desc'); ?>
<?php if(is_array($dsj_news)): $i = 0; $__LIST__ = $dsj_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><div class="tw"> <a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" width="220" height="147" alt="<?php echo ($ppvod["vod_name"]); ?>" /></a>
          <div class="twC"> <strong><a href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,15)); ?></a></strong>
            <p>主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></p>
            <p><?php echo (msubstr(trim($ppvod["vod_content"]),0,95)); ?> <a href="<?php echo ($ppvod["vod_url"]); ?>" class="aBg1">详细>></a></p>
          </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <ul class="ulList r4">
         <?php $dsj_news2=$pplist->ppvod('pid:2;num:1,4;order:vod_addtime desc'); ?>
<?php if(is_array($dsj_news2)): $i = 0; $__LIST__ = $dsj_news2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" width="95" height="127" alt="<?php echo ($ppvod["vod_name"]); ?>" onmouseover="D.show(this,'<?php echo (msubstr($ppvod["vod_name"],0,10)); ?>','<?php echo ($ppvod["vod_hits"]); ?>','<?php echo ($ppvod["vod_area"]); ?>','<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?>','<?php echo (msubstr(h($ppvod["vod_content"]),0,69)); ?>','<?php echo ($ppvod["vod_play"]); ?>')" onmouseout="D.hide()"/></a> <strong><a href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,8)); ?></a></strong><br />
            <?php echo (msubstr($ppvod["vod_actor"],0,8)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <p class="pMore2"><?php $cidarr=array(2); ?>
<?php if(is_array($cidarr)): $i = 0; $__LIST__ = $cidarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$i;$mod = ($i % 2 )?><a href="<?php echo getlistname($ppcid,'list_url');?>">更多>></a><?php endforeach; endif; else: echo "" ;endif; ?></p>
      </div>
      <div class="m240 mL25">
        <div id="tvindex_">
          <div class="phbTitle">
            <h2 class="">电视剧热播榜</h2>
           <span style="cursor:pointer;" id="Menui_35" onclick="Show(3,5)" class="selected">全部</span><span style="cursor:pointer;" id="Menui_36" onclick="Show(3,6)">月</span><span style="cursor:pointer;" id="Menui_37" onclick="Show(3,7)">周</span><span style="cursor:pointer;" id="Menui_38" onclick="Show(3,8)">日</span>
          </div>
          <div id="Conti_35" class="pfbItem">
            <ol>
<?php $dsj_hot=$pplist->ppvod('pid:2;num:1;order:vod_hits desc'); ?>
<?php if(is_array($dsj_hot)): $i = 0; $__LIST__ = $dsj_hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
                播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
                评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
                主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                 
<?php $dsj_hot2=$pplist->ppvod('pid:2;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($dsj_hot2)): $i = 0; $__LIST__ = $dsj_hot2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
              
            </ol>
            <p><a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top.html">TOP10&gt;&gt;</a></p>
          </div>
          <div style="display: none;" id="Conti_36" class="pfbItem">
            <ol>
<?php $dsj_hot30=$pplist->ppvod('pid:2;day:30;num:1;order:vod_hits desc'); ?>
<?php if(is_array($dsj_hot30)): $i = 0; $__LIST__ = $dsj_hot30;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
                播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
                评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
                主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                 
<?php $dsj_hot30_2=$pplist->ppvod('pid:2;day:30;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($dsj_hot30_2)): $i = 0; $__LIST__ = $dsj_hot30_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ol>
            <p><a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top.html">TOP10&gt;&gt;</a></p>
          </div>
          <div style="display: none;" id="Conti_37" class="pfbItem">
            <ol>
<?php $dsj_hot7=$pplist->ppvod('pid:2;day:7;num:1;order:vod_hits desc'); ?>
<?php if(is_array($dsj_hot7)): $i = 0; $__LIST__ = $dsj_hot7;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
                播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
                评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
                主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                 
             <?php $dsj_hot7_2=$pplist->ppvod('pid:2;day:7;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($dsj_hot7_2)): $i = 0; $__LIST__ = $dsj_hot7_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ol>
            <p><a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top.html">TOP10&gt;&gt;</a></p>
          </div>
          <div style="display: none;" id="Conti_38" class="pfbItem">
            <ol>
<?php $dsj_hot1_1=$pplist->ppvod('pid:2;day:1;num:1;order:vod_hits desc'); ?>
<?php if(is_array($dsj_hot1_1)): $i = 0; $__LIST__ = $dsj_hot1_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
                播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
                评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
                主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
<?php $dsj_hot1_2=$pplist->ppvod('pid:2;day:1;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($dsj_hot1_2)): $i = 0; $__LIST__ = $dsj_hot1_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ol>
            <p><a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top.html">TOP10&gt;&gt;</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 电视剧 end -->
  <!-- 动漫片 -->

  <div class="main">
    <div class="mainBg">
      <div class="m130 mL20">
        <h2 class="h2Title"> <img src="<?php echo ($tpl); ?>images/dm.jpg" width="90" height="39" alt="[arealist:typename]" title="动漫" /></h2>
        <dl class="dlList">
         放个横幅广告

        </dl>

      </div>
      <div class="m510 mL25"> 
	  <?php $dm_news1=$pplist->ppvod('pid:3;num:1;order:vod_addtime desc'); ?>
<?php if(is_array($dm_news1)): $i = 0; $__LIST__ = $dm_news1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><div class="tw"> <a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" width="220" height="147" alt="<?php echo ($ppvod["vod_name"]); ?>" /></a>
          <div class="twC"> <strong><a href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,15)); ?></a></strong>
            <p>主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></p>
            <p><?php echo (msubstr(trim($ppvod["vod_content"]),0,95)); ?><a href="<?php echo ($ppvod["vod_url"]); ?>" class="aBg1">详细>></a></p>
          </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <ul class="ulList r4">
<?php $dm_news2=$pplist->ppvod('pid:3;num:1,4;order:vod_addtime desc'); ?>
<?php if(is_array($dm_news2)): $i = 0; $__LIST__ = $dm_news2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" width="95" height="127" alt="<?php echo ($ppvod["vod_name"]); ?>" onmouseover="D.show(this,'<?php echo (msubstr($ppvod["vod_name"],0,10)); ?>','<?php echo ($ppvod["vod_hits"]); ?>','<?php echo ($ppvod["vod_area"]); ?>','<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?>','<?php echo (msubstr(h($ppvod["vod_content"]),0,69)); ?>','<?php echo ($ppvod["vod_play"]); ?>')" onmouseout="D.hide()"/></a> <strong><a href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,8)); ?></a></strong><br />
            <?php echo (msubstr($ppvod["vod_actor"],0,8)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <p class="pMore2"><?php $cidarr=array(3); ?>
<?php if(is_array($cidarr)): $i = 0; $__LIST__ = $cidarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$i;$mod = ($i % 2 )?><a href="<?php echo getlistname($ppcid,'list_url');?>">更多>></a><?php endforeach; endif; else: echo "" ;endif; ?></p>
      </div>
      <div class="m240 mL25">
        <div id="jlpindex_">
          <div class="phbTitle">
            <h2 class="">动漫热播榜</h2>
           <span style="cursor:pointer;" id="Menu_31"  class="selected" onclick="Showi(3,1)">全部</span><span style="cursor:pointer;" id="Menu_32" onclick="Showi(3,2)">月</span><span style="cursor:pointer;" id="Menu_33" onclick="Showi(3,3)">周</span><span style="cursor:pointer;" id="Menu_34" onclick="Showi(3,4)">日</span>
          </div>
          <div id="Cont_31" class="pfbItem">
            <ol>
<?php $dm_hot=$pplist->ppvod('pid:3;num:1;order:vod_hits desc'); ?>
<?php if(is_array($dm_hot)): $i = 0; $__LIST__ = $dm_hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
                播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
                评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
                主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                 
<?php $dm_hot2=$pplist->ppvod('pid:3;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($dm_hot2)): $i = 0; $__LIST__ = $dm_hot2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
              
            </ol>
            <p><a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top.html">TOP10&gt;&gt;</a></p>
          </div>
          <div style="display: none;" id="Cont_32" class="pfbItem">
            <ol>
           <?php $dm_hot30=$pplist->ppvod('pid:3;day:30;num:1;order:vod_hits desc'); ?>
<?php if(is_array($dm_hot30)): $i = 0; $__LIST__ = $dm_hot30;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
                播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
                评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
                主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                 
<?php $dm_hot30_2=$pplist->ppvod('pid:3;day:30;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($dm_hot30_2)): $i = 0; $__LIST__ = $dm_hot30_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ol>
            <p><a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top.html">TOP10&gt;&gt;</a></p>
          </div>
          <div style="display: none;" id="Cont_33" class="pfbItem">
            <ol>
<?php $dm_hot7=$pplist->ppvod('pid:3;day:7;num:1;order:vod_hits desc'); ?>
<?php if(is_array($dm_hot7)): $i = 0; $__LIST__ = $dm_hot7;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
                播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
                评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
                主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                 
             <?php $dm_hot7_2=$pplist->ppvod('pid:3;day:7;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($dm_hot7_2)): $i = 0; $__LIST__ = $dm_hot7_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ol>
            <p><a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top.html">TOP10&gt;&gt;</a></p>
          </div>
          <div style="display: none;" id="Cont_34" class="pfbItem">
            <ol>
<?php $dm_hot1_1=$pplist->ppvod('pid:3;day:1;num:1;order:vod_hits desc'); ?>
<?php if(is_array($dm_hot1_1)): $i = 0; $__LIST__ = $dm_hot1_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
                播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
                评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
                主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
<?php $dm_hot1_2=$pplist->ppvod('pid:2;day:1;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($dm_hot1_2)): $i = 0; $__LIST__ = $dm_hot1_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ol>
            <p><a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top.html">TOP10&gt;&gt;</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  
  <!--首页第二个广告970-90-->
  <div class="ad970-90"><?php echo getadsurl('97090_2');?></div>
  <!--首页第二个广告970-90结束-->

  <div class="main">
    <div class="mainBg">
      <div class="m130 mL20">
        <h2 class="h2Title"> <img src="<?php echo ($tpl); ?>images/zy.jpg" width="101" height="40" alt="综艺节目" title="综艺节目" /></h2>
        <dl class="dlList">
        放个横幅广告
        </dl>

      </div>
      <div class="m510 mL25">
<?php $zy_news1=$pplist->ppvod('pid:4;num:1;order:vod_addtime desc'); ?>
<?php if(is_array($zy_news1)): $i = 0; $__LIST__ = $zy_news1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><div class="tw"> <a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" width="220" height="147" alt="<?php echo ($ppvod["vod_name"]); ?>" /></a>
          <div class="twC"> <strong><a href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,15)); ?></a></strong>
            <p>主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></p>
            <p><?php echo (msubstr(trim($ppvod["vod_content"]),0,95)); ?><a href="<?php echo ($ppvod["vod_url"]); ?>" class="aBg1">详细>></a></p>
          </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <ul class="ulList r4">
<?php $zy_news2=$pplist->ppvod('pid:4;num:1,4;order:vod_addtime desc'); ?>
<?php if(is_array($zy_news2)): $i = 0; $__LIST__ = $zy_news2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" width="95" height="127" alt="<?php echo ($ppvod["vod_name"]); ?>" onmouseover="D.show(this,'<?php echo (msubstr($ppvod["vod_name"],0,10)); ?>','<?php echo ($ppvod["vod_hits"]); ?>','<?php echo ($ppvod["vod_area"]); ?>','<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?>','<?php echo (msubstr(h($ppvod["vod_content"]),0,69)); ?>','<?php echo ($ppvod["vod_play"]); ?>')" onmouseout="D.hide()"/></a> <strong><a href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,8)); ?></a></strong><br />
            <?php echo (msubstr($ppvod["vod_actor"],0,8)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <p class="pMore2">
		<?php $cidarr=array(4); ?>
<?php if(is_array($cidarr)): $i = 0; $__LIST__ = $cidarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$i;$mod = ($i % 2 )?><a href="<?php echo getlistname($ppcid,'list_url');?>">更多>></a><?php endforeach; endif; else: echo "" ;endif; ?>
</p>
      </div>
      <div class="m240 mL25">
        <div id="zyindex_">
          <div class="phbTitle">
            <h2 class="">综艺热播榜</h2>
           <span style="cursor:pointer;" id="Menun_31"  class="selected" onclick="Shown(3,1)">全部</span><span style="cursor:pointer;" id="Menun_32" onclick="Shown(3,2)">月</span><span style="cursor:pointer;" id="Menun_33" onclick="Shown(3,3)">周</span><span style="cursor:pointer;" id="Menun_34" onclick="Shown(3,4)">日</span>
          </div>
          <div id="Contn_31" class="pfbItem">
            <ol>
<?php $zy_hot=$pplist->ppvod('pid:4;num:1;order:vod_hits desc'); ?>
<?php if(is_array($zy_hot)): $i = 0; $__LIST__ = $zy_hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
                播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
                评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
                主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                 
<?php $zy_hot2=$pplist->ppvod('pid:4;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($zy_hot2)): $i = 0; $__LIST__ = $zy_hot2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
              
            </ol>
            <p><a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top.html">TOP10&gt;&gt;</a></p>
          </div>
          <div style="display: none;" id="Contn_32" class="pfbItem">
            <ol>
           <?php $zy_hot30=$pplist->ppvod('pid:4;day:30;num:1;order:vod_hits desc'); ?>
<?php if(is_array($zy_hot30)): $i = 0; $__LIST__ = $zy_hot30;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
                播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
                评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
                主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                 
<?php $zy_hot30_2=$pplist->ppvod('pid:4;day:30;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($zy_hot30_2)): $i = 0; $__LIST__ = $zy_hot30_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ol>
            <p><a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top.html">TOP10&gt;&gt;</a></p>
          </div>
          <div style="display: none;" id="Contn_33" class="pfbItem">
            <ol>
<?php $zy_hot7=$pplist->ppvod('pid:4;day:7;num:1;order:vod_hits desc'); ?>
<?php if(is_array($zy_hot7)): $i = 0; $__LIST__ = $zy_hot7;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
                播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
                评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
                主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                 
             <?php $zy_hot7_2=$pplist->ppvod('pid:4;day:7;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($zy_hot7_2)): $i = 0; $__LIST__ = $zy_hot7_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ol>
            <p><a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top.html">TOP10&gt;&gt;</a></p>
          </div>
          <div style="display: none;" id="Contn_34" class="pfbItem">
            <ol>
<?php $zy_hot1_1=$pplist->ppvod('pid:4;day:1;num:1;order:vod_hits desc'); ?>
<?php if(is_array($zy_hot1_1)): $i = 0; $__LIST__ = $zy_hot1_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
                播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
                评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
                主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
<?php $zy_hot1_2=$pplist->ppvod('pid:4;day:1;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($zy_hot1_2)): $i = 0; $__LIST__ = $zy_hot1_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ol>
            <p><a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top.html">TOP10&gt;&gt;</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="commbox">
<div class="softul">
    <ul>
        <li><a href="winrar_3.92.exe"><img src="<?php echo ($tpl); ?>images/winrar.gif"alt="Winrar"></a></li>
        <li><a href="../download/迅雷_5.8.14.706.exe"><img src="<?php echo ($tpl); ?>images/xl.gif"alt="迅雷下载"></a></li>
        <li><a href="../download/ie6setup.rar"><img  src="<?php echo ($tpl); ?>images/ie.gif"alt="IE6"></a></li>
        <li><a href="http://dl.qvod.com/QvodSetupPlus3.exe"><img src="<?php echo ($tpl); ?>images/web9.gif"alt="手牵手专用播放器"></a></li>
        <li><a href="http://dl_dir.qq.com/qqfile/qq/QQ2009/QQ2009_chs.exe"><img  src="<?php echo ($tpl); ?>images/qq.gif"alt="2010QQ"></a></li>
        <li><a href="http://down.360safe.com/se/360se_2.0.exe"><img src="<?php echo ($tpl); ?>images/360.gif"alt="360杀毒软件"></a></li>
    </ul>
</div>
</div>
<div class="flink">
友情链接：<ol>
<?php if(is_array($pplink)): $i = 0; $__LIST__ = $pplink;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php if(($ppvod["link_type"])  ==  "1"): ?><li><a href="<?php echo ($ppvod["link_url"]); ?>" target="_blank"><?php echo ($ppvod["link_name"]); ?></a></li><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
</ol>
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

function Show(id_num,num){
for(var i = 0;i <= 9;i++){
   if(GetObj("Menui_" + id_num + i)){GetObj("Menui_" + id_num + i).className = '';}
   if(GetObj("Conti_" + id_num + i)){GetObj("Conti_" + id_num + i).style.display = 'none';}
}

if(GetObj("Menui_" + id_num + num)){GetObj("Menui_" + id_num + num).className = 'selected';}
if(GetObj("Conti_" + id_num + num)){GetObj("Conti_" + id_num + num).style.display = 'block';}
}

function Shown(id_num,num){
for(var i = 0;i <= 9;i++){
   if(GetObj("Menun_" + id_num + i)){GetObj("Menun_" + id_num + i).className = '';}
   if(GetObj("Contn_" + id_num + i)){GetObj("Contn_" + id_num + i).style.display = 'none';}
}

if(GetObj("Menun_" + id_num + num)){GetObj("Menun_" + id_num + num).className = 'selected';}
if(GetObj("Contn_" + id_num + num)){GetObj("Contn_" + id_num + num).style.display = 'block';}
}

function Showi(id_num,num){
	for(var i = 0;i <= 9;i++){
		if(GetObj("Menu_" + id_num + i)){GetObj("Menu_" + id_num + i).className = '';}
		if(GetObj("Cont_" + id_num + i)){GetObj("Cont_" + id_num + i).style.display = 'none';}
		}
 if(GetObj("Menu_" + id_num + num)){GetObj("Menu_" + id_num + num).className = 'selected';}
 if(GetObj("Cont_" + id_num + num)){GetObj("Cont_" + id_num + num).style.display = 'block';}
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