<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dopeman
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<?php if(is_category( 'read' )) : ?>
		    	<?php get_template_part( 'archive-read', 'read' ); ?>
    		<?php elseif(is_category( 'see' )) : ?>		    	 	
    	    	<?php get_template_part( 'archive-see', 'see' ); ?>
	    	<?php elseif(is_category( 'listen' )) : ?>	     	 	
	        	<?php get_template_part( 'archive-listen', 'listen' ); ?>






			<?php elseif(is_category( 'news' )) : ?>
		    	<?php get_template_part( 'archive-news', 'read' ); ?>
			
			
				<?php

				else :

    	    	 get_template_part( 'archive-other', 'see' ); 
					

				endif; ?>

			<?php endif; ?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
