<?php get_header(); ?>
<div id="content">
  <div id="postwrap">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
      <div class="title">
        <h3><?php the_time('F jS, Y') ?></h3>
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
      </div>
      <small>Category: <?php the_category(', ') ?>, Author: <?php the_author() ?><?php if (function_exists('akpc_the_popularity')) { ?>, <?php akpc_the_popularity(); ?><?php } ?> <?php edit_post_link('Edit', ', ', '&#187;'); ?></small>
      <div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        <p><?php the_tags('Tags: ', ', ', ''); ?><br/>
        <?php _e('本文网址'); ?>：<a href="<?php echo get_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php echo get_permalink() ?></a></p>
      </div>
    </div>
    <?php comments_template('', true); ?>
    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>