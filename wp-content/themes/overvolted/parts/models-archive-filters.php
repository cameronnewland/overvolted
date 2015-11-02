<div class="models-archive-filter-container">
	<div class="row">
		<div class="column small-12 large-3">
			<strong class="filter-by-label">Filter Electric Bikes By...</strong>
		</div>
		<div class="column small-12 large-3">
			<select name="models-brand" id="models-brand" placeholder="BRAND">
				<option value="" disabled selected>Brand</option>
<?php $custom_terms = get_terms('model_brands');
foreach($custom_terms as $term) { ?>
				<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
<?php } ?>
			</select>
		</div>
		<div class="column small-12 large-3">
			<select name="models-frame-style" id="models-frame-style" placeholder="FRAME STYLE">
				<option value="" disabled selected>Frame Type</option>
<?php $custom_terms = get_terms('frame_types');
foreach($custom_terms as $term) { ?>
				<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
<?php } ?>
			</select>
		</div>
		<div class="column small-12 large-3">
			<select name="models-speed-classifications" id="models-speed-classifications" placeholder="FRAME STYLE">
				<option value="" disabled selected>Speed Classification</option>
<?php $custom_terms = get_terms('speed_classifications');
foreach($custom_terms as $term) { ?>
				<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
<?php } ?>
			</select>
		</div>
	</div>
</div>