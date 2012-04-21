<?php get_header(); ?>
    <div id="content">
        <div id="postwrap" class="search">
        	<div class="page">
				<?php if (have_posts()) : ?>
                <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                <?php /* If this is a category archive */ if (is_category()) { ?>
                <h2 class="pagetitle">分类为 &#8216;<?php echo single_cat_title(); ?>&#8217; 的文章归档:</h2>
                <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                <h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
                <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                <h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
                <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                <h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
                <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                <h2 class="pagetitle">Author Archive</h2>
                <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <h2 class="pagetitle">Blog Archives</h2>
                <?php } ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post" id="post-<?php the_ID(); ?>">
                        <div class="title">
                    		<h3><?php the_time('F jS, Y') ?></h3>
                        	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    	</div>
                        <small class="comment"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><?php if (function_exists('akpc_the_popularity')) { ?>, <?php akpc_the_popularity(); ?><?php } ?> <?php edit_post_link('Edit', ', ', '&#187;'); ?></small>
                        <p class="tags"><?php the_tags('Tags: ', ', ', ''); ?></p>
                        <!--
                        <?php trackback_rdf(); ?>
                        -->
                    </div>
                <?php endwhile; ?>
                <?php if (function_exists('wp_pagenavi')) : ?>
                <div class="navigation">
                    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                </div>
                <?php else : ?>
                <div class="navigation">
                    <div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
                    <div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
                    <div style="clear:both"></div>
                </div>
                <?php endif; ?>
                <?php else : ?>
                <h2 class="center">Not Found</h2>
                <?php include (TEMPLATEPATH . '/searchform.php'); ?>
                <?php endif; ?>
            </div>
    	</div>
		<?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>