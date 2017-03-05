<?php
/*
Template Name: Contact
*/
?>


<?php get_header(); ?>
	<div id="read" class="content-area read_category">
		<div class="container ">
			<div class="read_top grey_line">
				<div class="page_title_container">
					<div class="page_title">Contact</div>						
				</div>
			</div>	
		</div>
	</div>

	<div class="container grey_line">
		<p class="form_message"><?php echo the_field('contact_message', 'option'); ?></p>
		<?php echo do_shortcode( '[contact-form-7 id="248" title="Contact form 1"]' ); ?>
	</div>


<?php get_footer(); ?>
