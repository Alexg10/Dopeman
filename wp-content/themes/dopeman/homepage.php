<?php
/*
Template Name: Home page
*/
?>


<?php

	$args = array(
	    'post_type' => 'post',
	    'posts_per_page' => 3,
	    'order' => 'DESC',
	    'meta_query' => array(
            array(
                'key'     => 'shits_of_the_week',
                'value'   => '1',
                'compare' => '=',
				'w' => date('W'),
            )
        ),
	);

	$song_article = array(
	    'post_type' => 'post',
	    'category_name' => 'listen',
	    'posts_per_page' => 10,
	    'order' => 'DESC',
	);

	$read_article = array(
	    'post_type' => 'post',
	    'category_name' => 'read',
	    'posts_per_page' => 20,
	    'order' => 'DESC',
	);

	$video_article = array(
	    'post_type' => 'post',
	    'category_name' => 'see',
	    'posts_per_page' => 10,
	    'order' => 'DESC',
	);
?>



<?php get_header(); ?>

<div class="container  grey_line mobile">
	<div class="sub_nav">
		<div class="hot_shits">
				<h3 class="section_title">Hot $hits of the week</h3>			
		</div>
		<div class="week_display">
			<p>S4  •  Lundi 13 - dimanche 19 juin 2016</p>
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
<div class="container grey_line mobile">
	<div class="hot_shits_display">		


				<?php $post_objects = get_field('hot_shits'); ?>	
				<?php if( $post_objects ): ?>
			    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post); ?>
			        <?php 
			        	$image = get_field('cover');
				    	$img_hot_shit = $image['sizes']['big-hot-shit'];
				    	$img_hot_shit_little = $image['sizes']['hot-shit'];

				    	
				    	$cat = get_field('category');
						$categorie = get_cat_name($cat[0]);
			         ?>

				    <div class="single_shit <?php if (!$i++) echo "big";?>">	 
				    	<a href="<?php the_permalink(); ?>">
					    	<div class="category_article"><?php echo $categorie; ?></div>
					    	<div class="img_container">
					    		<img src="<?php echo $i==1 ? $img_hot_shit : $img_hot_shit_little ; ?>">
						    	
					    	</div>
					    	<h4 class="shit_title"><?php the_title(); ?></h4>
						</a> 
					</div>
			    <?php endforeach; ?>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>




	</div>
</div>

<div class="container layered_container grey_line"></div>

<div class="container grey_line">
<div class="grey_line"></div>

	<div class="article_display_cat listen">
		<h3 class="section_title">le bitume avec une plume</h3>

		<div class="category_container mobile_display">
			<div class="category_header listen">
				<h4 class="section_title active">Sons</h4>
			</div>
			<div class="category_header see">
				<h4 class="section_title">Vidéos</h4>
			</div>
			<div class="category_header read">
				<h4 class="section_title">Lecture</h4>
			</div>
		</div>

		<div class="category_container listen">
			<div class="category_header hidden-xs">
				<h4 class="section_title">Sons</h4>
			</div>
			<div class="display_articles">
				<div class="article_container_height" data-posHeight="0">
					    	

					<?php 
						$reads = new WP_Query($song_article);

						if($reads->have_posts()) : while ($reads->have_posts() ) : $reads->the_post();

							$link = get_permalink();
						  	$image = get_field('cover');
						    $img_hot_shit = $image['sizes']['big-hot-shit'];
					      	$cat = get_the_category(); 
					    	$cat = $cat[0]; 
						    ?>		
						    <div class="single_article article">
							    <div class="article_container">
					    	    	<a href="<?php echo $link ?>">

					    		    	<h4 class="article_title">
					    		    		<i class="icon-play"></i>
					    		    		<?php the_title(); ?>
					    		    			
					    		    	</h4>    		       
					    			  
					    			</a> 
							    </div>	
							</div>
						<?php endwhile;
						endif;
						wp_reset_postdata();
					?>
				</div>
			</div>
			<div class="scroll_btn">
				<div class="btn_prev scrollup">
					<div class="btn_container">
						<div class="icon-arrow-right"></div>				
					</div>
				</div>
				<div class="btn_next scrolldown">
					<div class="btn_container">
						<div class="icon-arrow-left"></div>					
					</div>
				</div>
			</div>
			<div class="category_bottom">
				<a href="<?php echo get_category_link(4); ?>">Aller à la page "écouter"<i class="icon-goto"></i></a>
			</div>
		</div>
		<div class="category_container see">
			<div class="category_header hidden-xs">
				<h4 class="section_title">Vidéos</h4>
			</div>
			<div class="display_articles">
				<div class="article_container_height" data-posHeight="0">

				<?php 
					$videos = new WP_Query($video_article);

					if($videos->have_posts()) : while ($videos->have_posts() ) : $videos->the_post();
						$link = get_permalink();
					  	$image = get_field('cover');

					    $img_hot_shit = $image['sizes']['big-hot-shit'];
						$date= get_the_date('d.m.y');
			    		$cat = get_field('category');
						$categorie = get_cat_name($cat[0]);
					    ?>		

					    <div class="single_article article">
					    	<div class="article_container">
			    		    	<a href="<?php echo $link ?>">
					    			<div class="category_article"><?php echo $categorie; ?></div>
			    			    	<img src="<?php echo $img_hot_shit ?>">

			    				    <h4 class="article_title"><?php the_title(); ?></h4>	
			    				    <div class="display_date"><?php echo $date; ?></div>					       

			    				</a> 

					    	</div>	
						</div>
					<?php endwhile;
					endif;
					wp_reset_postdata();
				?>
				</div>
			</div>
			<div class="scroll_btn">
				<div class="btn_prev">
					<div class="btn_container">
						<div class="icon-arrow-right"></div>				
					</div>
				</div>
				<div class="btn_next scrolldown">
					<div class="btn_container">
						<div class="icon-arrow-left"></div>					
					</div>
				</div>
			</div>
			<div class="category_bottom">
				<a href="<?php echo get_category_link(3); ?>">Aller à la page "Voir"<i class="icon-goto"></i></a>
			</div>

		</div>
		<div class="category_container read">
			<div class="category_header hidden-xs">
				<h4 class="section_title">Lecture</h4>
			</div>
			<div class="display_articles">
				<div class="article_container_height" data-posHeight="0">

				<?php 
					$songs = new WP_Query($read_article);
					if($songs->have_posts()) : while ($songs->have_posts() ) : $songs->the_post();
						$link = get_permalink();
					  	$image = get_field('cover');
					    $img_hot_shit = $image['sizes']['big-hot-shit'];
						$date= get_the_date('d.m.y');
			    		$cat = get_field('category');
						$categorie = get_cat_name($cat[0]);
						$credit = $image['ID']
					    ?>		
					    <div class="single_article article ">	 
		    		    	<div class="article_container">
		        		    	<a href="<?php echo $link ?>">
					    			<div class="category_article"><?php echo $categorie; ?></div>
		        			    	<img src="<?php echo $img_hot_shit ?>">
		        				    <h4 class="article_title"><?php the_title(); ?></h4>	
		        				    <div class="display_date"><?php echo $date; ?></div>					       
		        				</a> 

		    		    	</div>	
						</div>
					<?php endwhile;
					endif;
					wp_reset_postdata();
				?>
				</div>
			</div>
			<div class="scroll_btn">
				<div class="btn_prev">
					<div class="btn_container">
						<div class="icon-arrow-right"></div>				
					</div>
				</div>
				<div class="btn_next scrolldown">
					<div class="btn_container">
						<div class="icon-arrow-left"></div>					
					</div>
				</div>
			</div>

			<div class="category_bottom">
				<a href="<?php echo get_category_link(2); ?>">Aller à la page "Lire"<i class="icon-goto"></i></a>
			</div>
		</div>

	</div>								
</div>
<div class="container layered_container grey_line"></div>
<div class="grey_line"></div>
<div class="container question_playlist_container">
	<div class="playlist_cta">
		<?php 
			$cover_cta = get_field('cover_cta');
		?>
		<a href="<?php the_field('link_cta'); ?>">
			<img src="<?php echo $cover_cta['sizes']['large'];?>">
		</a>
	</div>
	<div class="question_ans_container">
		<div class="question_container">
			<p>
				<?php the_field('question'); ?>
			</p>
		</div>
		<div class="answer_container">
			<div class="container_name">
				<p>Réponse...</p>
			</div>
			<div class="answer">
			<p>
				<?php the_field('answer'); ?>
			</p>
			</div>
		</div>
	</div>
</div>
<div class="grey_line"></div>
<div class="container layered_container"></div>

<div class="container mixtape_container grey_line">
	<div class="mixtape_header">
		<h2><?php echo "album$/mixtape$ à venir" ?></h2>
		<div class="switch">
			<div class="btn_prev">
				<i class="icon-arrow-left"></i>
			</div>
			<div class="btn_next">
				<i class="icon-arrow-right"></i>
			</div>
		</div>
	</div>
	<div class="mixtape_slider">
		<?php 
		$loop = new WP_Query( array( 'post_type' => 'artist', 'posts_per_page' => 10 ) );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php $image = get_field('cover');
		?>
		<div class="mixtape">
			<div class="round_album"></div>
			<img src="<?php echo $image['sizes']['home_mixtape']; ?> ">
			<div class="mixtape_title"><?php the_title(); ?></div>
			<div class="mixtape_band"><?php the_field('album_artist') ?></div>
			<div class="mixtape_date"><?php the_field('date'); ?></div>
		</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata();?>		
	</div>
</div>
<div class="container layered_container grey_line"></div>
<!-- <div class="container event_container grey_line">
	<div class="event_header">
		<h2><?php echo "évènnement$ hip-hop" ?></h2>
		<div class="switch">
			<div class="btn_prev">
				<i class="icon-arrow-left"></i>
			</div>
			<div class="btn_next">
				<i class="icon-arrow-right"></i>
			</div>
		</div>
	</div>
	<div class="tab_event">
		<div class="tab_event_header hidden-xs">
			<div class="column_title artist"><span>Artiste</span></div>
			<div class="column_title date"><span>Date</span></div>
			<div class="column_title place"><span>Lieu</span></div>
			<div class="column_title price"><span>Prix</span></div>
		</div>
		<div class="tab_event_content">
			<?php 
			$event_loop = new WP_Query( array( 'post_type' => 'event', 'posts_per_page' => 10 ) );
			while ( $event_loop->have_posts() ) : $event_loop->the_post(); ?>
				<?php $event_cover = get_field('event_cover');
			?>
			<div class="event">
				<a href="<?php the_field('event_link'); ?>" target="_blank">
					<div class="event_tab artist_name">
						<img src="<?php echo $event_cover['sizes']['home_mixtape']; ?>">
						<span><?php the_field('event_artist'); ?></span>
					</div>
					<div class="event_tab event_date hidden-xs"><?php the_field('event_date'); ?></div>
					<div class="event_tab event_place hidden-xs "><?php the_field('event_place'); ?></div>
					<div class="event_tab event_price">€<?php the_field('event_price'); ?>
						<i class="icon-goto"></i>
					</div>				
				</a>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata();?>

		</div>
	</div>
	
</div> -->






<?php get_footer(); ?>

