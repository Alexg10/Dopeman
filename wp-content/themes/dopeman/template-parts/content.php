<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dopeman
 */

?>

<?php
	$cat = get_the_category(); 
	$cat = $cat[0]; 
?> 

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container">
		<div class="article_top">
			<div class="back_btn_container">
				<div class="back_btn">
					<i class="icon-arrow-left"></i><a href="">Retour</a>
				</div>
			</div>
			<div class="page_title_container">
				<div class="page_title"><?php echo $cat->cat_name; ?> : <div class="data_artist"><?php the_title(); ?></div></div>					
			</div>
			<div class="share_article">
				Partager le clip :
				<ul>
					<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>" target="_blank"><i class="icon-facebook"></i></a></li>
					<li><a href="https://twitter.com/home?status=<?php echo get_permalink() ?>" target="_blank"><i class="icon-twitter"></i></a></li>
					<li><a href="mailto:?&subject=Dopeman - <?php the_title(); ?>&body=Check%20cet%20article%20%3A%20<?php echo get_permalink() ?>"><i class="icon-mail"></i></a></li>
					<li><a href="" data-clipboard-text="<?php echo get_permalink() ?>" class="copyLink"><i class="icon-link"></i></a></li>
				</ul>
				<div class="link_alert">
					Copié !
				</div>
			</div>
			<div class="date_infos">
				<?php the_date('d.m.y') ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="single_top">
			<div class="single_info_container">
				<div class="single_title"><?php the_title(); ?></div>
			</div>
			<div class="single_player">
				<div class="player_background">
				<?php 
					$playlist_background = get_field('article_cover'); 
					?>
					<img src="<?php echo $playlist_background['sizes']['player_background'];?>">
				</div>
			</div>
		</div>
	</div>
	<div class="container single_main_content grey_line">

	<?php

	if( have_rows('content_bloc') ):
	    while ( have_rows('content_bloc') ) : the_row(); ?>
	        <div class="bloc_title"><?php the_sub_field('bloc_title'); ?></div>
	        <?php if( have_rows('sub_content_block') ): ?>
		        	<?php	        								while( have_rows('sub_content_block') ): the_row(); ?>
		        		<div class="content">
			        		<div class="sub_content_description">        			
								<?php the_sub_field('sub_content_description'); ?>
			        		</div>
			        		<div class="medias">
								<?php the_sub_field('medias'); ?>
			        			
			        		</div>
	        			</div>

		        	<?php endwhile; ?>	        		
			<?php 
				endif;
			 ?>


	    <?php endwhile;

	else :

	    // no rows found
	endif;
	?>
	</div>
	<div class="container layered_container grey_line"></div>
	<div class="grey_line"></div>

	<div class="related_post">
		<div class="container grey_line">
			<div class="related_title">
				<div class="bloc_title">
					articles qui pourraient vous intéresser
				</div>


				<!-- BTN A FAIRE MARCHER -->
				<div class="switch">
					<div class="btn_prev">
						<i class="icon-arrow-left"></i>
					</div>
					<div class="btn_next">
						<i class="icon-arrow-right"></i>
					</div>
				</div>
			</div>
			<div class="related_content">
				<?php
				$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 20, 'post__not_in' => array($post->ID) ) );
				if( $related ) foreach( $related as $post ) {
				setup_postdata($post); ?>
					<?php 

					$link = get_permalink();
					$date= get_the_date('d.m.y');					
					$image = get_field('cover');
					$img_read_top = $image['sizes']['category_read_top']; 
					$cat_related = get_the_category(); 

					if($image == null){
						 $img_read_top = get_template_directory_uri().'/assets/img/default.jpg';
					}
					?>
					<div class="article">
					  	<div class="article_container">
			    		    <a href="<?php echo $link ?>">
						  		<div class="category_article"><?php echo $cat_related[0]->name; ?></div>
					    	    <img src="<?php echo $img_read_top ?>">
					    	    <h4 class="article_title"><?php the_title();  ?>	    	
					    	    </h4>
					    	    <div class="display_date">
					    	    	<?php echo $date;  ?>
					    	    </div>
				    	    </a>
					  	</div>
					  </div> 
				<?php }
				wp_reset_postdata(); ?>
			</div>
		</div>
	</div>

	<div class="container layered_container grey_line"></div>
	<div class="grey_line"></div>




	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
