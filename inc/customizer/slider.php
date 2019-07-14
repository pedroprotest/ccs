<?php

// Section - Slider
$wp_customize->add_section( 'crew_cs_section_slider', array(
  'title'    => esc_html__( 'Slider Settings', 'crew_cs' ),
  'panel'    => 'crew_cs_general_panel',
  'priority' => 5,
  )
);

// Setting - Slider Shortcode
$wp_customize->add_setting( 'crew_cs_slider', array(
  'default' =>  '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

// Control - Slider Shortcode
$wp_customize->add_control( 'crew_cs_slider', array(
  'label'    => esc_html__( 'Slider Shortcode', 'crew_cs' ),
  'description' => esc_html__( 'Insert the name of the slider, form Revolution Sliders', 'crew_cs' ),
  'section'  => 'crew_cs_section_slider',
  'type'     => 'text',
  'priority' => 10,
  )
);
