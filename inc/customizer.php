<?php
function bechhold_theme_customizer( $wp_customize ) {

    // Main Color
    $wp_customize->add_setting( 'bechhold_main_color', array(
        'default'           => '#6d3232',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bechhold_main_color', array(
        'label'	   => 'Main Color',
        'section'  => 'colors',
        'settings' => 'bechhold_main_color',
    ) ) );
    
    // Second Color
        $wp_customize->add_setting( 'bechhold_second_color', array(
        'default'           => '#4d575e',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bechhold_second_color', array(
        'label'	   => 'Second Color',
        'section'  => 'colors',
        'settings' => 'bechhold_second_color',
    ) ) );

    // Background Image upload
    $wp_customize->add_section( 'bechhold_BG_section' , array(
	    'title'       => __( 'Background Image', 'bechholdTheme' ),
	    'priority'    => 30,
	    'description' => 'Upload a bg to replace the default site name and description in the header',
	) );

	$wp_customize->add_setting( 'bechhold_BG', array(
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bechhold_BG', array(
		'label'    => __( 'Background Image', 'bechholdTheme' ),
		'section'  => 'bechhold_BG_section',
		'settings' => 'bechhold_BG',
	) ) );
    

	// Set site name and description to be previewed in real-time
	$wp_customize->get_setting('blogname')->transport='postMessage';
	$wp_customize->get_setting('blogdescription')->transport='postMessage';

	// Enqueue scripts for real-time preview
	wp_enqueue_script( 'bechold-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'jquery' ) );
 

}
add_action('customize_register', 'bechhold_theme_customizer');


/**
 * Sanitizes a hex color. Identical to core's sanitize_hex_color(), which is not available on the wp_head hook.
 *
 * Returns either '', a 3 or 6 digit hex color (with #), or null.
 * For sanitizing values without a #, see sanitize_hex_color_no_hash().
 *
 * @since 1.7
 */
function bechhold_sanitize_hex_color( $firstColor ) {
	if ( '' === $firstColor )
		return '';

	// 3 or 6 hex digits, or the empty string.
	if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $firstColor ) )
		return $firstColor;

	return null;
}

/**
 * Add CSS in <head> for styles handled by the theme customizer
 *
 * @since 1.5
 */
function bechhold_add_customizer_css() {
	$firstColor = bechhold_sanitize_hex_color( get_theme_mod( 'bechhold_main_color' ) );
        $secondColor = bechhold_sanitize_hex_color( get_theme_mod( 'bechhold_second_color' ) );
	?>
	<!-- Debut customizer CSS -->
	<style>
		body {
			border-color: <?php echo $firstColor; ?>;
		}
		a, a:visited {
			color: <?php echo $firstColor; ?>;
		}
		.main-navigation a:hover,
		.main-navigation .sub-menu a:hover,
		.main-navigation .children a:hover,
		.main-navigation a:focus,
		.main-navigation a:active,
		.main-navigation .current-menu-item > a,
		.main-navigation .current_page_item > a,
		.debut-lang:hover {
			background-color: <?php echo $firstColor; ?>;
		}
	</style>
<?php }
add_action( 'wp_head', 'bechhold_add_customizer_css' );