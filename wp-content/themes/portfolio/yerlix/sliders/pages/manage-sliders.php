<?php global $yerlix_sliders; ?>
<div class="wrap" id="yerlix-sliders-page">
	<div id="icon-yerlix" class="icon32"><br/></div>
	<h2>Sliders</h2>
	<div id="yerlix-manage-sliders-wrapper">
		<div id="yerlix-create-slider-container">
			<h3>Manage Sliders</h3>
			<a class="button-primary button80 alignright" id="yerlix-add-slider-button" href="<?php echo Aletheme_Sliders::slidersUrl(array('action' => 'create')) ?>">Create New Slider</a>
			<div class="clear"></div>
		</div>
		<div id="yerlix-manage-sliders">		
			<ul>
				<?php foreach ($yerlix_sliders->getList() as $slider) : ?>
					<?php
						$slide = $yerlix_sliders->getFirstSlide($slider->ID);
					?>
					<li>
						<a href="<?php echo $yerlix_sliders->slidersUrl(array('action' => 'edit', 'id' => $slider->ID)) ?>">
							<span class="image">
								<?php if ($slide) : ?>
									<img src="<?php echo $slide->post_content_filtered ?>" alt="<?php echo $slider->post_title; ?>" />
								<?php endif; ?>
							</span>
							<span class="title"><?php echo $slider->post_title; ?></span>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
</div>