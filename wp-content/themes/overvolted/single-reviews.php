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
				<h1 class="entry-title"><?php echo $title; ?></h1>
				<div class="review-hero-slider">
					
				</div>
			</header>
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="entry-content">

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="row">
					<div class="column">
						<?php the_post_thumbnail( '', array('class' => 'th') ); ?>
					</div>
				</div>
			<?php endif; ?>
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
