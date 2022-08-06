<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arizona
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-sidebar">
				<?php dynamic_sidebar('footer-logo'); ?>
			</div>
			<div class="footer-sidebar">
				<?php dynamic_sidebar('footer-2'); ?>
			</div>
			<div class="footer-sidebar">
				<?php dynamic_sidebar('footer-3'); ?>
			</div>
			<div class="footer-sidebar">
				<?php dynamic_sidebar('footer-4'); ?>
			</div>
			
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/aosanimation.js"></script>
<link rel='stylesheet' id='css-aos-css'  href='<?php echo get_stylesheet_directory_uri(); ?>/aosanimation.css' type='text/css' media='all' />

		<script>
			AOS.init({
				easing: 'ease-out-back',
				duration: 1000
			});
		</script>
<script>
$(document).ready(function(){
    $(".menu-toggle").click(function(){
        $(".site-header").toggleClass("page-header");
    });
    $(".search-box").click(function(){
        $(".header-right").toggleClass("search-f");
    });
});
</script>
<?php wp_footer(); ?>

</body>
</html>
