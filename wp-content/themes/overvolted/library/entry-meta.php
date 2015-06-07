<?php
if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
	function foundationpress_entry_meta() {
		echo '
		<div class="post-meta left">
			<time class="updated" datetime="'. get_the_time( 'c' ) .'">'.get_the_date().'</time>
		</div>';
	}
endif;
?>
