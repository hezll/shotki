<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title><?php echo C("admin_name");?> 管理面版 v<?php echo C("admin_var");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo C("admin_keywords");?>">
<meta name="description" content="<?php echo C("admin_description");?>">
</head>
</head>
<frameset rows="90,*" frameborder="NO" border="0" framespacing="0" cols="*">
  <frame name="head" scrolling="NO" noresize src="index.php?s=Admin-Index-Top" >
  <frameset cols="172,*" frameborder="NO" border="0" framespacing="0" rows="*">
    <frame name="toc" scrolling="NO" noresize src="index.php?s=Admin-Index-Left">
    <frame name="content" src="index.php?s=Admin-Index-Main" title="mainFrame">
  </frameset>
</frameset>
<noframes>
<body >
不支持框架!
</body>
</noframes>
</html>