<?php

/*
 * Template Name: Page Template

 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<div class="content-area" id="primaru">
    <main id="main" class="site-main" role="main">
    <div class="grid-container">
  <div class="grid-x grid-margin-x">
    <div class="cell lage-12 text-center"><h1 id="site-universal-header">The best Toronto Maple Leafs fan page</h1></div>
    <div  class="cell lage-12 text-center">
   <?php while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page', 'page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop. 

?>
  <div class="cell lage-12 text-center"><h2>Our recent posts</h2></div>
  <?php
$args = array(  
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 3, 
);

$test_query = new WP_Query($args);

if($test_query->have_posts()) {
    while ($test_query->have_posts()) {
      $test_query->the_post();
      ?>
      <h3 id="post-content"><a href="<?php the_permalink(); ?>"><?php the_title(); ?>  </a></h3>

     <div id="post-content"> <?php the_post_thumbnail(); ?> </div>
      
      
      <?php
      ?>

      <div id="post-content-text"> <?php the_excerpt(); ?> </div> <?php
    }
}
    ?>
  </div>
  </div>
</div>
    </main>
</div>


<?php
get_footer()

?>