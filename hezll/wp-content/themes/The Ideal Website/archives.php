<?php
/*
  	THE SOFTWARE IS PROVIDED "AS-IS". NO WARRANTIES OF
   	ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO,
   	IMPLIED WARRANTIES, OF MERCHANTABILITY OR FITNESS FOR ANY PURPOSE
   	WITH RESPECT TO THE SOFTWARE ARE MADE AS TO IT OR ANY MEDIUM IT
   	MAY BE ON. AUTHOR DOES NOT WARRANT THAT THE OPERATION OF THE
   	SOFTWARE WILL BE ERROR FREE OR MEET ANY REQUIREMENTS. THE
   	WARRANTY SET FORTH ABOVE IS IN LIEU OF ALL OTHER WARRANTIES
   	WHETHER ORAL OR WRITTEN. NO ONE BUT AUTHOR IS AUTHORISED TO MAKE
   	MODIFICATIONS OR ADDITIONS TO THIS WARRANTY. 

	BY USING THIS SOFTWARE YOU AGREE TO THE LICENCE AGREEMENT LOCATED IN LICENCE.TXT.
	IF YOU DID NOT RECEIVE A COPY PLEASE EMAIL OLIVER@INFORMATIONARCHITECTS.JP.
	
	COPYRIGHT 2007 INFORMATION ARCHITECTS K.K, JAPAN. 
	
*/
?>

<?php

/*

Template Name: Archives

*/

?>



<?php get_header(); ?>

			

<?php get_sidebar(); ?>	



<? the_post(); ?>

<h1><?php the_title() ?></h1>

<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

<ul class="arrows"><?php get_archives( 'postbypost', '45', 'custom', '<li>', '</li>'); ?></ul>   



<p><?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?></p>



<?php get_footer(); ?>