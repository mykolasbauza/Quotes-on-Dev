<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
<?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
<button type="button" id="get_quote">Show Me Another!</button>
<?php ?>