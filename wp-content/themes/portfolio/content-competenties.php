<?php
	// Get all competentions
	$args = array(
		'post_type' => 'competentie',
		'orderby'   => 'menu_order',
		'order'     => 'ASC'
	);
	$query = new WP_Query($args); 

	// arrays voorzien
	$softskills = array();
	$hardskills = array();
?>

<!-- Loop doorlopen -->
<?php if ($query->have_posts()) : ?>
	<?php while ($query->have_posts()) : $query->the_post() ?>
		<!-- Ophalen variabelen -->
		<?php
			// ophalen soort skill
			$skill = rwmb_meta('yer_soft_hard', 'type=radio', $post->ID);


			if ($skill === "soft")
				$softskills[] = $post;

			if ($skill === "hard")
				$hardskills[] = $post;
		?>
	<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
	
	<!-- Start -->
	<div class="boxes-full">
	
		<div class="boxes-padding fullpadding">
			
			<!-- Start Softskills Section -->
			<div class="splitnone">
				<p><?php the_content(); ?></p>
			</div>
			<div class="clear"></div>
			<hr />
			
			<!-- Start Toggle Hardskills -->
			<div class="splitnone">
				<h3><?php if (yer_get_meta('comphard')) echo yer_get_meta('comphard'); ?></h3>
				
				<?php if (count($hardskills) > 0) { ?>
					<div class="togglewrap">
						<?php foreach ($hardskills as $skill) { ?>
							<div class="toggletitle"><a><?php echo $skill->post_title; ?></a></div>
							<div class="togglecontent compbody">
								<h3>Doelstelling</h3>
								<?php echo rwmb_meta('yer_doelstelling', 'type=textarea', $skill->ID); ?>

								<h3>Behaald niveau</h3>
								<p>
								Voor de competentie "<?php echo substr($skill->post_title, 3) ?>" heb ik niveau <?php echo rwmb_meta('yer_niveau', 'type=number', $skill->ID); ?> behaald. Hiervoor gebruik ikverschillende bewijsstukken uit het 2e en 3e jaar uit mijn opleiding, maar ook bewijzen uit mijn stage.
								</p>

								<h3>Verantwoording</h3>
								<!-- ophalen bewijzen -->
								<ul>
									<?php for($i = 1;$i<=5; $i++){
										$bewijzen = rwmb_meta('yer_bewijs' . $i, 'type=file_advanced', $skill->ID);
										$uitleg = rwmb_meta('yer_uitleg' . $i, 'type=textarea', $skill->ID);
										// var_dump($bewijzen);
										if (!empty($bewijzen) || !empty($uitleg)){
											foreach ($bewijzen as $bewijs) { ?>
												<li class="compLabel"><a href="<?php echo $bewijs['url']; ?>" target="_blanc"><?php echo $bewijs['name']; ?></a></li>
											<?php }

											// foreach ($uitleg as $info) { ?>
												<p class="paddingleft"><?php echo $uitleg; ?></p>
											<?php //}
										} else {
											break;
										}
									}?>
								</ul>
								
								<h3>Bewijzen</h3>

								<!-- ophalen bewijzen -->
								<?php $bewijzen = rwmb_meta('yer_bewijzen', 'type=file_advanced', $skill->ID); ?>
								<ul>
									<?php foreach ($bewijzen as $bewijs) { ?>
										<li class="compLabel"><a href="<?php echo $bewijs['url']; ?>" target="_blanc"><?php echo $bewijs['name']; ?></a></li>
									<?php } ?>                                    
								</ul>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
				<!-- End Toggle Hardskills-->

				<div class="splitnone">
					<h3><?php if (yer_get_meta('compsoft')) echo yer_get_meta('compsoft'); ?></h3>     
				
				<!-- Start Toggle Softskills -->
				<?php if (count($softskills) > 0) { ?>
					<div class="togglewrap">
						<?php foreach ($softskills as $skill) { ?>
							<div class="toggletitle"><a><?php echo $skill->post_title; ?></a></div>
							<div class="togglecontent compbody">
								<h3>Doelstelling</h3>
								<p>
									<?php echo rwmb_meta('yer_doelstelling', 'type=textarea', $skill->ID); ?>
								</p>

								<h3>Behaald niveau</h3>
								<p>
								Voor de competentie "<?php echo substr($skill->post_title, 3) ?>" heb ik niveau <?php echo rwmb_meta('yer_niveau', 'type=number', $skill->ID); ?> behaald. Hiervoor gebruik ikverschillende bewijsstukken uit het 2e en 3e jaar uit mijn opleiding, maar ook bewijzen uit mijn stage.
								</p>

								<h3>Verantwoording</h3>
								<!-- ophalen bewijzen -->
								<ul>
									<?php for($i = 1;$i<=5; $i++){
										$bewijzen = rwmb_meta('yer_bewijs' . $i, 'type=file_advanced', $skill->ID);
										$uitleg = rwmb_meta('yer_uitleg' . $i, 'type=textarea', $skill->ID);
										// var_dump($bewijzen);
										if (!empty($bewijzen) || !empty($uitleg)){
											foreach ($bewijzen as $bewijs) { ?>
												<li class="compLabel"><a href="<?php echo $bewijs['url']; ?>" target="_blanc"><?php echo $bewijs['name']; ?></a></li>
											<?php } ?>

												<div class="paddingleft"><?php echo $uitleg; ?></div>

										<?php } else {
											break;
										}
									}?>
								</ul>

								<h3>Bewijzen</h3>

								<!-- ophalen bewijzen -->
								<?php $bewijzen = rwmb_meta('yer_bewijzen', 'type=file_advanced', $skill->ID); ?>
								<ul>
									<?php foreach ($bewijzen as $bewijs) { ?>
										<li class="compLabel"><a href="<?php echo $bewijs['url']; ?>" target="_blanc"><?php echo $bewijs['name']; ?></a></li>
									<?php } ?>                                    
								</ul>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
				<!-- End Toggle Softskills-->
			</div>
			<div class="clear"></div>
			<hr />
			</div>
			<!-- End None Split Section -->

		</div>
		<span class="box-arrow"> </span>
	</div>
	<!-- End Latest Project titles -->