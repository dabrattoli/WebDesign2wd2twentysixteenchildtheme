<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php
            $args = array(
            'pagename'=> 'about-me',
            'post_type' => 'page',
            );
                    // The Query
            $myhomepage = new WP_Query( $args );

            // The Loop
            if ( $myhomepage->have_posts() ) {
                while ( $myhomepage->have_posts() ) {
                    $myhomepage->the_post();
                    echo '<h3>' . get_the_title() . '</h3>';
                    the_excerpt();
                }
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
