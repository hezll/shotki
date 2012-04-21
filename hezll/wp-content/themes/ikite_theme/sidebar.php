<div id="sidebar">
    <ul class="feed-rss">
        <li><a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe using any feed reader!">All Posts Feed</a></li>
        <li><a href="<?php bloginfo('rss2_url'); ?>">All Comments Feed</a></li>
    </ul>
    <?php 	/* Widgetized sidebar, if you have the plugin installed. */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
    <ul class="catmenu">
        <?php wp_list_categories('show_count=0&title_li=<h3>Categories</h3>'); ?>
    </ul>
    <?php /* Most Popular in Category */ if ((function_exists('akpc_most_popular_in_cat')) and is_category()) { ?>
    <ul>
        <li><h3><?php single_cat_title(); ?> <?php _e('分类中最受欢迎文章'); ?></h3></li>
        <?php akpc_most_popular_in_cat($limit = 6); ?>
    </ul>
    <?php } ?>
    <?php /* Most Popular in Archive */ if ((function_exists('akpc_most_popular_in_month')) and is_archive() and is_month()) { ?>
    <ul>
        <li><h3><?php the_time('F, Y'); ?> <?php _e('最受欢迎文章'); ?></h3></li>
        <ul><?php akpc_most_popular_in_month($limit = 6); ?></ul>
    </ul>
    <?php } ?>
    <?php /* Most Popular in Month */ if (function_exists('akpc_most_popular_in_month')) { ?>
    <ul>
        <li><h3><?php if (is_home()) { ?><?php _e('本月最受欢迎文章'); ?><?php } ?>
        <?php if (is_single()) { ?><?php _e('当月最受欢迎文章'); ?><?php } ?>
        <?php if (!is_home() and !is_single()) { ?><?php _e('最受欢迎文章'); ?><?php } ?></h3></li>
        <ul><?php akpc_most_popular_in_month($limit = 6); ?></ul>
    </ul>
    <?php } ?>
		<ul>
			<li><h3><?php _e('Recent Comments'); ?></h3></li>
			<ul>
				<?php if( function_exists('wp_recentcomments') ) { wp_recentcomments('limit=5&length=16&post=false&smilies=true&navigator=false'); } else { get_wpkitcomments($no_comments = 5); }?>
			</ul>
		</ul>
    <ul>
        <li><h3><?php _e('其他杂项'); ?></h3></li>
        <ul>
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
            <li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
            <li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
            <?php wp_meta(); ?>
        </ul>
    </ul>
    <?php endif; ?>
    <!-- Start of Flickr Badge -->
    <div id="flickr_badge_uber_wrapper">
      <a href="http://www.flickr.com" id="flickr_www"><strong style="color:#3993ff">flick<span style="color:#ff1c92">r</span></strong>.com</a>
      <div id="flickr_badge_wrapper">
        <script type="text/javascript" src="#Your flickr address"></script>
      </div>
    </div>
    <!-- End of Flickr Badge -->
</div>