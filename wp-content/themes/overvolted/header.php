<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="google-site-verification" content="4A6N9a3B4f7F_6-9zjA2YPmoIzTdurSwxBLhCm8h_ac" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			if( is_archive('shops') ){
				echo 'Best Electric Bike ';wp_title( '' ); echo ' | '; bloginfo( 'name' );
			} else {
				wp_title( '' ); echo ' Archive | '; bloginfo( 'name' );
			}
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html( $s ).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		} elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_singular('reviews') ) {
			wp_title( '' );
			echo ' Review | Overvolted Electric Bike Reviews';
		} elseif ( is_single() ) {
			wp_title( '' );
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffc40d">
		<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">
<?php if( ENVIRONMENT == "PRODUCTION" ){ ?>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<?php } else { ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome-4.3.0/css/font-awesome.min.css">
<?php } ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/foundation-icons/foundation-icons.css">
		<?php wp_head(); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					families: ['PT Sans']
				}
			});
		</script>
<?php get_template_part('parts/json','ld-social-profiles'); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php
if( ENVIRONMENT == "PRODUCTION" ){
	include_once("analyticstracking.php");
}
	?>
	<?php do_action( 'foundationpress_after_body' ); ?>
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>
      <section class="middle tab-bar-section">
		<a href="<?php echo home_url(); ?>">
			<img class="logo" src="/wp-content/themes/overvolted/assets/img/logo.png">
		</a>
      </section>
	<section class="right social-icons show-for-medium-up">
		<a target="_blank" href="http://instagram.com/overvolted">
			<i class="fa fa-instagram"></i>
		</a>
		<a target="_blank" href="http://twitter.com/overvolted">
			<i class="fa fa-twitter-square"></i>
		</a>
		<a target="_blank" href="http://facebook.com/overvolted">
			<i class="fa fa-facebook-official"></i>
		</a>
		<a href="#" data-reveal-id="subscribeModal">
			<i class="fa fa-rss"></i>
		</a>
	</section>
     </nav>
	<?php do_action( 'foundationpress_layout_start' ); ?>
		<div class="container">
			<div class="row">
				<div class="column small-12">
<?php get_template_part('parts/responsive-ad'); ?>
				</div>
			</div>
		</div>
	<?php get_template_part( 'parts/off-canvas-menu' ); ?>
<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>