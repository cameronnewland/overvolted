<?php get_header(); ?>
<div class="row">
	<div class="small-12 columns" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
<?php
// Grabs the brand from the brand relationship field
$brands = get_field('brand');
if( $brands ):
	$brand = $brands[0]->post_title." ";
else :
	$brand = "";
endif; 
// Grabs the model from the model relationship field
$models = get_field('model');
if( $models ):
	$model = $models[0]->post_title." ";
else :
	$model = "";
endif; 
if ( $brand != '' && $model != '' ){
	$title = $brand." ".$model;
} else {
	$title = get_the_title();
} ?>
			<header>
				<h1 class="entry-title"><?php echo $title; ?> Review</h1>
			</header>
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="entry-content">

<?php
$models = get_field('model');
if( $models ):
    foreach( $models as $post):
        setup_postdata($post);
		if( have_rows('model_photos') ): ?>
			</div>
		</div>
	</div>
</div>
<div class="review-model-photos-slider gallery js-flickity">
			<?php while ( have_rows('model_photos') ) : the_row();
				$image = get_sub_field('image');
				if( !empty($image) ): ?>
					<img class="full-width gallery-cell" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif;
			endwhile; ?>
		<?php endif;
    endforeach;
    wp_reset_postdata();
endif;?>
</div>
<div class="row">
	<div class="small-12 columns" role="main">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry-content">
			<?php the_content();
			$review = get_field('written_review');
			if( $review && $review != '' ){ ?>
				<div class="written-review">
					<?php echo $review; ?>
				</div>
			<?php } ?>
				<div class="voltscore right">
					<div class="row">
						<div class="score">
							<div class="label">VoltScore:</div>
							<div><?php the_field('rating'); ?></div>
						</div>
					</div>
				</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
				<div class="clearfix"></div>
			</footer>
			<?php do_action( 'foundationpress_post_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_post_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
	<?php //get_sidebar(); ?>
</div>
<?php get_footer(); ?>
