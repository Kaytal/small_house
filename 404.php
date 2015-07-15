<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Southern Small
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'southern_small' ); ?></h1>
				</header><!-- .page-header -->

				<div class="text-center">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'southern_small' ); ?></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
