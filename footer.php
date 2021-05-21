<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<footer class="site-footer bg-primary container-fluid">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row py-100">
			<div class="col-12 col-md-6 text-center text-md-left">
				<a href="mailto:dannysuero@dannysuero.com"><i class="fa fa-envelope" aria-hidden="true"></i> dannysuero@dannysuero.com</a>
			</div><!--col end -->
			<div class="col-12 col-md-6 text-center text-md-right">
				<a href="https://www.facebook.com/DannyRSuero" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
				<a href="https://github.com/DanSuero/" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
				<a href="https://www.linkedin.com/in/danny-suero-ba270746/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
			</div><!--col end -->
		</div><!-- row end -->
	</div><!-- container end -->
</footer><!-- #colophon -->
<div class="site-footer bottom-footer bg-altdark text-center text-altwhite">
	Danny Suero &copy; <?php echo date('Y'); ?>
</div>
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
