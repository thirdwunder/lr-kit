<?php
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
/**
 * This function introduces the theme options into the 'Appearance' menu and into a top-level
 * 'Third Wunder Theme' menu.
 */
function lr_theme_menu() {

	add_theme_page(
		'LR Theme', 					// The title to be displayed in the browser window for this page.
		'LR Theme',					// The text to be displayed for this menu item
		'administrator',					// Which type of users can see this menu item
		'lr_theme_options',			// The unique ID - that is, the slug - for this menu item
		'lr_theme_display'				// The name of the function to call when rendering this menu's page
	);

	add_menu_page(
		'LR Theme',					// The value used to populate the browser's title bar when the menu page is active
		'LR Theme',					// The text of the menu in the administrator's sidebar
		'administrator',					// What roles are able to access the menu
		'lr_theme_menu',				// The ID used to bind submenu items to this menu
		'lr_theme_display'				// The callback function used to render this menu
	);

  add_submenu_page(
		'lr_theme_menu',
		__( 'General Options', 'tw' ),
		__( 'General Options', 'tw' ),
		'administrator',
		'lr_theme_general_options',
		create_function( null, 'lr_theme_display( "general_options" );' )
	);
} // end lr_theme_menu
add_action( 'admin_menu', 'lr_theme_menu' );

function lr_theme_display( $active_tab = '' ) {
?>
	<!-- Create a header in the default WordPress 'wrap' container -->
	<div class="wrap">

		<div id="icon-themes" class="icon32"></div>
		<h2><?php _e( 'Luxury Retreats Theme Options', 'tw' ); ?></h2>
		<?php settings_errors(); ?>
		<?php
      if( isset( $_GET[ 'tab' ] ) ) {
  			$active_tab = $_GET[ 'tab' ];
  		} else if( $active_tab == 'general_options' ) {
  			$active_tab = 'general_options';
  		}
		?>
		<h2 class="nav-tab-wrapper">
			<a href="?page=lr_theme_options&tab=general_options" class="nav-tab <?php echo $active_tab == 'general_options' ? 'nav-tab-active' : ''; ?>"><?php _e( 'General Options', 'tw' ); ?></a>
		</h2>
		<form method="post" action="options.php">
			<?php

				if( $active_tab == 'general_options' ) {
					settings_fields( 'lr_theme_general_options' );
					do_settings_sections( 'lr_theme_general_options' );
				}
				submit_button();
			?>
		</form>

	</div><!-- /.wrap -->
<?php
} // end lr_theme_display



/* ------------------------------------------------------------------------ *
 * General Options
 * ------------------------------------------------------------------------ */
function lr_theme_default_general_options() {
	$defaults = array();
	return apply_filters( 'lr_theme_default_general_options', $defaults );
} // end tw_theme_default_general_options


function lr_general_options_callback() {
	echo '<p>' . __( 'Theme General Options', 'tw' ) . '</p>';
} // end lr_general_options_callback


function lr_initialize_theme_options() {

	// If the theme options don't exist, create them.
	if( false == get_option( 'lr_theme_general_options' ) ) {
		add_option( 'lr_theme_general_options',
		apply_filters( 'lr_theme_default_general_options',
		lr_theme_default_general_options() ) );
	}

  add_settings_section(
		'menu_settings_section',			// ID used to identify this section and with which to register options
		__( 'Menu Options', 'tw' ),		// Title to be displayed on the administration page
		'lr_general_menu_options_callback',	// Callback used to render the description of the section
		'lr_theme_general_options'		// Page on which to add this section of options
	);

	add_settings_field(
		'enable_branded_header',
		__( 'Enabled Branded Header', 'tw' ),
		'lr_enable_branded_header_callback',
		'lr_theme_general_options',
		'menu_settings_section',
		array(
			__( 'Enable the Luxury Retreats branded header.', 'tw' ),
		)
	);
	add_settings_field(
		'enable_branded_footer',
		__( 'Enabled Branded Footer', 'tw' ),
		'lr_enable_branded_footer_callback',
		'lr_theme_general_options',
		'menu_settings_section',
		array(
			__( 'Enable the Luxury Retreats branded header.', 'tw' ),
		)
	);

	add_settings_field(
		'enable_legacy_properties',
		__( 'Enabled Legacy Properties', 'tw' ),
		'lr_enable_legacy_properties_callback',
		'lr_theme_general_options',
		'menu_settings_section',
		array(
			__( 'Enable the legacy properties system.', 'tw' ),
		)
	);



	add_settings_section(
		'menu_settings_section',			// ID used to identify this section and with which to register options
		__( 'Form Options', 'tw' ),		// Title to be displayed on the administration page
		'lr_general_form_options_callback',	// Callback used to render the description of the section
		'lr_theme_general_options'		// Page on which to add this section of options
	);

  add_settings_field(
		'enable_top_menu',
		__( 'Newsletter Form', 'tw' ),
		'lr_select_gform_callback',
		'lr_theme_general_options',
		'menu_settings_section',
		array(
			__( 'Enable a menu area above the main navigation.', 'tw' ),
		)
	);


	// Finally, we register the fields with WordPress
	register_setting(
		'lr_theme_general_options',
		'lr_theme_general_options'
	);


} // end tw_initialize_theme_options
add_action( 'admin_init', 'lr_initialize_theme_options' );


function lr_enable_branded_header_callback(){
  $options = get_option( 'lr_theme_general_options' );

  $html = '<input type="checkbox" id="enable_branded_header" name="lr_theme_general_options[enable_branded_header]" value="1"' . checked( 1, $options['enable_branded_header'], false ) . '/>';
  $html .= '&nbsp;';
  $html .= '<label for="enable_branded_header">Enable branded Luxury Retreats Header</label>';

  echo $html;
}

function lr_enable_branded_footer_callback(){
  $options = get_option( 'lr_theme_general_options' );

  $html = '<input type="checkbox" id="enable_branded_footer" name="lr_theme_general_options[enable_branded_footer]" value="1"' . checked( 1, $options['enable_branded_footer'], false ) . '/>';
  $html .= '&nbsp;';
  $html .= '<label for="enable_branded_footer">Enable branded Luxury Retreats Footer</label>';

  echo $html;
}

function lr_enable_legacy_properties_callback(){
  $options = get_option( 'lr_theme_general_options' );

  $html = '<input type="checkbox" id="enable_legacy" name="lr_theme_general_options[enable_legacy]" value="1"' . checked( 1, $options['enable_legacy'], false ) . '/>';
  $html .= '&nbsp;';
  $html .= '<label for="enable_legacy">Enable legacy properties</label>';

  echo $html;
}

if ( is_plugin_active( 'gravityforms/gravityforms.php' ) ) {
  function lr_select_gform_callback($args) {
    $forms = RGFormsModel::get_forms( null, 'title' );
    $forms_array = array(''=>'');
    foreach( $forms as $form ){
      $forms_array[$form->id] = $form->title;
    }
  	// First, we read the options collection
  	$options = get_option('lr_theme_general_options');
  	// Next, we update the name attribute to access this element's ID in the context of the display options array
  	// We also access the show_header element of the options collection in the call to the checked() helper function
		$html = '<select id="newsletter_gform" name="lr_theme_general_options[newsletter_gform]">';
		  $html .= '<option value="0">' . __( 'Select the newsletter form', 'tw' ) . '</option>';
		  foreach($forms_array as $id=>$name){
        $html .= '<option value="'.$id.'"' . selected( $options['newsletter_gform'], $id, false) . '>' . $name . '</option>';
		  }
    $html .= '</select>';
  	echo $html;

  } // end tw_enable_top_menu_callback
}