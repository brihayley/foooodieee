<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package smallblog
 */
get_header();
?>
    
    <?php 
    if( is_home() ) {
        echo '<div id="home-latest-section" class="container">';
        echo do_shortcode('[frontpage_news widget="150" name="Home Page"]');
        echo '</div>';
        echo '<hr class="separator"></hr>';

	echo '<div id="home-instagram-section" class="container">';
	echo do_shortcode('[instagram-feed]');
	echo '</div>';
	echo '<hr class="separator"></hr>';
    } else {
        get_template_part( 'template-parts/layout', 'list' );
    }
    ?>
    
<?php get_footer(); ?>