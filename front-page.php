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

<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	'posts_per_page'   => 0,
	'orderby'          => 'date',
	'order'            => 'DESC',
	'post_type'        => 'post',
	'post_status'      => 'publish',
	'suppress_filters' => true 
);
$posts_array = get_posts( $args ); ?>
<div class="main">
	<?php foreach( $posts_array as $post ) : setup_postdata( $post ); ?>
		<a href="<?php the_permalink(); ?>"><h3 class="text-center"><?php the_title();?></h3></a>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="row">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array( 'class' => 'img-feature' ) ); ?></a>
			</div>
		<?php endif ?>
		<p><?php the_excerpt(); ?></p>
		<p class="text-center"><?php
		$posttags = get_the_tags();
		if ($posttags) {
		  foreach($posttags as $tag) {
		  	echo '<a href="' . site_url() . '/tag/' . $tag->name . '">';
		    echo '#' . $tag->name . ' '; 
		    echo '</a>';
		  }
		}
		?></p>
	<?php endforeach;
	wp_reset_postdata(); ?>
	<div class="col-xs-6 text-left">
		<?php next_posts_link( 'Older Entries »', 0 ); ?>
	</div>
	<div class="col-xs-6 text-right">
		<?php next_posts_link( 'Next Entries &raquo;', '' ); ?>
	</div>
</div>

<?php get_footer(); ?>
