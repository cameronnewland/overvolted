<?php get_header(); ?>
<div class="row">
	<div class="small-12 columns" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="entry-content">

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="row">
					<div class="column small-12 large-8 thumbnail-column">
						<?php the_post_thumbnail( 'large' ); ?>
<?php 
$posts = get_field('brands_carried');
if( $posts ): ?>
						<div>
							<h3>Brands Carried:</h3>
							<ul>
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
								<li>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</li>
    <?php endforeach; ?>
    						</ul>
						</div>
<?php wp_reset_postdata();
endif; ?>
					</div>
					<div class="column small-12 large-4">
						<?php if( get_field('google_maps_embed_url') ){ ?>
						<iframe src="<?php the_field( 'google_maps_embed_url' ); ?>" width="100%" height="425" frameborder="0" style="border:0" allowfullscreen></iframe>
<?php /*
<iframe width="100%" height="425" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAmO-T4ApJdIhZi-cRkD8AdonZ_eL4ykFQ&q=<?php $addressLineOne = get_field('address_line_1'); echo urlencode( $addressLineOne ); ?>,<?php $cityandstate = get_field('city')." ".get_field('state_or_province'); echo urlencode( $cityandstate ); ?>" allowfullscreen></iframe>
 */ ?>
						<?php } ?>
						<div class="shop_address">
							<div class="row">
								<div class="column small-2"><i class="fa fa-map-marker"></i></div>
								<div class="column small-10">
									<div><strong><?php the_title(); ?></strong></div>
									<div><?php the_field('address_line_1'); ?></div>
									<?php if ( get_field('address_line_2') ) { ?><div><?php the_field('address_line_2'); ?></div><?php } ?>
									<div><?php the_field('city'); ?>, <?php the_field('state_or_province'); ?> <?php the_field('zip_or_postal_code'); ?></div>
								</div>
							</div>
						</div>
						<div class="shop_meta">
							<?php if( get_field('phone_number') ){ ?>
							<div class="row">
								<div class="column small-2"><i class="fa fa-phone"></i></div>
								<div class="column small-10">
									<div><a href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a></div>
								</div>
							</div>
							<?php } ?>
							<?php if( get_field('email_address') ){ ?>
							<div class="row">
								<div class="column small-2"><i class="fa fa-envelope"></i></div>
								<div class="column small-10">
									<div><a href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a></div>
								</div>
							</div>
							<?php } ?>
							<?php if( get_field('website_url') ){ ?>
							<div class="row">
								<div class="column small-2"><i class="fa fa-external-link"></i></div>
								<div class="column small-10">
									<div><a href="http://<?php the_field('website_url'); ?>"><?php the_field('website_url'); ?></a></div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
				<div><?php foundationpress_entry_meta(); ?></div>
				<?php get_template_part('parts/related-posts'); ?>
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
<?php get_template_part('parts/json','ld'); ?>
<?php get_footer(); ?>