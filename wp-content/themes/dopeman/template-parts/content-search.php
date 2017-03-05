<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dopeman
 */

	$link = get_permalink();
	$date= get_the_date('d.m.y');					
	$image = get_field('cover');
	$img_read_top = $image['sizes']['category_read_top'];								
  	$cat = get_the_category(); 
	$cat = $cat[0]; 				
?>

<div class="article article_three">
  	<div class="article_container">
	    <a href="<?php echo $link ?>">
	  		<div class="category_article"><?php echo $cat->cat_name; ?></div>
    	    <img src="<?php echo $img_read_top ?>">
    	    <h4 class="article_title"><?php the_title();  ?>	    	
    	    </h4>
    	    <div class="display_date">
    	    	<?php echo $date;  ?>
    	    </div>
	    </a>
  	</div>
</div>
