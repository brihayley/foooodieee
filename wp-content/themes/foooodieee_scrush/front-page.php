<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<?php the_content(); ?>
				<div class="blog-box">
					<div id="logo"></div>
					<a class="blog-btn" href="<?php echo site_url('/blog/'); ?>" class="btn">
						VIEW MY BLOG
					</a>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
