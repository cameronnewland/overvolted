<?php
if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
	function foundationpress_entry_meta() {
		echo '
		<div class="post-meta">
			<time class="updated" datetime="'. get_the_time( 'c' ) .'">'. sprintf( __( 'Posted on %s at %s.', 'foundationpress' ), get_the_date(), get_the_time() ) .'</time>
		</div>';
	}
endif;
?>
