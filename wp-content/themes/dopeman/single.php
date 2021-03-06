<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dopeman
 */

get_header(); ?>	


		<div id="primary" class="content-area">
			<main id="main" class="site-main single-post" role="main">

			<?php
			while ( have_posts() ) : the_post();
				if(in_category( '10' )) {
					get_template_part( 'template-parts/content-dechiffre' );
				}else{
					get_template_part( 'template-parts/content', get_post_format() );
				}
			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary -->
	
<?php
get_footer();
