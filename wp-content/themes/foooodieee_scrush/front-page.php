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
	<h1 class="follow">Follow me!</h1>
	<div id="sidebar-front" class"sidebar-3">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div>
	<div class="media-inquiries">
		<h3>For media inquries or brand collaboration, email
			<a href="mailto:foooodieee@gmail.com">Foooodieee@gmail.com</a>
		</h3>
	</div>
	<div class="main-content">
		<h1 class="follow"><a href="<?php echo home_url(); ?>/blog">From the blog</a></h1>
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
	<div id="featured" class="featured">
		<h1>Featured in...</h1>
		<div class="features">
			<ul>
				<li class="feature-cosmo">
					<a href="http://www.cosmopolitan.com/food-cocktails/news/a44229/foodstagrams-feed-delicious/" target="_blank">
						<img src="" />
					</a>
				</li>
				<li class="feature-aol">
					<a href="https://www.aol.com/article/lifestyle/2016/12/27/15-food-instagrams-you-should-already-be-following/21642746/" target="_blank">
						<img src="" />
					</a>
				</li>
				<li class="feature-elle">
					<a href="http://www.elleuk.com/life-and-culture/culture/articles/a30974/kale-is-over/" target="_blank">
						<img src="" />
					</a>
				</li>
				<li class="feature-popsugar">
					<a href="https://www.popsugar.com/food/Dessert-Trends-Instagram-40655747" target="_blank">
						<img src="" />
					</a>
				</li>
		</ul>
		</div>
	</div>
</section>

<?php get_footer(); ?>
