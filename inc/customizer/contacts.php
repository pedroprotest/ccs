<?php

// Section - Page Content
$wp_customize->add_section( 'ccs_section_contacts', array(
  'title'      => esc_html__( 'Contacts', 'ccs' ),
  'panel'      => 'ccs_general_panel', // Not typically needed.
  'priority'   => 8,
  )
);

// Setting - Page Title
$wp_customize->add_setting( 'ccs_description', array(
  'default'           =>  '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Page Title
$wp_customize->add_control( 'ccs_description', array(
  'label'     => esc_html__( 'Description', 'ccs' ),
  'section'   => 'ccs_section_contacts',
  'type'      => 'textarea',
  'priority'  => 10,
  )
);

// Setting - Phone
$wp_customize->add_setting( 'ccs_phone', array(
  'default'           =>  '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Phone
$wp_customize->add_control( 'ccs_phone', array(
  'label'     => esc_html__( 'Telephone', 'ccs' ),
  'section'   => 'ccs_section_contacts',
  'type'      => 'text',
  'priority'  => 20,
  )
);


// Setting - Phone
$wp_customize->add_setting( 'ccs_email', array(
  'default'           =>  '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Phone
$wp_customize->add_control( 'ccs_email', array(
  'label'     => esc_html__( 'Email', 'ccs' ),
  'section'   => 'ccs_section_contacts',
  'type'      => 'text',
  'priority'  => 30,
  )
);
