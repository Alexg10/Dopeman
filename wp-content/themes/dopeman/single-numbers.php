<?php
/*
Single Post Template: [Descriptive Template Name]
Description: This part is optional, but helpful for describing the Post Template

*/

?>

<?php get_header(); ?>

	<div id="primary" class="content-area data_post">
		<main id="main" class="site-main " role="main">
		<?php
		while ( have_posts() ) : the_post(); ?>


		<?php
			$cat = get_the_category(); 
			$cat = $cat[0]; 
?> 

		<div class="container">
			<div class="data_top">
				<div class="back_btn_container">
					<div class="back_btn" onclick="window.history.back()">
						<i class="icon-arrow-left"></i>Retour
					</div>
				</div>
				<div class="page_title_container">
					<div class="page_title">
						<span><?php echo $cat->cat_name; ?> :</span> 
						<div class="data_artist"><?php the_title(); ?></div></div>						
				</div>
			</div>
		
		</div>

		<div class="container">
			<div class="data_main">
				<div class="data_img_container">
					<?php 
					$data_images = get_field('gallerie');

					foreach( $data_images as $image ): ?>
						<div class="credit_container">

						  <img src="<?php echo $image['sizes']['data-img']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php echo the_media_credit($image['ID']); ?>
						</div>

					<?php endforeach; ?>
				</div>
				<div class="data_numbers_container">
					<div class="data_artist"><?php the_title(); ?></div>
					<?php

					if( have_rows('data') ):
					    while ( have_rows('data') ) : the_row(); ?>
						<div class="data_content">
							<div class="data_number">
								<?php the_sub_field('numbers'); ?>
							</div>
							<div class="data_description">
								<?php the_sub_field('description'); ?>
							</div>
						</div>
					    <?php endwhile;
					endif;

					?>
				</div>
			</div>

		</div>




		<?php endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	<div class="container layered_container grey_line"></div>


<?php
get_footer();
