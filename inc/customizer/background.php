<?php

// Section - Background
$wp_customize->add_section( 'ccs_section_background', array(
  'title'    => esc_html__( 'Background Settings', 'ccs' ),
  'panel'    => 'ccs_general_panel',
  'priority' => 4,
  )
);

// Setting  - Background Color
$wp_customize->add_setting( 'ccs_background_color', array(
  'default' => '#f5f5f5',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Background Color
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ccs_background_color', array(
  'label'    => esc_html__( 'Background Color', 'ccs' ),
  'section'  => 'ccs_section_background',
  'priority' => 10,
) )
);

// Setting - Background Image
$wp_customize->add_setting( 'ccs_background_image', array(
  'default' => '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Background Image
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'ccs_background_image', array(
  'label'    => esc_html__( 'Background Image', 'ccs' ),
  'section'  => 'ccs_section_background',
  'priority' => 20,
  ))
);
