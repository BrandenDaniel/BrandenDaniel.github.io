<?php
/**
* Template Name: Hompage Template
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header(); ?>


<main id="site-content" class="site-content--homepage" role="main">

	<?php get_template_part( 'template-parts/homepage-content', get_post_type() ); ?>

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->


<?php get_footer(); ?>
