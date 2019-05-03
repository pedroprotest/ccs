<?php

// Section - Page Content
$wp_customize->add_section( 'ccs_section_content', array(
  'title'      => esc_html__( 'Page Content', 'ccs' ),
  'panel'      => 'ccs_general_panel', // Not typically needed.
  'priority'   => 7,
  )
);

// Setting - Page Title
$wp_customize->add_setting( 'ccs_page_heading', array(
  'default'           =>  '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Page Title
$wp_customize->add_control( 'ccs_page_heading', array(
  'label'     => esc_html__( 'Page Title', 'ccs' ),
  'section'   => 'ccs_section_content',
  'type'      => 'textarea',
  'priority'  => 10,
  )
);

// Setting - Page Content
$wp_customize->add_setting( 'ccs_text', array(
  'default'           =>  '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Page Content
$wp_customize->add_control( 'ccs_text', array(
  'label'     => esc_html__( 'Page Content', 'ccs' ),
  'section'   => 'ccs_section_content',
  'type'      => 'textarea',
  'priority'  => 20,
  )
);

// Setting - Percentage
$wp_customize->add_setting( 'ccs_percentage_completed', array(
  'default' =>  '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Percentage
$wp_customize->add_control( 'ccs_percentage_completed', array(
  'label'     => esc_html__( 'Percentage Completed', 'ccs' ),
  'section'   => 'ccs_section_content',
  'type'      => 'text',
  'priority'  => 30,
  )
);
