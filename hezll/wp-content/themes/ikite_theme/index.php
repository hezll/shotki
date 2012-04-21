<?php get_header(); ?>
<div id="content">
	<div id="postwrap">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="title">
				<h3><?php the_time('F jS, Y') ?></h3>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			</div>
			<small class="comment">
			<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
			<?php if (function_exists('akpc_the_popularity')) { ?>	, <?php akpc_the_popularity(); ?>
			<?php } ?>
			<?php edit_post_link('Edit', ', ', '&#187;'); ?>
			</small>
			<div class="entry">
				<?php the_content('Continue Reading &raquo;'); ?>
			</div>
			<p class="tags"><?php the_tags('Tags: ', ', ', ''); ?></p>
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
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>