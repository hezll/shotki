<div class="comments_warp">
<?php // Do not delete these lines
if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');
if (post_password_required()) { ?>
	<h3 id="respond"><?php _e('This post is password protected. Enter the password to view comments.'); ?></h3>
<?php return; } ?>
<!-- You can start editing here. -->
<?php if (have_comments()): ?>
	<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>
  <p class="comments">&#187; You can <a href="#respond">leave a response</a> or <a href="<?php trackback_url(true); ?>" rel="trackback">Trackback</a> .</p>
	<?php if ( ! empty($comments_by_type['comment']) ) : ?>
  <ul class="commentlist">
		<?php wp_list_comments(array ('type' => 'comment','callback' => 'custom_comments')); ?>
  </ul>
  <?php endif; ?>
  <div class="navigation">
		<?php paginate_comments_links(); ?>
	</div>
  <?php if ( ! empty($comments_by_type['pings']) ) : ?>
  <p class="comments">&#187; Trackbacks/Pingbacks</p>
  <ul class="pingbacklist">
  	<?php wp_list_comments(array ('type' => 'pings','callback' => 'custom_pings')); ?>
  </ul>
	<?php endif; ?>
 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
	 <?php else : // comments are closed ?>
		<h3 id="respond"><?php _e('Comments are closed.'); ?></h3>
	<?php endif; ?>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
<div id="respond">
<h3 id="respond"><?php comment_form_title( __('Leave a Reply'), __('Leave a Reply for %s') ); ?></h3>
<div class="cancel-reply"><?php cancel_comment_reply_link() ?></div>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), get_option('siteurl') . '/wp-login.php?redirect_to=' . urlencode(get_permalink())); ?></p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="reply">
<?php if ( $user_ID ) : ?>
<p><?php printf(__('Logged in as <a href="%1$s">%2$s</a>.'), get_option('siteurl') . '/wp-admin/profile.php', $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account'); ?>"><?php _e('Log out &raquo;'); ?></a></p>
<?php else : ?>
<p><input class="text" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author"><small><?php _e('Name'); ?> <?php if ($req) _e("(required)"); ?></small></label></p>
<p><input class="text" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email"><small><?php _e('Mail (will not be published)'); ?> <?php if ($req) _e("(required)"); ?></small></label></p>
<p><input class="text" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small><?php _e('Website'); ?></small></label></p>
<?php endif; ?>
<!--<p><small><?php printf(__('<strong>XHTML:</strong> You can use these tags: <code>%s</code>'), allowed_tags()); ?></small></p>-->
<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
<p>
<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" class="comm_submit" /><?php comment_id_fields(); ?></p>
<?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; // If registration required and not logged in ?>
</div>
<?php endif; // if you delete this the sky will fall on your head ?>
</div>