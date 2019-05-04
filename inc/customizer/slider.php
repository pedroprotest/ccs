<?php

// Section - Slider
$wp_customize->add_section( 'ccs_section_slider', array(
  'title'    => esc_html__( 'Slider Settings', 'ccs' ),
  'panel'    => 'ccs_general_panel',
  'priority' => 5,
  )
);

// Setting - Slider Shortcode
$wp_customize->add_setting( 'ccs_slider', array(
  'default' =>  '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Slider Shortcode
$wp_customize->add_control( 'ccs_slider', array(
  'label'    => esc_html__( 'Slider Shortcode', 'ccs' ),
  'description' => esc_html__( 'Insert the name of the slider, form Revolution Sliders', 'ccs' ),
  'section'  => 'ccs_section_slider',
  'type'     => 'text',
  'priority' => 10,
  )
);
