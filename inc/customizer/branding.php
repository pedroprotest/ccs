<?php

// Section - Logo
$wp_customize->add_section( 'ccs_section_branding', array(
  'title'     => esc_html__( 'Site Logo & Favicon', 'ccs' ),
  'panel'     => 'ccs_general_panel', // Not typically needed.
  'priority'  => 3,
  )
);

// Setting - Favicon
$wp_customize->add_setting( 'ccs_favicon' ,array(
  'default' => '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Favicon
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'ccs_favicon', array(
  'label'        => esc_html__( 'Favicon', 'ccs' ),
  'description'  => esc_html__( 'Recommended size: 512px by 512px', 'ccs' ),
  'section'      => 'ccs_section_branding',
  'priority'     => 10,
  ))
);

// Setting - Logo
$wp_customize->add_setting( 'ccs_logo' ,array(
  'default' => '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Logo
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'ccs_logo', array(
  'label'        => esc_html__( 'Logo Image', 'ccs' ),
  'description'  => esc_html__( 'Recommended size: 80px by 80px', 'ccs' ),
  'section'      => 'ccs_section_branding',
  'priority'     => 10,
  ))
);
