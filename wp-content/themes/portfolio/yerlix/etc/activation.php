<?php

if (!(defined('MULTISITE') && MULTISITE)) {
	if (is_admin() && isset($_GET['activated']) && 'themes.php' == $GLOBALS['pagenow']) {
		wp_redirect(admin_url('themes.php?page=yerlix_theme_activation'));
		exit;
	}
	
	function yerlix_activation_is_config_writable() {
		$home_path = get_home_path();
		$iis7_permalinks = iis7_supports_permalinks();
		if ( $iis7_permalinks ) {
			if ( ( ! file_exists($home_path . 'web.config') && win_is_writable($home_path) ) || win_is_writable($home_path . 'web.config') )
				$config_writable = true;
			else
				$config_writable = false;
		} else {
			if ( ( ! file_exists($home_path . '.htaccess') && is_writable($home_path) ) || is_writable($home_path . '.htaccess') )
				$config_writable = true;
			else
				$config_writable = false;
		}
		
		return $config_writable;
	}

	function yerlix_theme_activation_init() {
		if (yerlix_get_theme_activation() === false) {
			add_option('yerlix_theme_activation', yerlix_get_default_theme_activation());
		}

		register_setting(
			'yerlix_activation', 'yerlix_theme_activation', 'yerlix_theme_activation_validate'
		);
	}

	add_action('admin_init', 'yerlix_theme_activation_init');

	function yerlix_activation_page_capability($capability) {
		return 'edit_theme_options';
	}

	add_filter('option_page_capability_yerlix_activation', 'yerlix_activation_page_capability');

	function yerlix_theme_activation_add_page() {
		$yerlix_activation = yerlix_get_theme_activation();

		if (!$yerlix_activation['first_run']) {
			add_theme_page( __('Theme Activation', 'yerlix'), __('Theme Activation', 'yerlix'), 'edit_theme_options', 'yerlix_theme_activation', 'yerlix_theme_activation_render_page');
		} else {
			if (is_admin() && isset($_GET['page']) && $_GET['page'] === 'yerlix_theme_activation') {
				wp_redirect(admin_url('themes.php?page=yerlix'));
				exit;
			}
		}
	}

	add_action('admin_menu', 'yerlix_theme_activation_add_page', 50);

	function yerlix_get_default_theme_activation() {
		$default_theme_activation = array(
			'first_run' => false,
			'create_front_page' => false,
			'create_blog_page' => false,
			'change_permalink_structure' => false,
			'change_uploads_folder' => false,
		);

		return apply_filters('yerlix_default_theme_activation', $default_theme_activation);
	}

	function yerlix_get_theme_activation() {
		return get_option('yerlix_theme_activation', yerlix_get_default_theme_activation());
	}

	function yerlix_theme_activation_render_page() {
		?>

		<div class="wrap">
			<?php screen_icon('yerlix'); ?>
			<h2><?php printf(__('%s Theme Activation', 'yerlix'), wp_get_theme()); ?></h2>
			<?php settings_errors(); ?>

			<form method="post" action="options.php">

				<?php
					settings_fields('yerlix_activation');
					$yerlix_activation = yerlix_get_theme_activation();
					$yerlix_default_activation = yerlix_get_default_theme_activation();

					$config_writable = yerlix_activation_is_config_writable();
				?>

				<input type="hidden" value="1" name="yerlix_theme_activation[first_run]" />
				
				<?php if (!$config_writable) : ?>
					<div class="error">
						<p>If your <code>.htaccess</code> file were <a href="http://codex.wordpress.org/Changing_File_Permissions" target="_blank">writable</a>, we could do this automatically, but it isn&#8217;t so these are the mod_rewrite rules you should have in your <code>.htaccess</code> file. Please go to <a href="<?php echo admin_url('options-permalink.php') ?>">Permalinks</a> page in your <strong>Settings</strong> tab and adjust your links manually.</p>
					</div>
				<?php endif; ?>
				
				<table class="form-table">

					<tr valign="top"><th scope="row"><?php _e('Create static front page?', 'yerlix'); ?></th>
						<td>
							<fieldset><legend class="screen-reader-text"><span><?php _e('Create static front page?', 'yerlix'); ?></span></legend>
								<select name="yerlix_theme_activation[create_front_page]" id="create_front_page">
									<option selected="selected" value="yes"><?php echo _e('Yes', 'yerlix'); ?></option>
									<option value="no"><?php echo _e('No', 'yerlix'); ?></option>
								</select>
								<span class="description"><?php printf(__('Create a page called Home and set it to be the static front page', 'yerlix')); ?></span>
							</fieldset>
						</td>
					</tr>

					<tr valign="top"><th scope="row"><?php _e('Create a blog page?', 'yerlix'); ?></th>
						<td>
							<fieldset><legend class="screen-reader-text"><span><?php _e('Create a blog page?', 'yerlix'); ?></span></legend>
								<select name="yerlix_theme_activation[create_blog_page]" id="create_blog_page">
									<option selected="selected" value="yes"><?php echo _e('Yes', 'yerlix'); ?></option>
									<option value="no"><?php echo _e('No', 'yerlix'); ?></option>
								</select>
								<span class="description"><?php printf(__('Create a page called Blog and set it to be the posts page', 'yerlix')); ?></span>
							</fieldset>
						</td>
					</tr>

					<tr valign="top"><th scope="row"><?php _e('Change permalink structure?', 'yerlix'); ?></th>
						<td>
							<fieldset><legend class="screen-reader-text"><span><?php _e('Update permalink structure?', 'yerlix'); ?></span></legend>
								<?php if ($config_writable) : ?>
									<select name="yerlix_theme_activation[change_permalink_structure]" id="change_permalink_structure">
										<option selected="selected" value="yes"><?php echo _e('Yes', 'yerlix'); ?></option>
										<option value="no"><?php echo _e('No', 'yerlix'); ?></option>
									</select>
									<span class="description"><?php printf(__('Change permalink structure to /&#37;postname&#37;/', 'yerlix')); ?></span>
								<?php else: ?>
									<input type="hidden" name="yerlix_theme_activation[change_permalink_structure]" value="no" />
									<strong class="error" style="color:#c00">No</strong>
								<?php endif; ?>
							</fieldset>
						</td>
					</tr>

				</table>

				<?php submit_button(); ?>
			</form>
		</div>

		<?php
	}

	function yerlix_theme_activation_validate($input) {
		$output = $defaults = yerlix_get_default_theme_activation();

		if (isset($input['first_run'])) {
			if ($input['first_run'] === '1') {
				$input['first_run'] = true;
			}
			$output['first_run'] = $input['first_run'];
		}

		if (isset($input['create_front_page'])) {
			if ($input['create_front_page'] === 'yes') {
				$input['create_front_page'] = true;
			}
			if ($input['create_front_page'] === 'no') {
				$input['create_front_page'] = false;
			}
			$output['create_front_page'] = $input['create_front_page'];
		}

		if (isset($input['create_blog_page'])) {
			if ($input['create_blog_page'] === 'yes') {
				$input['create_blog_page'] = true;
			}
			if ($input['create_blog_page'] === 'no') {
				$input['create_blog_page'] = false;
			}
			$output['create_blog_page'] = $input['create_blog_page'];
		}

		if (isset($input['change_permalink_structure'])) {
			if ($input['change_permalink_structure'] === 'yes') {
				$input['change_permalink_structure'] = true;
			}
			if ($input['change_permalink_structure'] === 'no') {
				$input['change_permalink_structure'] = false;
			}
			$output['change_permalink_structure'] = $input['change_permalink_structure'];
		}


		return apply_filters('yerlix_theme_activation_validate', $output, $input, $defaults);
	}

	function yerlix_theme_activation_action() {
		$yerlix_theme_activation = yerlix_get_theme_activation();

		// add homepage
		if ($yerlix_theme_activation['create_front_page']) {
			$yerlix_theme_activation['create_front_page'] = false;

			$default_pages = array('Home');
			$existing_pages = get_pages();
			$temp = array();

			foreach ($existing_pages as $page) {
				$temp[] = $page->post_title;
			}

			$pages_to_create = array_diff($default_pages, $temp);

			foreach ($pages_to_create as $new_page_title) {
				$add_default_pages = array(
					'post_title' => $new_page_title,
					'post_content' => '',
					'post_status' => 'publish',
					'post_type' => 'page'
				);

				$result = wp_insert_post($add_default_pages);
			}

			$home = get_page_by_title('Home');
			update_option('show_on_front', 'page');
			update_option('page_on_front', $home->ID);

			$home_menu_order = array(
				'ID' => $home->ID,
				'menu_order' => -1
			);
			wp_update_post($home_menu_order);
		}

		// add blog page
		if ($yerlix_theme_activation['create_blog_page']) {
			$yerlix_theme_activation['create_blog_page'] = false;

			$default_pages = array('Blog');
			$existing_pages = get_pages();
			$temp = array();

			foreach ($existing_pages as $page) {
				$temp[] = $page->post_title;
			}

			$pages_to_create = array_diff($default_pages, $temp);

			foreach ($pages_to_create as $new_page_title) {
				$add_default_pages = array(
					'post_title' => $new_page_title,
					'post_content' => '',
					'post_status' => 'publish',
					'post_type' => 'page'
				);
				$result = wp_insert_post($add_default_pages);
			}

			$blog = get_page_by_title('Blog');

			update_option('page_for_posts', $blog->ID);

			$blog_menu_order = array(
				'ID' => $blog->ID,
				'menu_order' => 1
			);
			wp_update_post($blog_menu_order);
		}

		// change permalink structure
		if ($yerlix_theme_activation['change_permalink_structure']) {
			$yerlix_theme_activation['change_permalink_structure'] = false;

			if (get_option('permalink_structure') !== '/%postname%/') {
				update_option('permalink_structure', '/%postname%/');
			}

			global $wp_rewrite;
			$wp_rewrite->init();
			$wp_rewrite->flush_rules();
		}

		update_option('yerlix_theme_activation', $yerlix_theme_activation);
	}

	add_action('admin_init', 'yerlix_theme_activation_action');

	function yerlix_deactivation_action() {
		update_option('yerlix_theme_activation', yerlix_get_default_theme_activation());
	}

	add_action('switch_theme', 'yerlix_deactivation_action');
}