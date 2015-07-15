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
 * @package Southern Small
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<?php the_content(); ?>
				
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

			<div class="col-xs-6 text-left">
				<?php previous_post_link('<i class="fa fa-arrow-left"></i> %link'); ?>
			</div>
			<div class="col-xs-6 text-right">
				<?php next_post_link('%link <i class="fa fa-arrow-right"></i>'); ?>
			</div>
	</div><!-- #primary -->

<?php get_footer(); ?>