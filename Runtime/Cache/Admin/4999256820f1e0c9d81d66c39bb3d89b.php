<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title><?php echo C("admin_name");?> 管理面版 v<?php echo C("admin_var");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo C("admin_keywords");?>">
<meta name="description" content="<?php echo C("admin_description");?>">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin.css'>
</head>
<body>
<div class="right">
  <div class="right_top"><?php echo C("admin_welcome");?></div>
  <div class="right_main">
    <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
      <tr class="tb_head"><td><h2 style="font-size:14px">网站生成选项：</h2></td></tr>
      <form action="index.php?s=Admin-Html-Createindex" method="post" name="mymap">
      <tr class=firstalt>
        <td><input name="Submit" type="submit" class="bginput" value="生成网站首页"> <input name="Submit" type="submit" class="bginput" value="生成网站地图" onClick="document.mymap.action='index.php?s=Admin-Html-Mapsite';"> <input name="Submit" type="submit" class="bginput" value="生成百度地图" onClick="document.mymap.action='index.php?s=Admin-Html-Mapbaidu';"> <input name="Submit" type="submit" class="bginput" value="生成谷歌地图" onClick="document.mymap.action='index.php?s=Admin-Html-Mapgoogle';"> <input name="Submit" type="submit" class="bginput" value="生成RSS订阅" onClick="document.mymap.action='index.php?s=Admin-Html-Maprss';"></td>
      </tr>
      </form>
    </table>
    <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
      <tr class="tb_head"><td><h2 style="font-size:14px">生成视频选项：</h2></td></tr>
      <form action="index.php?s=Admin-Html-Showvod" method="post" name="myformlist">
      <tr class="firstalt">
        <td style="font-size:14px">生成视频栏目：&nbsp;&nbsp;&nbsp;&nbsp;<select name="id"><option value='0'>全部分类</option><?php if(is_array($listvod)): $i = 0; $__LIST__ = $listvod;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($pp["list_id"]); ?>" <?php if(($pp["list_id"])  ==  $vod_cid): ?>selected<?php endif; ?>><?php echo ($pp["list_name"]); ?></option><?php if(is_array($pp['son'])): $i = 0; $__LIST__ = $pp['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($pp["list_id"]); ?>" <?php if(($pp["list_id"])  ==  $vod_cid): ?>selected<?php endif; ?>>├ <?php echo ($pp["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></select>&nbsp;&nbsp;&nbsp;&nbsp;<input name="cindex" type="submit" class="bginput" value="生成视频分类页" > <input type="submit" class="bginput" value="一键生成全站视频" onClick="document.myformlist.action='index.php?s=Admin-Html-Showvod-gid-1';"/></td>
      </tr>
      </form>
      <form action="index.php?s=Admin-Html-Readvod" method="post" name="myformvod">
      <tr class="firstalt">
        <td style="font-size:14px">生成视频内容：&nbsp;&nbsp;&nbsp;&nbsp;<select name="id"><option value='0'>全部内容</option>
        <?php if(is_array($listvod)): $i = 0; $__LIST__ = $listvod;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): ++$i;$mod = ($i % 2 )?><?php if(getlistson($pp['list_id']) == 1): ?><option value="<?php echo ($pp["list_id"]); ?>"><?php echo ($pp["list_name"]); ?></option><?php endif; ?>
        <?php if(is_array($pp['son'])): $i = 0; $__LIST__ = $pp['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($pp["list_id"]); ?>"><?php echo ($pp["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></select>&nbsp;&nbsp;&nbsp;&nbsp;<input name="cindex" type="submit" class="bginput" value="生成视频内容页" > <input type="submit" class="bginput" value="一键生成当天视频" onClick="document.myformvod.action='index.php?s=Admin-Html-Readvod-did-1-gid-1';"/> <input type="submit" class="bginput" value="一键生成当天视频+分类" onClick="document.myformvod.action='index.php?s=Admin-Html-Showvod-did-1-gid-1';"/></td>
      </tr>
      </form>
    </table>
    <table width="98%" border="0" cellpadding="4" cellspacing="1" class="tableoutline">
      <tr class="tb_head"><td><h2 style="font-size:14px">生成新闻选项：</h2></td></tr>
      <tr class="firstalt"><form action="index.php?s=Admin-Html-Shownews" method="post" name="myform">
        <td style="font-size:14px">生成新闻栏目：&nbsp;&nbsp;&nbsp;&nbsp;<select name="id"><option value='0'>全部分类</option><?php if(is_array($listnews)): $i = 0; $__LIST__ = $listnews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($pp["list_id"]); ?>"><?php echo ($pp["list_name"]); ?></option><?php if(is_array($pp['son'])): $i = 0; $__LIST__ = $pp['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($pp["list_id"]); ?>">├ <?php echo ($pp["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></select>&nbsp;&nbsp;&nbsp;&nbsp;<input name="cindex" type="submit" class="bginput" value="生成新闻分类页" > <input type="submit" class="bginput" value="一键生成全站新闻" onClick="document.myformlist.action='index.php?s=Admin-Html-Shownews-gid-1';"/></td>
        </form>
      </tr>
      <tr class="firstalt"><form action="index.php?s=Admin-Html-Readnews" method="post" name="myformnews">
        <td style="font-size:14px">生成新闻内容：&nbsp;&nbsp;&nbsp;&nbsp;<select name="id"><option value='0'>全部内容</option>
        <?php if(is_array($listnews)): $i = 0; $__LIST__ = $listnews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): ++$i;$mod = ($i % 2 )?><?php if(getlistson($pp['list_id']) == 1): ?><option value="<?php echo ($pp["list_id"]); ?>"><?php echo ($pp["list_name"]); ?></option><?php endif; ?>
        <?php if(is_array($pp['son'])): $i = 0; $__LIST__ = $pp['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pp): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($pp["list_id"]); ?>"><?php echo ($pp["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></select>&nbsp;&nbsp;&nbsp;&nbsp;<input name="cindex" type="submit" class="bginput" value="生成新闻内容页" > <input type="submit" class="bginput" value="一键生成当天新闻" onClick="document.myformnews.action='index.php?s=Admin-Html-Readnews-did-1-gid-1';"/> <input type="submit" class="bginput" value="一键生成当天新闻+分类" onClick="document.myformnews.action='index.php?s=Admin-Html-Shownews-did-1-gid-1';"/></td>
        </form>
      </tr>
    </table>    
  </div>
</div>
<br /><center>Powered by： <a href="<?php echo C("admin_url");?>" target="_blank"><?php echo C("admin_name");?></a> v<?php echo C("admin_var");?></center>
</body>
</html>