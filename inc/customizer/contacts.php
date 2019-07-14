<?php

/*----------- Contacts Section-----------*/
$wp_customize->add_section( 'crew_cs_section_contacts', array(
  'title'      => esc_html__( 'Contactos', 'crew_cs' ),
  'panel'      => 'crew_cs_general_panel', // Not typically needed.
  'priority'   => 8,
  )
);

/*----------- Contacts Text Description-----------*/
$wp_customize->add_setting( 'crew_cs_description', array(
  'default'           =>  '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control( 'crew_cs_description', array(
  'label'     => esc_html__( 'Descrição', 'crew_cs' ),
  'section'   => 'crew_cs_section_contacts',
  'type'      => 'textarea',
  'priority'  => 10,
  )
);

/*----------- Contacts Phone-----------*/
$wp_customize->add_setting( 'crew_cs_phone', array(
  'default'           =>  '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control( 'crew_cs_phone', array(
  'label'     => esc_html__( 'Telefone', 'crew_cs' ),
  'section'   => 'crew_cs_section_contacts',
  'type'      => 'text',
  'priority'  => 20,
  )
);

/*----------- Contacts Email-----------*/
$wp_customize->add_setting( 'crew_cs_email', array(
  'default'           =>  '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control( 'crew_cs_email', array(
  'label'     => esc_html__( 'Email', 'crew_cs' ),
  'section'   => 'crew_cs_section_contacts',
  'type'      => 'text',
  'priority'  => 30,
  )
);

/*----------- Contacts Background Color -----------*/
$wp_customize->add_setting( 'crew_cs_contacts_background_color', array(
  'default'     => 'rgba(19,19,19,.8)',
) );

$wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'crew_cs_contacts_background_color', array(
  'label'         => __( 'Cor de Fundo', 'crew_cs' ),
  'section'       => 'crew_cs_section_contacts',
  'priority' => 40,
  'show_opacity'  => true, // Optional.
  'palette'	=> array(
      'rgb(150, 50, 220)', // RGB, RGBa, and hex values supported
      'rgba(50,50,50,0.8)',
      'rgba( 255, 255, 255, 0.2 )', // Different spacing = no problem
      '#00CC99' // Mix of color types = no problem
  )
) ) );

/*----------- Contacts Text Color -----------*/
$wp_customize->add_setting( 'crew_cs_contacts_text_color', array(
  'default' => '#19b187',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'crew_cs_contacts_text_color', array(
  'label'    => esc_html__( 'Cor do Texto', 'crew_cs' ),
  'section'  => 'crew_cs_section_contacts',
  'priority' => 50,
) ) );

/*----------- Contacts Links Color -----------*/
$wp_customize->add_setting( 'crew_cs_contacts_links_color', array(
  'default' => '#19b187',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'crew_cs_contacts_links_color', array(
  'label'    => esc_html__( 'Cor dos Links', 'crew_cs' ),
  'section'  => 'crew_cs_section_contacts',
  'priority' => 60,
) ) );
