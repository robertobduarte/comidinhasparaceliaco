<?php
/**
 * template name: receitas
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Catch Themes
 * @subpackage Catch Responsive
 * @since Catch Responsive 1.0 
 */

get_header(); ?>
	
	<main id="main" class="site-main" role="main">	
		<?php query_posts('cat=3,4,5'); ?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post();?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'receitas' );
					//get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php catchresponsive_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>
	</main><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>