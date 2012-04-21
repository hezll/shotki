<?php
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li></ul>',
		'before_title' => '<li><h3 class="widgettitle">',
		'after_title' => '</h3></li>',
));
// Recent Comments.
function get_wpkitcomments($no_comments = 5, $before = '<li> ', $after = '</li>', $show_pass_post = false) {
	global $wpdb, $tablecomments, $tableposts;
	$request = "SELECT ID, comment_ID, comment_content, comment_author FROM $tableposts, $tablecomments WHERE $tableposts.ID=$tablecomments.comment_post_ID AND (post_status = 'publish' OR post_status = 'static')";
if(!$show_pass_post) { $request .= "AND post_password ='' "; }
    $request .= "AND comment_approved = '1' ORDER BY $tablecomments.comment_date DESC LIMIT 
$no_comments";
    $comments = $wpdb->get_results($request);
    $output = '';
    foreach ($comments as $comment) {
		 $comment_author = stripslashes($comment->comment_author);
		 $comment_content = strip_tags($comment->comment_content);
		 $comment_content = stripslashes($comment_content);
		 $comment_excerpt =substr($comment_content,0,50);
		 $comment_excerpt = wptutf8trim($comment_excerpt);
		 $permalink = get_permalink($comment->ID)."#comment-".$comment->comment_ID;
		 $output .= $before . '<a href="' . $permalink . '" title="View the entire comment by ' . $comment_author . '">' . $comment_author . '</a>: ' . $comment_excerpt . '...' . $after;
		 }
		 echo $output;
}
function wptutf8trim($str) {
	$len = strlen($str);
	for ($i=strlen($str)-1; $i>=0; $i-=1){
		$hex .= ' '.ord($str[$i]);
		$ch = ord($str[$i]);
        if (($ch & 128)==0) return(substr($str,0,$i));
		if (($ch & 192)==192) return(substr($str,0,$i));
	}
	return($str.$hex);
}
// Custom Style. ThemesOptionsPage.
define("themename", "iKite");
add_action('admin_menu', 'Options_add_theme_page');
function Options_add_theme_page(){add_theme_page(__(themename.' Options'), __(themename.' Options'), 'edit_themes', basename(__FILE__), 'Options_theme_page');}
function Options_theme_page_head(){ }
function Options_theme_page() {
// Store options if set in post. ?>
<div class="wrap" style="padding:10px;">
	<h2><?php echo themename; ?> Options</h2>
  <div>
  	<p>Thank you for the use of the theme <?php echo themename; ?>.</p>
  	<p>Designed by <a href="http://xuhel.cn">Xu.hel</a>. The theme of the use of <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US">Creative Commons</a>.</p>
    <p>谢谢您使用 <?php echo themename; ?> 主题。</p>
    <p><?php echo themename; ?> 主题使用 <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.zh" title="署名-非商业性使用-相同方式共享 3.0 通用">Creative Commons</a> 协议发布。</p>
  </div>
  <br />
  <hr size="1" />
  <h2>Donation</h2>
  <div>
  	<p>If you find my work useful and you want to encourage the development of more free resources, you can do it by donating...</p>
  	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="4839415">
      <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.paypal.com/zh_XC/i/scr/pixel.gif" width="1" height="1">
    </form>
  </div>
</div>
<?php }
//定义 Comments 列表.
function custom_comments($comment, $args, $depth) {
$GLOBALS['comment'] = $comment;
global $commentcount;
if(!$commentcount) $commentcount = 0;
$commentcount ++;
global $commentalt;
($commentalt == "alt")?$commentalt="":$commentalt="alt"; ?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
  <div class="list">
  	<!--strong><?php echo $commentcount ?>.</strong-->
    <?php if ($comment->comment_author_email == get_the_author_email()) { ?>
    <table class="inc" border="0" cellspacing="0" cellpadding="0">
      <tr><td align="right" valign="bottom"><table border="0" cellpadding="0" cellspacing="0">
          <tr><td class="topleft"></td><td class="top"></td><td class="topright"></td></tr>
          <tr><td class="left"></td>
            <td align="left" class="conmts"><?php comment_text( ); ?></td>
            <td class="right"></td></tr>
          <tr><td class="bottomleft"></td><td class="bottom"></td><td class="bottomright"></td></tr>
        </table></td>
        <td class="icontd" align="right" valign="bottom"><?php if (function_exists('get_avatar')) { ?><div class="gravatar2"><?php echo get_avatar( $comment, 32 ); ?></div><?php } ?></td></tr>
    </table>
    <div class="comment_textr">
      <cite><?php comment_author_link() ?></cite> at <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date() ?> <?php comment_time() ?></a><?php if ($comment->comment_approved == '0') : ?><em>Your comment is awaiting moderation.</em><?php endif; ?>
      <small class="commentmetadata"><?php edit_comment_link('Edit','&nbsp;&nbsp;',' | '); ?> <?php comment_reply_link(array('depth' => $depth, 'max_depth'=> $args['max_depth'], 'reply_text' => "Reply"));?></small>
    </div>
		<?php } else{ ?>
    <table class="out" border="0" cellspacing="0" cellpadding="0">
      <tr><td class="icontd" align="left" valign="bottom"><?php if (function_exists('get_avatar')) { ?><div class="gravatar"><?php echo get_avatar( $comment, 32 ); ?></div><?php } ?></td>
        <td align="left" valign="bottom"><table border="0" cellspacing="0" cellpadding="0">
          <tr><td class="topleft"></td><td class="top"></td><td class="topright"></td></tr>
          <tr><td class="left"></td>
            <td class="conmts"><?php comment_text( ); ?></td>
          	<td class="right"></td></tr>
          <tr><td class="bottomleft"></td><td class="bottom"></td><td class="bottomright"></td></tr>
        </table></td></tr>
    </table>
    <div class="comment_text">
      <cite><?php comment_author_link() ?></cite> at <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date() ?> <?php comment_time() ?></a><?php if ($comment->comment_approved == '0') : ?><em>Your comment is awaiting moderation.</em><?php endif; ?>
      <small class="commentmetadata"><?php edit_comment_link('Edit','&nbsp;&nbsp;',' | '); ?> <?php comment_reply_link(array('depth' => $depth, 'max_depth'=> $args['max_depth'], 'reply_text' => "Reply"));?></small>
    </div>
    <?php }?>
  </div>
</li>
<?php }
//定义 Trackbacks 列表.
function custom_pings($comment, $args, $depth) { 
$GLOBALS['comment'] = $comment; ?>
<li id="comment-<?php comment_ID( ); ?>" class="trackback">
<div class="list">
	<cite><?php comment_author_link(); ?></cite>
  <small><?php if ($comment->comment_approved == '0') : ?>
  <em>Your comment is awaiting moderation.</em>
  <?php endif; ?>
  <?php comment_date() ?>)
  </small>
  <?php comment_text() ?>
</div>
</li>
<?php }
//WordPress Hack
remove_action('wp_head','wp_generator');?>