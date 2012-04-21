<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>
<meta name="keywords" content="<?php echo ($keywords); ?>">
<meta name="description" content="<?php echo ($description); ?>">
<?php echo ($css); ?>
</head>
<body>
<div class="wrap">
<div class="head">
		<div class="head_a">
		
	<div class="logo"><a href="<?php echo ($siteurl); ?>" target="_blank"><img src="<?php echo ($tpl); ?>images/logo.jpg" /></a></div>
			 
			<div class="head_cont">
				<div class="toplink">【<a href="#" 
onClick="setHome(this,'http://{maxcms:siteurl}')">设为首页</a>】【<a href="javascript:void(0)" onClick="addFavorite('http://{maxcms:siteurl}','{maxcms:sitename}');">加入收藏</a>】【<a href="/{maxcms:sitepath}rank.html" class="red">热播排行榜</a>】【<a href="/{maxcms:sitepath}hot.html" class="red">推荐排行榜</a>】【<a href="/{maxcms:sitepath}gbook.asp" target="_blank" class="red">留言</a>】【<a href="/{maxcms:sitepath}google.xml ">GOOGLE地图</a>】【<a href="/{maxcms:sitepath}baidu.xml">百度地图</a>】【<a href="/{maxcms:sitepath}rss.xml">RSS订阅</a>】【<a href="/{maxcms:sitepath}allmovie.html">网站地图</a>】</div>
				<div class="ad3">
				<!--首页顶部右侧广告位开始-->
				<script type="text/javascript" language="javascript" src="/{maxcms:sitepath}js/{maxcms:adfolder}/index-top-middle.js"></script>
				<!--首页顶部右侧广告位结束-->
				</div>
				<div class="ad6">
				<!--首页顶部右侧广告位开始-->
				<script type="text/javascript" language="javascript" src="/{maxcms:sitepath}js/{maxcms:adfolder}/index-top-right.js"></script>
				<!--首页顶部右侧广告位结束-->
				</div>
					</div>
			</div>
		</div>
		<div class="nav">
			<ul>
				<li><span><a href="{maxcms:indexlink}">首 页</a></span></li>
				{maxcms:menulist type=top}
				<li{if:[menulist:typeid]={maxcms:currenttypeid}} class="current" {end if}><span><a href="[menulist:link]">[menulist:typename]</a></span></li>
				{/maxcms:menulist}
				<li><span><a href="{maxcms:topiclink}" class="red">专 题</a></span></li>
<li><span><a href="{maxcms:newslink}" class="red">资讯</a></span></li>
			</ul>
		</div>
		<div class="head_b">
			<div class="sealet">
				<form method="post" action="/{maxcms:sitepath}search.asp" name="formsearch" id="formsearch">
					<span>数据搜索</span>
					<input type="text" name="searchword" class="input_key" id="searchword"/>
					<select name="searchtype" id="searchtype">
						<option value="-1">条件(默认全部)</option>
						<option value="0">标题</option>
						<option value="1">主演</option>
						<option value="2">地区</option>
						<option value="3">年份</option>
					</select>
					<input type="submit" name="submit" value="" class="input_sub" />
				</form>
			</div>
			<div class="searight"><b>热门关键字:</b>{maxcms:keywords}</div>
		</div>
		<div class="place"><span>当天更新<b>{maxcms:daycount}</b>部  总数量<b>{maxcms:allcount}</b>部</span> <p>{maxcms:letterlist}</p></div>
	</div>
		


<div class="main">
<div class="bd960 clear"><?php echo getadsurl('top960');?></div>
<div class="hsae">
	<div class="hsae1"><?php $newlist=$pplist->ppvod('num:200;order:vod_addtime desc'); ?>
        <dl class="tit clear"><dt>最近更新的200部影片</dt></dl>
        <div class="hbae11 ssv"><ul>
            <?php if(is_array($newlist)): $i = 0; $__LIST__ = $newlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a href="<?php echo ($ppvod["list_url"]); ?>" target="_blank"><?php echo ($ppvod["list_name"]); ?></a> <a href="<?php echo ($ppvod["vod_url"]); ?>" title="<?php echo ($ppvod["vod_name"]); ?>" target="_blank"><?php echo (msubstr($ppvod["vod_name"],0,13)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul></div>
	</div>
</div>
<div class="friend">
	<dl class="tit"><dt>友情链接</dt><dd>Powered by <strong><a href="http://www.ff84.com" target="_blank">PPVOD!</a></strong> <em><?php echo C("admin_var");?></em></dd></dl>
	<ul><?php if(is_array($pplink)): $i = 0; $__LIST__ = $pplink;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><li><a href="<?php echo ($ppvod["link_url"]); ?>" target="_blank"><?php echo ($ppvod["link_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul>
</div>
<!--bottom-->
	<div class="footer"><?php echo ($copyright); ?><?php echo ($tongji); ?><br /><?php echo ($icp); ?></div>
	<!-- JiaThis Button BEGIN -->
<script type="text/javascript" src="http://v2.jiathis.com/code/jiathis_r.js?btn=r4.gif&amp;uid=894528" charset="utf-8"></script>
<!-- JiaThis Button END -->         
</div>
</body>
</html>