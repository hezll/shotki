<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="wordpress, theme, iKite, ikite" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta name="description" content="<?php bloginfo('description') ?>" />
<title><?php bloginfo('name'); ?><?php if ( is_single() ) { ?> &raquo; Blog Archive<?php } ?><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="Shortcut Icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body>
<div id="wrap">
<div id="header">
	<span class="left"></span>
	<span class="right"></span>
	<span class="logos"><a href="<?php bloginfo('url');?>"></a></span>
	<h1><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></h1>
	<h2><?php bloginfo('description');?></h2>
</div>
<div id="navbar">
	<span class="icon"></span>
	<span class="search"><?php include (TEMPLATEPATH . '/searchform.php'); ?></span>
	<ul class="menu">
		<li class="<?php if ( is_home() or is_archive() or is_single() or is_paged() or is_search() or (function_exists('is_tag') and is_tag()) ) { ?>current_page_item<?php } else { ?>page_item<?php } ?>"><a href="<?php echo get_settings('home'); ?>"><?php _e('Home'); ?></a></li>
		<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
	</ul>
</div>
<hr />