<?php
/*
Template Name: Links
*/
?>
<?php get_header(); ?>
<div id="content">
    <div id="postwrap" class="search">
        <div id="linkpage">
            <ul><?php get_links_list(); ?></ul>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>