<?php

/* JSON-LD for blog posts */

if (has_post_thumbnail( $post->ID ) ):
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
$imageurl = $image[0];
else:
$imageurl = "http://overvolted/wp-content/themes/overvolted/assets/img/logo.png";
endif;

$content = get_the_content();
//$content = preg_replace(‘/(<)([img])(\w+)([^>]*>)/’, ”, $content);
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
?>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "NewsArticle",
  "headline": "<?php the_title(); ?>",
  "image": [
    "<?php echo $imageurl; ?>"
  ],
  "datePublished": "<?php the_date('Y-m-d'); ?>",
}
</script>