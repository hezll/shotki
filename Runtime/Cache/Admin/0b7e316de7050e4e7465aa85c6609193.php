<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title><?php echo C("admin_name");?> 管理面版 v<?php echo C("admin_var");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo C("admin_keywords");?>">
<meta name="description" content="<?php echo C("admin_description");?>">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin.css'>
<script language="JavaScript" charset="utf-8" type="text/javascript" src="__PUBLIC__/js/left.js"></script>
</head>
<body background="__PUBLIC__/images/top10.gif">
<div style="width:170px"> <img src="__PUBLIC__/images/top11.gif">
  <div id="main1" onclick=expandIt(1) class="expand">
    <div class="expand_title">系统设置</div>
  </div>
  <div id="sub1" style="display:none" class="expand_sub">
    <ul>
      <!--<li><a href="index.php?s=Admin-Login-Logout" target="_top" onClick="return confirm('确定退出?')">退出登陆</a></li> -->
      <li><a href="index.php?s=Admin-Index-Config" target="content">网站基本设置</a> </li>
      <li><a href="index.php?s=Admin-List-Show" target="content">网站栏目管理</a> &nbsp;|&nbsp; <a href="index.php?s=Admin-List-Add" target="content">添加</a></a> </li>
      <li><a href="index.php?s=Admin-Cache-Show" target="content">网站缓存管理</a> &nbsp;|&nbsp; <a href="index.php?s=Admin-Index-Main" target="content">状态</a></li>
      <li><a href="index.php?s=Admin-Index-Show" target="content">后台用户管理</a> &nbsp;|&nbsp; <a href="index.php?s=Admin-Index-Add" target="content">添加</a></li>
    </ul>
  </div>
  <div id="main2" onclick=expandIt(2) class="expand">
    <div class="expand_title">视频管理</div>
  </div>
  <div id="sub2" style="display:none" class="expand_sub">
    <ul>
    <li><a href="index.php?s=Admin-Vod-Show" target="content">视频管理</a> &nbsp;|&nbsp; <a href="index.php?s=Admin-Vod-Add" target="content">添加视频</a></li>
    <li><a href="index.php?s=Admin-List-Show-sid-1" target="content">视频分类</a> &nbsp;|&nbsp; <a href="index.php?s=Admin-List-Add" target="content">添加分类</a></li>
    <li><a href="index.php?s=Admin-Collect-Xmllist" target="content"><font color="red">一键采集视频</font></a></li>
    <li><a href="index.php?s=Admin-Vod-Show-vod_del-1" target="content">未审核的视频</a></li>
    <li><a href="index.php?s=Admin-Vod-Show-vod_continu-1" target="content">连载中的视频</a></li>
    <li><a href="index.php?s=Admin-Vod-Show-vod_cid-0" target="content">未入库的视频</a></li>
    </ul>
  </div>
  <div id="main3" onclick=expandIt(3) class="expand">
    <div class="expand_title">新闻管理</div>
  </div>
  <div id="sub3" style="display:none" class="expand_sub">
    <ul>
    <li><a href="index.php?s=Admin-News-Show" target="content">新闻列表</a> &nbsp;|&nbsp; <a href="index.php?s=Admin-News-Add" target="content">添加新闻</a></li>
    <li><a href="index.php?s=Admin-List-Show-sid-2" target="content">新闻分类</a> &nbsp;|&nbsp; <a href="index.php?s=Admin-List-Add" target="content">添加分类</a></li> 
    <li><a href="index.php?s=Admin-News-Show-news_del-1" target="content">未审核的新闻</a></li>
    </ul>
  </div>   
  <div id="main5" onclick=expandIt(5) class="expand">
    <div class="expand_title">采集管理</div>
  </div>
  <div id="sub5" style="display:none" class="expand_sub">
    <ul>
    <li><a href="index.php?s=Admin-Collect-Xmllist" target="content"><font color="red">一键采集视频</font></a></li>
    <li><a href="index.php?s=Admin-Collect-Show" target="content">自定义采集视频管理</a></li>
    <li><a href="index.php?s=Admin-Collect-Add" target="content">自定义采集视频添加</a></li>
    <li><a href="index.php?s=Admin-Collect-Export" target="content">自定义采集规则导出</a></li>
    <li><a href="index.php?s=Admin-Collect-Import" target="content">自定义采集规则导入</a></li>
    </ul>
  </div>  
  <div id="main6" onclick=expandIt(6) class="expand">
    <div class="expand_title">生成管理</div>
  </div>
  <div id="sub6" style="display:none" class="expand_sub">
    <ul>
    <li><a href="index.php?s=Admin-Html-Show" target="content">网站生成选项</a></li>     
    <li><a href="index.php?s=Admin-Html-Createindex" target="content">生成网站首页</a></li>
    <li><a href="index.php?s=Admin-Html-Showvod-did-1-gid-1" target="content">一键生成当天视频</a></li>
    <li><a href="index.php?s=Admin-Html-Shownews-did-1-gid-1" target="content">一键生成当天新闻</a></li>
    <li><a href="index.php?s=Admin-Html-Mapall" target="content">一键生成网页地图</a></li>
    </ul>
  </div>   
  <div id="main7" onclick=expandIt(7) class="expand">
    <div class="expand_title">数据维护</div>
  </div>
  <div id="sub7" style="display:none" class="expand_sub">
    <ul>
      <li><a href="index.php?s=Admin-Tool" target="content">数据库备份</a></li>
      <li><a href="index.php?s=Admin-Tool-Restore" target="content">数据库恢复</a></li>
      <li><a href="index.php?s=Admin-Tool-index-2" target="content">执行SQL语句</a></li>
      <li><a href="index.php?s=Admin-Tool-index-3" target="content">数据批量替换</a></li>  
    </ul>
  </div>
  <div id="main8" onclick=expandIt(8) class="expand">
    <div class="expand_title">插件工具</div>
  </div>
  <div id="sub8" style="display:none" class="expand_sub">
    <ul>
      <li><a href="index.php?s=Admin-Ads-Show" target="content">网站广告管理</a></li>
      <li><a href="index.php?s=Admin-Link-Show" target="content">友情链接管理</a></li>
      <li><a href="index.php?s=Admin-Cm-Show" target="content">网友评论管理</a></li>
      <li><a href="index.php?s=Admin-Gb-Show" target="content">网友留言管理</a></li>
      <li><a href="index.php?s=Admin-Tag-Show" target="content">标签TAG管理</a></li>
      <li><a href="index.php?s=Admin-Tpl-Pic" target="content">无效图片清理</a></li>
      <li><a href="index.php?s=Admin-Tpl-Show" target="content">在线模板编辑</a></li>
<!--      <li><a href="?g=Admin&m=communt" target="content">评论管理</a></li> 
      <li><a href="index.php?s=Admin/main" target="content">帮助手册</a> &nbsp;|&nbsp;<a href="http://www.PicCMS.Com/help" target="_blank">在线</a> </li>   -->  
    </ul>
  </div>    
</div>
</body>
</html>