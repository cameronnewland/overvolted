$(document).ready(function(){
	$(document).foundation();
	// Models Archive scripts:
	if( $('body').hasClass('post-type-archive-models') ){
		$('select#models-brand').on('change',function(){
			window.location.href = "http://overvolted/model_brands/"+$(this).val();
		});
		$('select#models-frame-style').on('change',function(){
			window.location.href = "http://overvolted/frame_types/"+$(this).val()+"/";
		});
	}
});