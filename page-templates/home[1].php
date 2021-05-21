<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<!-- Hompage Hero -->
<section class="container-fluid bg-primary home-hero">
  <div class="container">
    <h1 class="text-altwhite mb-0">Front End Web Developer</h1>
    <h2 class="text-altwhite mb-0">Expertise in web design and WordPress Development.</h2>
  </div>
</section>
<!-- Section quick info and services -->
<section class="container-fluid info-services">
  <div class="container py-100">
    <div class="row mb-100">
      <div class="col-md-9 col-sm-12 pr-md-5 align-self-center">
        <p>
          I’m a freelancer who can produce simple but high quality web design and WordPress websites. I come with experience working in marketing agencies and working on my own for over 5 years. It's important to me that my clients are completely satisfied with my performance, and that their investment will make them proud of their own business, services, and hard work.
        </p>
        <p>
          If you have a project in mind, contact me now:
        </p>
        <a href="/contact/">
          <button class="btn btn-one border-4 border-altcolor text-altcolor rounded-0 text-uppercase px-4">
            Let's Talk
          </button>
        </a>
      </div>
      <div class="col-md-3 col-12 mb-3 mb-md-0 order-first order-md-last">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/globe-laptop.png" />
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-3 mb-3 mb-md-0">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/coding.svg" />
      </div>
      <div id="WebServices" class="col-12 col-md-9 pl-md-5 align-self-center">
        <h3 class="header-one">Web Services</h3>
        <p>These are the varity of web services I offer, I can:</p>

        <div class="row">
          <div class="col-12 col-md-6">
            <ul class="mb-0 pl-4">
              <li>Design and Build Sites</li>
              <li>Website Migration</li>
              <li>WordPress Managament</li>
              <li>Set Up and Maintain Hosting</li>
              <li>Custom WordPress Functions</li>
            </ul>
          </div>
          <div class="col-12 col-md-6">
            <ul class="mb-0 pl-4">
              <li>Design and Build WordPress Themes</li>
              <li>Wordpress Migration</li>
              <li>WordPress Site Maintance</li>
              <li>Build Responsive sites and WordPress Sites</li>
              <li>Custom WordPress Plugins</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container-fluid testimonial bg-altwhite">
  <div class="container py-100">
    <div class="row">
      <div class="col">
        <h3 class="header-two text-center">Testimonials</h3>

        <div id="testimonial-slide" class="carousel slide px-lg-100" data-ride="carousel">
          <div class="carousel-inner px-md-100">
            <?php
              $testimonials = new WP_Query(array(
                  "post_type" => "testimonial",
                  "posts_per_page" => 3
              ));
              $i = 0;
              foreach ($testimonials->posts as $post) {
            ?>
            <div class="carousel-item <? echo ($i === 0)?'active': ''; ?>" data-interval="20000">
              <figure class="d-block w-100 mb-0">
                <blockquote class="blockquote text-center">
                  "<?php echo $post->post_content; ?>"
                </blockquote>
                <figcaption class="blockquote-footer text-center">
                  <?php echo $post->post_title; ?>
                </figcaption>
              </figure>
            </div>
            <?php $i++; } ?>
          </div>
          <?php if($testimonials->post_count > 1): ?>
          <a class="carousel-control-prev" href="#testimonial-slide" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#testimonial-slide" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-">
</section>
<section class="container-fluid work-section">
  <div class="container py-100">
    <div class="row">
      <div class="col-12">
        <h3 class="header-one text-center mb-5">Recent Projects</h3>
      </div>
      <div class="col-12 mb-5">
        <?php echo do_shortcode('[foogallery id="161" limit="3"]'); ?>
      </div>
      <div class="col-12 text-center">
        <a href="/work/">
          <button class="btn btn-one bg-primary text-altwhite rounded-0 text-uppercase px-4 py-2">
            More Projects
          </button>
        </a>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
