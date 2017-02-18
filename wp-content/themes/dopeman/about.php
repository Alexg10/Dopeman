<?php
/*
Template Name: About
*/
?>


<?php get_header(); 

	$image = get_field('cover');
	$about_cover = $image['sizes']['clip_cover'];

?>

<div class="container">
	<div class="about_top">
		<h2 class="page_title"><?php the_title(); ?></h2>
	</div>
	<div class="about_block grey_line" style="background-image: url('<?php echo $about_cover ?>')" >
		<div class="about_description"><?php echo get_field('description') ?></div>
	</div>	
</div>
<div class="container layered_container grey_line"></div>

<div class="container">
	<?php get_footer(); ?>	
</div>


