<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo getlistname($list_id);?>频道-<?php echo ($sitename); ?></title>
<script type="text/javascript">
	var info ={
		pid : '2',//父对象id
		ptype : '3',//父对象类型
		purl : '',//父对象url
		navigation : '<a href="<?php echo ($root); ?>">首页</a><a href="<?php echo ($root); ?>movie.html">电影</a>',//页面导航
		videoId : '',//视频id
		videoName : '',//视频名称
		albumId : '',//专辑id
		tvId : '',//剧集id
		smallImageUrl : '',//小图地址
		bigImageUrl : '',//大图地址
		title : '电影'//页面的标题
	}
</script>
<link rel="stylesheet" type="text/css" href="<?php echo ($tpl); ?>images/mv.css" />
<script type="text/javascript" src="<?php echo ($tpl); ?>images/AC_RunActiveContent.js"></script>
<script type="text/javascript" src="<?php echo ($tpl); ?>js/jquery-1.4.4.min.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo ($tpl); ?>js/detail.js" charset="utf-8"></script>
<?php echo ($css); ?>
</head>
<body class="dysy">
<!--movie_info热播的hover-->
<div id="movie_info" style="display:none;" class="kuang">
<div class="bg_tm"></div>
<div class="win_content" id="div_tip_detail"></div>
</div>
<div class="wrap">
  <!-- 标准导航 -->
  <div class="nav">
    <h2 class="navLogo"> <a href="<?php echo ($siteurl); ?>"><img src="<?php echo ($tpl); ?>images/logo.jpg" width="191" height="51" /> </a> </h2>
    <form name="formsearch" action="index.php?s=vod-search" method="post" class="navForm">
      <a href="<?php echo ($root); ?>index.php?s=vod-script-id-
top">排行榜</a>&lt;&gt;<a href="<?php echo ($root); ?>index.php?s=gb.html" target="_blank">在线留言</a>
      <input type="text" class="navInput navInputText" id="suggestText" name="id" />
      <input class="navInput navInputBtn" value="搜索" id="searchClick" type="Submit" onclick="Null()" />
    </form>
    <div class="topInfo">
      <p class="navList"> <a href="<?php echo ($root); ?>">首页</a> <?php $cidarr=array(1,2,3,4,5,23,7,21); ?>
<?php if(is_array($cidarr)): $i = 0; $__LIST__ = $cidarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppcid): ++$i;$mod = ($i % 2 )?><a href="<?php echo getlistname($ppcid,'list_url');?>"><?php echo getlistname($ppcid);?></a><?php endforeach; endif; else: echo "" ;endif; ?> </p>
      <div class="topInfoC"><a>网站总影片：【<font color="#FF0000"><?php echo getcount(0);?></font>部】 |  当前栏目：【<font color="#FF0000"><?php echo getcount($list_id);?></font>部】</a>
	  </div>
      <div class="navLinks">

      </div>
    </div>
  </div>

  <div class="flash">
    <div id="flash" style="width:0px;height:0px;"><!-- 970 390px -->
      <script type="text/javascript">
if (AC_FL_RunContent == 0) {
		alert("This page requires AC_RunActiveContent.js.");
	} else {
	if(DetectFlashVer(9.0,9.0)){
//		AC_FL_RunContent(
//			'width',970,
//			'height', 390,
//			'src', '<?php echo ($root); ?>pic/slide/show.swf',
//			'wmode', 'transparent',
//			'id', 'qiyi_player',
//			'bgcolor', info.bgcolor,
//			'name', 'qiyi_player',
//			'movie', '<?php echo ($root); ?>pic/slide/show.swf',
//			'flashVars','',           
//			'wrapper', 'flash'
//			); //end AC code
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
  </div>
  <!-- 头部搜索区域 -->
  <div class="search">
    <div class="searchT">
      <h2 class="searchTBg"><?php echo ($list_name); ?><br />
        检索</h2>
      <a href="vod-showall-id-<?php echo ($_GET['id']); ?>.html">最近更新></a> </div>
    <dl class="searchDl" style="width:350px;">
      <dt>按类型</dt>
      <dd>
<?php if(is_array($ppmenu)): $i = 0; $__LIST__ = $ppmenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php if(is_array($ppvod["son"])): $i = 0; $__LIST__ = $ppvod["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvodson): ++$i;$mod = ($i % 2 )?><?php if($ppvod['list_id'] == $list_id): ?><a href="<?php echo ($ppvodson["list_url"]); ?>"><?php echo ($ppvodson["list_name"]); ?></a>&nbsp;<?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
</dd>
    </dl>
    <dl class="searchDl" style="width:150px;">
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
    <dl class="searchDl" style="width:200px;">
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
  <!-- 头部搜索区域 end -->
  <!-- 主内容 -->
  <div class="mBg1">
    <div class="m705">
      <!-- 近期大片 -->
      <div class="m705C first">
        <div class="title">
          <h2><img height="18" width="66" title="热播大片" alt="热播大片" src="<?php echo ($tpl); ?>images/rbdp.png"></h2>
          <p class="more"></p>
        </div>
<?php $vod_hits=$pplist->ppvod('pid:'.$list_id.';day:10;num:4;order:vod_hits desc'); ?>
<?php if(is_array($vod_hits)): $i = 0; $__LIST__ = $vod_hits;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><div class="tw w50p"> <a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>"  alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" width="120" height="160" /></a>
          <div class="twC">
            <p><strong><a href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,8)); ?></a></strong></p>
            <p>主演：<?php echo (msubstr($ppvod["vod_actor"],0,10)); ?></p>
            <p>简介：<?php echo (msubstr(trim($ppvod["vod_content"]),0,60)); ?>...<a href="<?php echo ($ppvod["vod_url"]); ?>" class="aBg1">详细>></a></p>
          </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
        
      <!-- 电影频道页广告左第一个705-60 -->
     <div class="ad705-60">
     
电影频道页广告左第一个705-60     
     </div>


      <div class="m705C">
        <div class="title first">
          <h2><img src="<?php echo ($tpl); ?>images/zjgx.png" width="66" height="17" alt="最近更新" title="最近更新" /></h2>
          <p class="more"></p>
        </div>
<?php $vod_new=$pplist->ppvod('pid:'.$list_id.';num:1;order:vod_addtime desc'); ?>
<?php if(is_array($vod_new)): $i = 0; $__LIST__ = $vod_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><div class="tw"> <a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" width="230" height="150" alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" /></a>
          <div class="twC">
            <p><strong><a href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,8)); ?></a></strong></p>
            <p>主演：<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?></p>
            <p>简介：<?php echo (msubstr(trim($ppvod["vod_content"]),0,150)); ?>...<a href="<?php echo ($ppvod["vod_url"]); ?>" class="aBg1">详细>></a></p>
          </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <ul class="ulList r5">
<?php $vod_new2=$pplist->ppvod('pid:'.$list_id.';num:1,10;order:vod_addtime desc'); ?>
<?php if(is_array($vod_new2)): $i = 0; $__LIST__ = $vod_new2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" width="95" height="127" alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" onmouseover="D.show(this,'<?php echo (msubstr($ppvod["vod_name"],0,10)); ?>','<?php echo ($ppvod["vod_hits"]); ?>','<?php echo ($ppvod["vod_area"]); ?>','<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?>','<?php echo (msubstr(h($ppvod["vod_content"]),0,69)); ?>','<?php echo ($ppvod["vod_play"]); ?>')" onmouseout="D.hide()"/></a> <strong><a href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,8)); ?></a></strong></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      
      <!-- 电影频道页广告左第二个705-60-->
     <div class="ad705-60">
     
电影频道页广告左第二个705-60     
     </div>
     
      <div class="m705a">
        <div class="title first">
          <h2><img src="<?php echo ($tpl); ?>images/hyjd.png" width="67" height="18" alt="推荐电影" title="推荐电影" /></h2>
          <p class="more"></p>
        </div>
<?php $vod_tj=$pplist->ppvod('pid:'.$list_id.';num:1;order:day:7;vod_hits desc'); ?>   <!--stars:3,4,5; 2011/9/28 hzl -->
<?php if(is_array($vod_tj)): $i = 0; $__LIST__ = $vod_tj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><div class="tw"> <a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" width="230" height="150" alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" /></a>
          <div class="twC">
            <p><strong><a href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,8)); ?></a></strong></p>
            <p>主演：<?php echo (msubstr($ppvod["vod_actor"],0,10)); ?></p>
            <p>简介：<?php echo (msubstr(trim($ppvod["vod_content"]),0,150)); ?>...<a href="<?php echo ($ppvod["vod_url"]); ?>" class="aBg1">详细>></a></p>
          </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <ul class="ulList r5">
<?php $vod_tj2=$pplist->ppvod('pid:'.$list_id.';num:1,10;day:7;order:vod_hits desc'); ?>  <!--stars:3,4,5; 2011/9/28 hzl -->
<?php if(is_array($vod_tj2)): $i = 0; $__LIST__ = $vod_tj2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" width="95" height="127" alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" onmouseover="D.show(this,'<?php echo (msubstr($ppvod["vod_name"],0,10)); ?>','<?php echo ($ppvod["vod_hits"]); ?>','<?php echo ($ppvod["vod_area"]); ?>','<?php echo (msubstr($ppvod["vod_actor"],0,12)); ?>','<?php echo (msubstr(h($ppvod["vod_content"]),0,69)); ?>','<?php echo ($ppvod["vod_play"]); ?>')" onmouseout="D.hide()"/></a> <strong><a href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,8)); ?></a></strong></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
       
    </div>
    <div class="m250">
      <div id="mvindex_">
        <div class="phbTitle">
          <h2 class="">热播榜</h2>
          <span style="cursor:pointer;" id="S_Menu_31"  class="selected" onclick="Show_Sub(3,1)">全部</span><span style="cursor:pointer;" id=S_Menu_32 onclick="Show_Sub(3,2)">月</span><span style="cursor:pointer;" id=S_Menu_33 onclick="Show_Sub(3,3)">周</span><span style="cursor:pointer;" id=S_Menu_34 onclick="Show_Sub(3,4)">日</span> </div>
        <div style="display: none;" id="S_Cont_31" class="pfbItem">
          <ol>
<?php $vod_hot=$pplist->ppvod('pid:'.$list_id.';num:1;order:vod_hits desc'); ?>
<?php if(is_array($vod_hot)): $i = 0; $__LIST__ = $vod_hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
              播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
              评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
              主演：<?php echo (msubstr($ppvod["vod_actor"],0,10)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
            
<?php $vod_hot2=$pplist->ppvod('pid:'.$list_id.';num:1,9;order:vod_addtime desc'); ?>
<?php if(is_array($vod_hot2)): $i = 0; $__LIST__ = $vod_hot2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ol>
          <p><a href="vod-showall-id-<?php echo ($_GET['id']); ?>.html">TOP10&gt;&gt;</a></p>
        </div>
        <div style="display: none;" id="S_Cont_32" class="pfbItem">
          <ol>
<?php $vod_hot30=$pplist->ppvod('pid:'.$list_id.';day:30;num:1;order:vod_hits desc'); ?>
<?php if(is_array($vod_hot30)): $i = 0; $__LIST__ = $vod_hot30;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
              播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
              评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
              主演：<?php echo (msubstr($ppvod["vod_actor"],0,10)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
            
<?php $vod_hot30_2=$pplist->ppvod('pid:'.$list_id.';day:30;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($vod_hot30_2)): $i = 0; $__LIST__ = $vod_hot30_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ol>
          <p><a href="vod-showall-id-<?php echo ($_GET['id']); ?>.html">TOP10&gt;&gt;</a></p>
        </div>
        <div id="S_Cont_33" class="pfbItem">
          <ol>
<?php $vod_hot7=$pplist->ppvod('pid:'.$list_id.';day:7;num:1;order:vod_hits desc'); ?>
<?php if(is_array($vod_hot7)): $i = 0; $__LIST__ = $vod_hot7;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
              播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
              评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
              主演：<?php echo (msubstr($ppvod["vod_actor"],0,10)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
            
<?php $vod_hot7_2=$pplist->ppvod('pid:'.$list_id.';day:7;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($vod_hot7_2)): $i = 0; $__LIST__ = $vod_hot7_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ol>
          <p><a href="vod-showall-id-<?php echo ($_GET['id']); ?>.html">TOP10&gt;&gt;</a></p>
        </div>
        <div style="display: none;" id="S_Cont_34" class="pfbItem">
          <ol>
<?php $vod_hot1=$pplist->ppvod('pid:'.$list_id.';day:1;num:1;order:vod_hits desc'); ?>
<?php if(is_array($vod_hot1)): $i = 0; $__LIST__ = $vod_hot1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
              播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
              评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
              主演：<?php echo (msubstr($ppvod["vod_actor"],0,10)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
            
<?php $vod_hot1_2=$pplist->ppvod('pid:'.$list_id.';day:1;num:1,9;order:vod_hits desc'); ?>
<?php if(is_array($vod_hot1_2)): $i = 0; $__LIST__ = $vod_hot1_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>          </ol>
          <p><a href="vod-showall-id-<?php echo ($_GET['id']); ?>.html">TOP10&gt;&gt;</a></p>
        </div>
      </div> 
       
      <!--右侧广告第一个250-60-->    
      <div class="space102">
      右侧广告第一个250-60
      </div>
      
      <div class="phbTitle">
        <h2>最新排行榜</h2>
      </div>
      <div class="pfbItem pfw250" id="rankscore">
        <ol>
<?php $vod_new1=$pplist->ppvod('pid:'.$list_id.';num:1;order:vod_addtime desc'); ?>
<?php if(is_array($vod_new1)): $i = 0; $__LIST__ = $vod_new1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
              播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
              评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
              主演：<?php echo (msubstr($ppvod["vod_actor"],0,10)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
            
<?php $vod_new1_2=$pplist->ppvod('pid:'.$list_id.';num:9;order:vod_addtime desc'); ?>
<?php if(is_array($vod_new1_2)): $i = 0; $__LIST__ = $vod_new1_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>          
        </ol>
      </div>
      
       <!--右侧广告第二个250-60-->    
      <div class="space102">
      右侧广告第二个250-60 
      </div>
      
      <div class="phbTitle">
        <h2>推荐排行榜</h2>
      </div>
      <div class="pfbItem pfw250" id="rankscore">
        <ol>
<?php $vod_tj1=$pplist->ppvod('pid:'.$list_id.';num:1;order:vod_hits desc'); ?>    <!--stars:3,4,5; 2011/9/28 hzl -->
<?php if(is_array($vod_tj1)): $i = 0; $__LIST__ = $vod_tj1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li class="li1"><a href="<?php echo ($ppvod["vod_url"]); ?>" class="imgBg1"><img height="100" width="75" src="<?php echo (getpicurl($ppvod["vod_pic"])); ?>" alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>"> <span class="num1"></span></a><strong><a alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,10)); ?></a></strong><br>
              播放：<?php echo ($ppvod["vod_hits"]); ?>次<br>
              评价：<span class="dafen3"><span class="dafenBg<?php echo ($ppvod["vod_stars"]); ?>"></span></span><br>
              主演：<?php echo (msubstr($ppvod["vod_actor"],0,10)); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
            
<?php $vod_tj1_2=$pplist->ppvod('pid:'.$list_id.';stars:3,4,5;num:9;order:vod_hits desc'); ?>
<?php if(is_array($vod_tj1_2)): $i = 0; $__LIST__ = $vod_tj1_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a alt="<?php echo ($ppvod["vod_name"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" href="<?php echo ($ppvod["vod_url"]); ?>"><?php echo (msubstr($ppvod["vod_name"],0,12)); ?></a><?php echo ($ppvod["vod_hits"]); ?>次</li><?php endforeach; endif; else: echo "" ;endif; ?>          </ol>
      </div>
    </div>
    <div class="mBg1BottomBg"></div>
  </div>
  <!-- 主内容 end -->
<!--bottom-->
	<div class="footer"><?php echo ($copyright); ?><?php echo ($tongji); ?><br /><?php echo ($icp); ?></div>
	<!-- JiaThis Button BEGIN -->
<script type="text/javascript" src="http://v2.jiathis.com/code/jiathis_r.js?btn=r4.gif&amp;uid=894528" charset="utf-8"></script>
<!-- JiaThis Button END -->
</div>
</body>

<script type="text/javascript">
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

</script>
</html>