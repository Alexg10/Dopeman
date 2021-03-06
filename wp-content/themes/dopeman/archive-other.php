<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dopeman
 */

	get_header(); 

?>


	<div id="read" class="content-area read_category">
		<div class="container">
			<div class="read_top grey_line">
				<div class="page_title_container">
					<div class="page_title"><?php echo get_the_category()[1]->name; ?></div>						
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
		<main id="read_category_display" class="read_category category" role="main">
		<?php
		if ( have_posts() ) : ?>

		<div class="container">
			<div class="sidebar_category">
				<div class="sidebar_category_filter title">
					Filtres
				</div>	

				<?php 
				    echo '<ul class="category_list">';
				    $post_child_cat = array();
				    foreach((get_the_category()) as $cat) {
				        $args = array( 'child_of' => $cat->cat_ID );
				        $categories = get_categories( $args );
				        if( $categories ) foreach( $categories as $category ) {
				            echo '<li class="cat-item cat-item-'.$category->term_id.'">'.
				            '<a title="'.$category->description.'" href="';
				            echo bloginfo('url');
				            echo '/category/'.$cat->slug.'/'.$category->slug.'">'.
				            $category->name.'</a></li>'; 
				        }
				    }
				   echo '</ul>';
				?>
				<div class="sidebar_category_article title">
					Articles
				</div>
				<div class="sidebar_category_article article">

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
				$idObj = get_category_by_slug('numbers'); 
				$id = $idObj->term_id;
				$i = 1;

				while ( have_posts() ) : the_post();
					$i++;

					$link = get_permalink();
					$date= get_the_date('d.m.y');					
					$image = get_field('cover');
					$img_read_top = $image['sizes']['category_read_top'];
					$img_read_four = $image['sizes']['category_read_four'];
					$img_read_block = $image['sizes']['category_read_right'];
					$img_read_full = $image['sizes']['category_read_full'];

					$cat = get_field('category');
					$categorie = get_cat_name($cat[0]);
					?>

					<div class="article article_three">
					  	<div class="article_container">
			    		    <a href="<?php echo $link ?>">
						  		<div class="category_article"><?php echo $categorie; ?></div>
					    	    <img src="<?php echo $img_read_top ?>">
					    	    <h4 class="article_title"><?php the_title();  ?>	    	
					    	    </h4>
					    	    <div class="display_date">
					    	    	<?php echo $date;  ?>
					    	    </div>
				    	    </a>
					  	</div>
					</div>			
				<?php
				endwhile; ?>

				<?php get_posts( $id) ?>
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
