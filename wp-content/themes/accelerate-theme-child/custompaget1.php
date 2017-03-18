<?php
/** Template Name: CustomPageT1
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<h2 class="custom-page-heading"><span class="accelerate">Accelerate</span> is a strategy and marketing agency located in the heart of NYC.  Our goal is to build businesses by making our clients visible and making their customers smile.</h2>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .header -->

<div id="primary" class="site-content">
	<div id="content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<h4 class="services"><?php the_title(); ?></h4>
				<div class="services-content">
					<?php the_content(); ?>
						<h2 class="interested">Interested in working with us?</h2>
						<a class="button" id="contact-button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
				</div>
		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
