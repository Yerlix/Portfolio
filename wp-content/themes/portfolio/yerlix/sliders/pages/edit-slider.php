<?php global $yerlix_sliders; ?>
<div class="wrap" id="yerlix-edit-slider-page" data-id="<?php echo (int) $yerlix_sliders->id ?>">
	<div id="icon-yerlix" class="icon32"><br/></div>
	<h2><?php echo $yerlix_sliders->id ? 'Edit' : 'Add New' ?> Slider</h2>
	
	<?php if (!$yerlix_sliders->slider) : ?>
		<form action="" method="post">
	<?php endif;?>
	
	<div id="yerlix-edit-slider-wrapper" class="metabox-holder yerlix-slider-edit">
		<p class="alignleft"><a href="<?php echo Aletheme_Sliders::slidersUrl() ?>">Return to Sliders Listing</a></p>
		<?php if ($yerlix_sliders->slider && $yerlix_sliders->slider->post_status == 'publish') : ?>
			<p class="alignright submitbox"><a href="<?php echo Aletheme_Sliders::slidersUrl(array('action' => 'delete', 'id' => $yerlix_sliders->slider->ID, '_wpnonce' => wp_create_nonce('yerlix_slider_delete_nonce'))) ?>" id="yerlix-slider-delete" class="submitdelete">Delete Slider</a></p>
		<?php endif; ?>
		
		<div class="clear"></div>
		
		<div id="titlediv">
			<div id="titlewrap">						
				<input type="text" name="title" size="40" maxlength="255" placeholder="Type slider name here" required="required" id="title" value="<?php if(isset($yerlix_sliders->slider->post_title)){ echo $yerlix_sliders->slider->post_title; } ?>" />
			</div>
		</div>
		<?php if ($yerlix_sliders->slider) : ?>
			<?php $slider = $yerlix_sliders->slider; ?>
		
			<?php if ($slider->post_status == 'publish') : ?>
				<div id="yerlix-slider-info-hide"></div>
				<div class="clear"></div>
				<div id="yerlix-slider-info">
					
					<h2>Slider Shortcode</h2>
					<dl class="shortcode" data-slug="<?php echo $slider->post_name ?>">
						<dt>Slider Slug</dt>
						<dd><?php echo $slider->post_name ?></dd>
						
						<dt>Slideshow</dt>
						<dd>
							<select name="slideshow">
								<option value="1" selected="selected">Yes</option>
								<option value="0">No</option>
							</select>
						</dd>
						
						<dt>Animation Type</dt>
						<dd>
							<select name="animation">
								<option value="fade" selected="selected">Fade</option>
								<option value="slide">Slide</option>
							</select>
						</dd>
						
						<dt>Control Navigation</dt>
						<dd>
							<select name="controlNav">
								<option value="1">Yes</option>
								<option value="0" selected="selected">No</option>
							</select>
						</dd>
						
						<dt>Randomize Slides</dt>
						<dd>
							<select name="randomize">
								<option value="1">Yes</option>
								<option value="0" selected="selected">No</option>
							</select>
						</dd>
						
						<dt>Slider Shortcode</dt>
						<dd><cite><input type="text" name="shortcode" id="yerlix-slider-shortcode" /></cite></dd>
					</dl>
					<div class="clear"></div>
				</div>
			<?php endif; ?>
		
			<div id="yerlix-slides-sortable" class="meta-box-sortables ui-sortable">
					<?php foreach ($yerlix_sliders->getSlides($slider->ID) as $k => $slide) : ?>
						<div class="slide" id="yerlix-slide-<?php echo $k ?>" data-id="<?php echo $slide->ID ?>">
							<div class="handle" title="Click and drag to reorder">SORT</div>
							<a href="#" class="delete">Delete</a>
							<div class="box-image">
								<div class="image"><img /></div>
								<span><input type="text" name="image" placeholder="Or enter an image URL" value="<?php echo $slide->post_content_filtered ?>" /></span>
							</div>
							<div class="box-content">
								<div class="box-title"><span>Title</span><input type="text" value="<?php echo $slide->post_title ?>" name="title" /></div>
								<div class="box-url"><span>URL</span><input type="text" value="<?php echo $slide->pinged ?>" name="url" /></div>
								<div class="box-description"><span>Description</span><textarea cols="30" rows="4" name="description" class="description"><?php echo $slide->post_content ?></textarea></div>
								<div class="box-html"><span>HTML</span><textarea cols="30" rows="4" name="html" class="html"><?php echo $slide->post_excerpt ?></textarea></div>
							</div>
						</div>
					<?php endforeach; ?>
			</div>
			<p class="alignleft"><a id="yerlix-add-new-slide-button" class="button-secondary button80" href="#">Add a New Slide</a></p>
			<p class="alignright" id="yerlix-save-slider-container">
				<img src="<?php echo esc_url( admin_url( 'images/wpspin_light.gif' ) ); ?>" class="ajax-loading" id="yerlix-sliders-loading" alt="">
				<a class="button-primary button80" id="yerlix-save-slider-button" href="#">Save Slider</a>
			</p>
		<?php else: ?>
			<p class="alignright">
				<a class="button-primary button80" href="#" id="yerlix-create-slider">Create Slider</a>
			</p>			
		<?php endif; ?>
		<div class="clear"></div>
		<?php if (!$yerlix_sliders->slider) : ?>
			</form>
		<?php endif;?>
	</div>
</div>