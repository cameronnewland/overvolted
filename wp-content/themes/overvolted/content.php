<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

$custom_ratio = $aspect_ratio_class = '';

if( get_field('featured_image_aspect_ratio') != "custom" ){
	$aspect_ratio_class = ' '.get_field('featured_image_aspect_ratio');
} else {
	$custom_ratio = 'padding-top:'.get_field('custom_featured_image_aspect_ratio_percentage').'%;';
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <div class="blog-featured-image<?php echo $aspect_ratio_class; ?>" style="background-image: url('<?php echo $image[0]; ?>');<?php echo $custom_ratio; ?>"></div>
<?php endif; ?>
	</header>
	<div class="post-body">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div>
		<footer>
			<?php foundationpress_entry_meta(); ?>
			<a class="button read-more right" href="<?php the_permalink(); ?>">READ MORE</a>
		</footer>
	</div>
	<div class="clearfix"></div>
</article>
