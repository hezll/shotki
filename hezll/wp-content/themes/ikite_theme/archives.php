<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
    <div id="content">
        <div id="postwrap" class="search">
        	<div class="page">
				<?php if (function_exists('af_ela_super_archive')) : ?>
                <h2>Extended Live Archives</h2>
                <?php af_ela_super_archive(); ?>
                <?php else : ?>
                <div id="archives">
                    <h2><?php _e('Archives'); ?></h2>
                    <div id="arslink">
                        <?php wp_get_archives('type=monthly'); ?>
                    </div>
                    <div class="line">
                        <?php _e('Recent Articles'); ?>
                    </div>
                    <ul class="ul">
                        <?php wp_get_archives('type=postbypost&limit=12'); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php edit_post_link(__('Edit this page'), '<p class="clear">', '</p>'); ?>
            </div>
		</div>
		<?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>