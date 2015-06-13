<?php get_header(); ?>
<div class="row">
	<div class="small-12 columns" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
<?php
// Grabs the brand from the brand relationship field
$posts = get_field('brand');
if( $posts ):
	$brand = $posts[0]->post_title." ";
else :
	$brand = "";
endif; ?>
			<header>
				<h1 class="entry-title"><?php echo $brand.get_the_title(); ?></h1>
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

			<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
				<div class="clearfix"></div>
				<div class="row">
					<div class="column small-3">
						<h4 class="model-meta-value"><?php the_field('price'); ?></h4>
					</div>
					<div class="column small-3">
						<h3 class="model-meta">Battery Capacity</h3>
						<h4 class="model-meta-value"><?php the_field('battery_watt_hours'); ?>Wh</h4>
					</div>					<div class="column small-3">
						<h3 class="model-meta">Battery Amp Hours</h3>
						<h4 class="model-meta-value"><?php the_field('battery_amp_hours'); ?>Ah</h4>
					</div>					<div class="column small-3">
						<h3 class="model-meta">Battery Voltage</h3>
						<h4 class="model-meta-value"><?php the_field('battery_voltage'); ?>V</h4>
					</div>
				</div>
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
