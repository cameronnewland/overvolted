<aside id="sidebar" class="small-12 large-3 columns">
<?php get_template_part('parts/sidebar','ad-1'); ?>
<?php get_template_part('parts/sidebar','ad-2'); ?>
<div class="sidebar-links">
	<a href="/"><i class="fa fa-motorcycle"></i> Latest Electric Bike News</a>
	<a href="/shops/"><i class="fa fa-building-o"></i> Electric Bike Shop Directory</a>
	<a href="/best-electric-bike-shops-map/"><i class="fa fa-globe"></i> Best Bike Shops Map</a>
	<a target="_blank" href="/subscribe"><i class="fa fa-newspaper-o"></i> Subscribe</a>
	<a target="_blank" href="http://instagram.com/overvolted"><i class="fa fa-instagram"></i> Follow On Instagram</a>
	<a target="_blank" href="http://facebook.com/overvolted"><i class="fa fa-facebook-official"></i> Follow On Facebook</a>
	<a target="_blank" href="http://twitter.com/overvolted"><i class="fa fa-twitter-square"></i> Follow On Twitter</a>
	<a href="/contact"><i class="fa fa-envelope-o"></i> Contact</a>
</div>
<div class="sidebar-categories">
	<h5>News By Category:</h5>
		<div class="post-categories">
			<ul>
<?php
$args = array(
	'title_li'           => __( '' ),
);
wp_list_categories( $args ); ?>
			</ul>
		</div>
</div>
</aside>
