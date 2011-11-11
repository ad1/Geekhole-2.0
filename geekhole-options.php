<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'geekhole_options', 'geekhole_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Geekhole Options', 'geekholetheme' ), __( 'Geekhole Options', 'geekholetheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Options', 'geekholetheme' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'geekholetheme' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'geekhole_options' ); ?>
			<?php $options = get_option( 'geekhole_theme_options' ); ?>

			<table class="form-table">
				<tr valign="top"><th scope="row"><?php _E( 'Title', 'geekholetheme' ); ?></th>
					<td>
						<input id="geekhole_theme_options[boxtitle]" class="regular-text" type="text" name="geekhole_theme_options[boxtitle]" value="<?php esc_attr_e( $options['boxtitle'] ); ?>" />
						<label class="description" for="geekhole_theme_options[boxtitle]"><?php _e( 'Text which is shown as a title in the "about"-tile.', 'geekholetheme' ); ?></label>
					</td>
				</tr>
		
				<tr valign="top"><th scope="row"><?php _e( 'About Geekhole', 'geekholetheme' ); ?></th>
					<td>
						<textarea id="geekhole_theme_options[aboutgeekholetext]" class="large-text" cols="50" rows="10" name="geekhole_theme_options[aboutgeekholetext]"><?php echo esc_textarea( $options['aboutgeekholetext'] ); ?></textarea>
						<label class="description" for="geekhole_theme_options[aboutgeekholetext]"><?php _e( 'Text which describes Geekhole and is shown in the "about"-tile.', 'geekholetheme' ); ?></label>
					</td>
				</tr>
				
				<tr valign="top"><th scope="row"><?php _E( 'Footer', 'geekholetheme' ); ?></th>
					<td>
						<input id="geekhole_theme_options[footer]" class="large-text" type="text" name="geekhole_theme_options[footer]" value="<?php esc_attr_e( $options['footer'] ); ?>" />
						<label class="description" for="geekhole_theme_options[footer]"><?php _e( 'Text which is shown at the bottom of every page.. <strong>NO HTML FILTERING!</strong>', 'geekholetheme' ); ?></label>
					</td>
				</tr>
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'geekholetheme' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	$input['boxtitle'] = wp_filter_post_kses( $input['boxtitle'] );
	$input['aboutgeekholetext'] = wp_filter_post_kses( $input['aboutgeekholetext'] );
	$input['footer'] = $input['footer'];

	return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/