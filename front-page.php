<?php get_header(); ?>
 

<section class="main-section flex-grow"> 
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
</section>

<?php get_footer(); ?>