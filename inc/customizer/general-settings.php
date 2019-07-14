<?php

// Section - General Settings
$wp_customize->add_section( 'crew_cs_section_general', array(
  'title'    => esc_html__( 'General', 'crew_cs' ),
  'panel'    => 'crew_cs_general_panel',
  'priority' => 1,
  )
);

// Setting - Preview
$wp_customize->add_setting( 'crew_cs_status', array(
  'default' => '0',
  'sanitize_callback' => 'crew_cs_sanitize_radio',
) );

// Control - Preview
$wp_customize->add_control( 'crew_cs_status', array(
  'label'       => esc_html__( 'Status', 'crew_cs' ),
  'description' => esc_html__( 'Set the coming Soon plugin status', 'crew_cs' ),
  'section'     => 'crew_cs_section_general',
  'type'        => 'radio',
  'choices' => array(
    '0' => __( 'Off', 'crew_cs' ),
    '1' => __( 'Coming Soon', 'crew_cs' ),
    '2' => __( 'Maintenance', 'crew_cs' ),
  ),
  'priority'    => 10,
  )
);

// Setting - Preview
$wp_customize->add_setting( 'crew_cs_preview', array(
  'default' => '1',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

// Control - Preview
/*$wp_customize->add_control( 'crew_cs_preview', array(
  'label'       => esc_html__( 'Preview Coming Soon Page?', 'crew_cs' ),
  'description' => esc_html__( 'Refresh this page page after saving in order to see the change.  This is used to preview your coming soon page in the theme customizer.', 'crew_cs' ),
  'section'     => 'crew_cs_section_general',
  'type'        => 'checkbox',
  'priority'    => 20,
  )
);*/

// Setting  - Primary Color
$wp_customize->add_setting( 'crew_cs_status_color', array(
  'default' => '#19b187',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

// Control - Primary Color
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'crew_cs_status_color', array(
  'label'    => esc_html__( 'Cor do Status', 'crew_cs' ),
  'section'  => 'crew_cs_section_general',
  'priority' => 20,
) ) );


// Setting - Custom crew_cs
$wp_customize->add_setting( 'crew_cs_custom_crew_cs', array(
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

// Control - Custom crew_cs
$wp_customize->add_control( 'crew_cs_custom_crew_cs', array(
  'label'          => esc_html__( 'Custom CSS', 'crew_cs' ),
  'section' => 'crew_cs_section_general',
  'type' => 'textarea',
  'priority'   => 30,
  )
);
