<?php
/**
 * Template Name: Empty Page With Hero Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if(has_post_thumbnail()):
?>
<style>
	.has-hero{ background-image: url("<?php echo the_post_thumbnail_url(); ?>");}
</style>
<?php
endif;
get_header();
?>
	<section class="container-fluid <?php echo (has_post_thumbnail())? 'mask has-hero': 'bg-primary home-hero'; ?>">
	  <div class="container">
	    <h1 class="text-altwhite mb-0"><?php echo the_title(); ?></h1>
	  </div>
	</section>
	<section class="container-fluid py-100">
		<div class="container">
			<div class="row">
				<div class="col-12">
<?php
while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;
?>
				</div>
			</div>
		</div>
	</section>
<?php

get_footer();
