</section>
<footer class="row">
	<?php do_action( 'foundationpress_before_footer' ); ?>
	<?php // dynamic_sidebar( 'footer-widgets' ); ?>
	<div class="column small-12 text-center">
		<a href="<?php echo home_url(); ?>">
			<img class="logo" src="/wp-content/themes/overvolted/assets/img/logo.png">
		</a>
	</div>
	<?php do_action( 'foundationpress_after_footer' ); ?>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
