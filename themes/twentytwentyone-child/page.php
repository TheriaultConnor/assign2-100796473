<?php

/*
 * Template Name: Front Page Template

 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<div class="content-area" id="primaru">
    <main id="main" class="site-main" role="main">
    <div class="grid-container">
  <div class="grid-x grid-margin-x">
    <div class="cell lage-12 text-center"><h1>The best Toronto Maple Leafs fan page</h1></div>
    <div  class="cell lage-12 text-center">
   <?php while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop. 
    ?>
  </div>
  </div>
</div>
    </main>
</div>


<?php
get_footer()

?>