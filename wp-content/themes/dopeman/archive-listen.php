<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dopeman
 */




get_header(); ?>


	<div id="read" class="content-area listen_category">
	<div class="container">
		<div class="listen_top grey_line">
			<div class="page_title_container">
				<div class="page_title">Sales Sonorités</div>	
			</div>
			<div class="switch">
				<div class="btn_prev">
					<i class="icon-arrow-left"></i>
				</div>
				<div class="btn_next">
					<i class="icon-arrow-right"></i>
				</div>
			</div>
		</div>	
	</div>
	<main id="read_category_display" class="listen_category category" role="main">
	<?php
	if ( have_posts() ) : ?>
	<div class="container">
		<div class="sidebar_category">
			<div class="sidebar_category_filter title">
				Filtres
				<i class="icon-arrow-right"></i>
			</div>	
			<?php
				$categories = get_categories( 'child_of=4&hide_empty=0');
			?>
			<ul class="category_list">
				<?php 
				foreach($categories as $category) { 
				    echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li>';  
					}
				?>					
			</ul>
			<div class="sidebar_category_article title">
				Articles
			</div>
			<div class="sidebar_category_article article">

				<?php query_posts('cat=4&posts_per_page=8'); ?>
				<?php
				while ( have_posts() ) : the_post();

				$link = get_permalink();
				$date= get_the_date('d.m.y');?>
					<div class="link">
						<a href="<?php echo $link; ?>">
						<?php the_title(); ?>
						</a>
					</div>
				
					  <?php
				endwhile; 
				wp_reset_postdata();?>
			</div>
		</div>

		<div class="category_container">
			<?php
			/* Start the Loop */
			$i = 1;

			$temp = $wp_query; 
			$wp_query = null; 
			$wp_query = new WP_Query(); 
			$wp_query->query('showposts=18&cat=4'.'&paged='.$paged); 
			
			while ($wp_query->have_posts()) : $wp_query->the_post(); 

				$i++;
				$link = get_permalink();
				$date= get_the_date('d.m.y');					
				$artist_name = get_field('artist_name');
				$title = get_field('title');
				?>
				<div class="article">
				  	<div class="article_container">
		    		    <a href="<?php echo $link ?>">
		    		    	<span class="icon-container">
		    		    		<i class="icon-play"></i>
		    		    	</span>
		    		    	<div class="title-wrapper">
		    		    		<ul class="title-list">
		    		    			<li>
		    		    				<h4 class="article_artist">
		    		    					<?php echo $artist_name;  ?>
		    		    				</h4> 
		    		    					<h5 class="article_title">
		    		    					<?php echo $title;  ?>
		    		    				</h5>
		    		    			</li>
		    		    		
		    		    		</ul>
		    		    	</div>
		    		    	<div class="date_container">
					    	    <div class="display_date">
					    	    	<?php echo $date;  ?>
					    	    </div>
		    		    	</div>
			    	    </a>
				  	</div>
				</div>
			<?php
			endwhile; ?>
		</div>
	</div>
	<div class="grey_line"></div>
	<div class="pagination">
		<div class="container pagination_container">
			<?php the_posts_pagination( array(
			    'mid_size' => 2,
		
			    'prev_text' => __( '<i class="icon-arrow-left"></i>Précedente', 'textdomain' ),
		
			    'next_text' => __( 'Suivante<i class="icon-arrow-right"></i>', 'textdomain' ),
			) ); ?>
		</div>
	</div>
	<div class="grey_line"></div>
	<div class="container layered_container grey_line"></div>

	<div class="container grey_line">

	<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
