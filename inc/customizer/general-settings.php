<?php

// Section - General Settings
$wp_customize->add_section( 'ccs_section_general', array(
  'title'    => esc_html__( 'General', 'ccs' ),
  'panel'    => 'ccs_general_panel',
  'priority' => 1,
  )
);

// Setting - Preview
$wp_customize->add_setting( 'ccs_status', array(
  'default' => '0',
  'sanitize_callback' => 'ccs_sanitize_radio',
) );

// Control - Preview
$wp_customize->add_control( 'ccs_status', array(
  'label'       => esc_html__( 'Status', 'ccs' ),
  'description' => esc_html__( 'Set the coming Soon plugin status', 'ccs' ),
  'section'     => 'ccs_section_general',
  'type'        => 'radio',
  'choices' => array(
    '0' => __( 'Off', 'ccs' ),
    '1' => __( 'Coming Soon', 'ccs' ),
    '2' => __( 'Maintenance', 'ccs' ),
  ),
  'priority'    => 10,
  )
);

// Setting - Preview
$wp_customize->add_setting( 'ccs_preview', array(
  'default' => '1',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Preview
$wp_customize->add_control( 'ccs_preview', array(
  'label'       => esc_html__( 'Preview Coming Soon Page?', 'ccs' ),
  'description' => esc_html__( 'Refresh this page page after saving in order to see the change.  This is used to preview your coming soon page in the theme customizer.', 'ccs' ),
  'section'     => 'ccs_section_general',
  'type'        => 'checkbox',
  'priority'    => 20,
  )
);

// Setting - Custom ccs
$wp_customize->add_setting( 'ccs_custom_ccs', array(
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Custom ccs
$wp_customize->add_control( 'ccs_custom_ccs', array(
  'label'          => esc_html__( 'Custom CSS', 'ccs' ),
  'section' => 'ccs_section_general',
  'type' => 'textarea',
  'priority'   => 30,
  )
);
