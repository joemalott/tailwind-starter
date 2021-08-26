<?php get_header(); ?>
 
<! –– Add Tailwind CSS Stuff Here ––>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
        the_content();
	} // end while
} // end if
?>




<! –– Add Tailwind CSS Stuff Here ––>


<?php get_footer(); ?>