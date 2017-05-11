<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="front-page">
	<div class="main-content">
		<div class="content">
			<?php query_posts('posts_per_page=3'); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="single-post">
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<figure>
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail('thumb'); ?>
						<?php endif; ?>
					</figure>
					<?php the_excerpt(); ?>
				</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
