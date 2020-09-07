<?php
/**
 * The main child theme template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
	<section id="primary" class="content-area">
			<main id="main" class="site-main">

			<?php
			if ( have_posts() ) {

				// Load posts loop.
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content/content' );
				}

				// Previous/next page navigation.
				twentynineteen_the_posts_navigation();

			} else {

				// If no content, include the "No posts found" template.
				get_template_part( 'template-parts/content/content', 'none' );

			}
      ?>
        <div style="font: -webkit-small-control; width: 100%;">
          <a style="font-size: 2rem; display: block; text-align: center;" href="#main">	
            &#8593;
          </a>
        </div> 
        </div> <!-- .wrap-content --> 
			</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
