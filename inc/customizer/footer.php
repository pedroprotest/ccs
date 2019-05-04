<?php

// Section - Footer
$wp_customize->add_section( 'ccs_section_footer', array(
  'title'      => esc_html__( 'Footer', 'ccs' ),
  'panel'      => 'ccs_general_panel', // Not typically needed.
  'priority'   => 9,
  )
);

// Setting - Footer Content
$wp_customize->add_setting( 'ccs_footer' ,array(
  'default' =>  'Empresa © 2019 - Todos os Direitos Reservados',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Footer Content
$wp_customize->add_control( 'ccs_footer', array(
  'label'     => esc_html__( 'Footer Text', 'ccs' ),
  'section'   => 'ccs_section_footer',
  'type'      => 'textarea',
  'priority'  => 40,
  )
);
