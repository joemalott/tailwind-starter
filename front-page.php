<?php get_header(); ?>
 

<section class="main-section flex-grow"> 
<! –– Add Tailwind CSS Stuff Here ––>


<h1 class="text-3xl font-bold underline">
    This is the front Page!
</h1>

<p class="mb-4">
	Start coding some awesome sites.
</p>

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