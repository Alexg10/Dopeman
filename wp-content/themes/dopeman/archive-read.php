<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dopeman
 */

get_header(); ?>

	<div id="read" class="content-area read_category">
	<div class="container">
		<div class="read_top grey_line">
			<div class="page_title_container">
				<div class="page_title">Un peu de lecture ?</div>						
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
				$args = array('parent' => 2);
				$categories = get_categories( $args );?>
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
					<?php query_posts('cat=2&posts_per_page=8'); ?>
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

			<div class="category_container">

				<?php
				/* Start the Loop */
				$i = 1;
				query_posts('cat=2&posts_per_page=12'); 

				while ( have_posts() ) : the_post();

					$link = get_permalink();
					$date= get_the_date('d.m.y');					
					$image = get_field('cover');
					$img_read_top = $image['sizes']['category_read_top'];
					$img_read_four = $image['sizes']['category_read_four'];
					$img_read_block = $image['sizes']['category_read_full'];

					$img_read_full = $image['sizes']['category_read_full'];
					
					$cat = get_field('category');
					$categorie = get_cat_name($cat[0]);
					$credit = $image['ID']

					?>

					<?php if($i <= 2): ?>

						<div class="article article_two">
						  	<div class="article_container credit_container">
				    		    <a href="<?php echo $link ?>">

							  		<div class="category_article"><?php echo $categorie; ?></div>
						    	    <img src="<?php echo $img_read_top ?>">
						    	    <h4 class="article_title slideTxt">
						    	    <span><?php the_title();  ?>	</span>    	
						    	    </h4>
						    	    <div class="display_date">
						    	    	<?php echo $date;  ?>
						    	    </div>
					    	    </a>
								<?php echo the_media_credit($credit); ?>
						  	</div>
						  </div>
						  <?php if ($i==2): ?>
						  	<div class="clearfix"></div>
						  <?php endif ?>

					<?php elseif($i >= 3 && $i <=6): ?>

							<div class="article article_four">
							  	<div class="article_container credit_container">
					    		    <a href="<?php echo $link ?>">

								  		<div class="category_article"><?php echo $categorie; ?></div>
							    	    <img src="<?php echo $img_read_four; ?>">
							    	    <h4 class="article_title slideTxt">
							    	    <span><?php the_title();  ?></span>	    	
							    	    </h4>
							    	    <div class="display_date">
							    	    	<?php echo $date;  ?>
							    	    </div>
						    	    </a>
									<?php echo the_media_credit($credit); ?>
							  	</div>
							  </div>

							  <?php if ($i==6): ?>
							  	<div class="clearfix"></div>
							  <?php endif ?>

					<?php elseif($i == 7): ?>

						<div class="article article_full_right">
						  	<div class="article_container credit_container">
				    		    <a href="<?php echo $link ?>">
							  		<div class="category_article"><?php echo $categorie; ?></div>
							  		<span class="img_container" style="background-image: url('<?php echo $img_read_block; ?>')">
						    	    	<img src="<?php  ?>">
							  		</span>
						    	    <div class="content_block">
						    	    	<h4 class="article_title"><?php the_title();  ?>	    	
						    	    	</h4>
						    	    	<div class="display_date">
						    	    		<?php echo $date;  ?>
						    	    	</div>
						    	    </div>
					    	    </a>
								<?php echo the_media_credit($credit); ?>
						  	</div>
						</div>

					<?php elseif($i >= 8 && $i <=11): ?>

						<div class="article article_four_text">
						  	<div class="article_container credit_container">
				    		    <a href="<?php echo $link ?>">

							  		<div class="category_article"><?php echo $categorie; ?></div>
						    	    <img src="<?php echo $img_read_top; ?>">
						    	    <div class="content_block">
						    	    	<h4 class="article_title"><?php the_title();  ?>	    	
						    	    	</h4>
						    	    	<div class="display_date">
						    	    		<?php echo $date;  ?>
						    	    	</div>
						    	    </div>
					    	    </a>
								<?php echo the_media_credit($credit); ?>
						  	</div>
						  </div>

						  <?php if ($i==11): ?>
						  	<div class="clearfix"></div>
						  <?php endif ?>

					<?php elseif($i == 12): ?>

						<div class="article article_full">
						  	<div class="article_container credit_container">
				    		    <a href="<?php echo $link ?>">
							  		<div class="category_article"><?php echo $categorie; ?></div>
						    	    <img src="<?php echo $img_read_full; ?>">
						    	    <h4 class="article_title"><?php the_title();  ?>	    	
						    	    </h4>
						    	    <div class="display_date">
						    	    	<?php echo $date;  ?>
						    	    </div>
					    	    </a>
								<?php echo the_media_credit($credit); ?>
						  	</div>
						  </div>
						<?php if ($i==12): ?>
							<div class="clearfix"></div>
						<?php endif ?>
					<? endif;
					$i++; 
					?>
				<?php endwhile; ?>				
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
