<?php
/**
 * The template for displaying 404 pages (Not Found)
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="error-content" role="main">
				<h2 class="error">Whoops, took a wrong turn...</h2>
				<p class="error-p">Sorry, this page no longer exists, never existed, or has been moved.  We feel like complete jerks for totally misleading you.</p>
        <p class="error-p">Feel free to take a look around our <a class="blog" href="<?php echo home_url(); ?>/blog">blog</a> or some of our featured <a class="work" href="<?php echo home_url(); ?>">work</a>.</p>
        <iframe src="//giphy.com/embed/11j6oiwfuzwu9G" width="480" height="269.76" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="http://giphy.com/gifs/reactiongifs-11j6oiwfuzwu9G">via GIPHY</a></p>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
