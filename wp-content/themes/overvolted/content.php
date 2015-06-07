<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <div class="blog-featured-image" style="background-image: url('<?php echo $image[0]; ?>')"></div>
<?php endif; ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
	<footer>
		<?php foundationpress_entry_meta(); ?>
		<a class="button read-more right" href="<?php the_permalink(); ?>">READ MORE</a>
	</footer>
	<div class="clearfix"></div>
</article>
