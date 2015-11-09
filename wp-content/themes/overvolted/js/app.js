$(document).ready(function(){
	$(document).foundation();
	// Models Archive scripts:
	if( $('body').hasClass('post-type-archive-models') ){
		$('select#models-brand').on('change',function(){
			window.location.href = "/model_brands/"+$(this).val();
		});
		$('select#models-frame-style').on('change',function(){
			window.location.href = "/frame_types/"+$(this).val()+"/";
		});
		$('select#models-speed-classifications').on('change',function(){
			window.location.href = "/speed_classifications/"+$(this).val()+"/";
		});
	}
});