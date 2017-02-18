<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dopeman
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>

			<div class="footer_sub_link">
				<?php if( have_rows('footer_link', 'option') ): ?>

				    <ul>

				    <?php while( have_rows('footer_link', 'option') ): the_row(); ?>

				        <li><a href="<?php the_sub_field('footer_link_url'); ?>"><?php the_sub_field('footer_text_link'); ?></a></li>

				    <?php endwhile; ?>

				    </ul>

				<?php endif; ?>
			</div>

			<div class="rsx_sociaux">
				<ul>
					<li><a href="<?php echo the_field('instagram_link', 'option'); ?>" target="_blank"><i class="icon-instgram"></i></a></li>
					<li><a href="<?php echo the_field('spotify_link', 'option'); ?>" target="_blank"><i class="icon-spotify"></i></a></li>
					<li><a href="<?php echo the_field('facebook_link', 'option'); ?>" target="_blank"><i class="icon-facebook"></i></a></li>
					<li><a href="<?php echo the_field('twitter_link', 'option'); ?>" target="_blank"><i class="icon-twitter"></i></a></li>
				</ul>
			</div>

		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/lib/jquery-1.11.3.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/lib/jquery.autoScrollTextTape.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/lib/jquery.jticker.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/lib/clipboard.js"></script>





<script src="<?php bloginfo('template_url'); ?>/assets/js/lib/flickity.pkgd.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>


</body>
</html>
