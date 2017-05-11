<?php
/*
Single Post Template: [Descriptive Template Name]
Description: This part is optional, but helpful for describing the Post Template

*/

?>

<?php get_header(); ?>

	<div id="primary" class="content-area video_post">
		<main id="main" class="site-main grey_line" role="main">
		<?php
		while ( have_posts() ) : the_post(); ?>


		<?php
			$cat = get_the_category(); 
			$cat = $cat[0]; 
?> 

		<div class="container">
			<div class="article_top">
				<div class="back_btn_container">
					<div class="back_btn">
						<i class="icon-arrow-left"></i><a href="">Retour</a>
					</div>
				</div>
				<div class="page_title_container">
					<div class="page_title">
						<span><?php echo $cat->cat_name; ?> : </span>
						<div class="data_artist"><?php the_title(); ?></div></div>					
				</div>
				<div class="share_article">
					<span class="share">Partager :</span>
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

			<div class="clip_container">
			<?php 
				$image = get_field('cover');
				$clip_cover = $image['sizes']['clip_cover'];
			?>
			<iframe class="embed_youtube" width="1280" height="720" src="<?php echo get_field('video_link') ?>" frameborder="0" allowfullscreen></iframe>
				<img class="clip_cover" src="<?php echo $clip_cover ?>">
				<div class="play_btn">
					<i class="icon-play"></i>
				</div>
					
				<?php echo the_media_credit($image['ID']); ?>
				
			</div>
			<div class="video_top">
				<div class="video_info_container">
					<div class="video_title"><?php the_title(); ?></div>
				</div>
				<div class="video_content">
					<?php the_content() ?>					
				</div>
			</div>
		</div>

		<?php endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		<div class="container layered_container grey_line"></div>

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

		<div class="prev_listen_article"></div>

	</div><!-- #primary -->

<?php
get_footer();
