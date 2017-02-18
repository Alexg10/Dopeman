<?php
/*
Template Name: Landing
*/
?>


<?php get_header(); ?>

<div class="landing_content">
	<video class="video_bg" autoplay loop poster="<?php echo get_template_directory_uri(); ?>/assets/images/background_landing.jpg" id="bgvid">
	  <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/video_bg.webm" type="video/webm">
	  <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/video_bg.mp4" type="video/mp4">
	</video>
	<div class="dopeman_description">
		<h1>dopeman</h1>
		<p class="description">
			Webzine pour les addicts au hip-hop <br>
			Articles, clips, sons, concerts, interviews, etc
		</p>
		<div class="share_part">
			<div class="btn_display">
				<a href="">Facebook</a>
				<a href="">Twitter</a>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>