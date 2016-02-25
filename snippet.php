<?php

    // Logo upload
    $wp_customize->add_section( 'bechhold_home_logo_section' , array(
	    'title'       => __( 'Home-Logo', 'becholdTheme' ),
	    'priority'    => 30,
	    'description' => 'Upload a logo to replace the default site name and description in the header',
	) );

	$wp_customize->add_setting( 'bechhold_home_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bechhold_home_logo', array(
		'label'    => __( 'Home-Logo', 'becholdTheme' ),
		'section'  => 'bechhold_home_logo_section',
		'settings' => 'bechhold_home_logo',
	) ) );
    
    
?>