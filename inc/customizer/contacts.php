<?php

/*----------- Contacts Section-----------*/
$wp_customize->add_section( 'ccs_section_contacts', array(
  'title'      => esc_html__( 'Contactos', 'ccs' ),
  'panel'      => 'ccs_general_panel', // Not typically needed.
  'priority'   => 8,
  )
);

/*----------- Contacts Text Description-----------*/
$wp_customize->add_setting( 'ccs_description', array(
  'default'           =>  '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

$wp_customize->add_control( 'ccs_description', array(
  'label'     => esc_html__( 'Descrição', 'ccs' ),
  'section'   => 'ccs_section_contacts',
  'type'      => 'textarea',
  'priority'  => 10,
  )
);

/*----------- Contacts Phone-----------*/
$wp_customize->add_setting( 'ccs_phone', array(
  'default'           =>  '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

$wp_customize->add_control( 'ccs_phone', array(
  'label'     => esc_html__( 'Telefone', 'ccs' ),
  'section'   => 'ccs_section_contacts',
  'type'      => 'text',
  'priority'  => 20,
  )
);

/*----------- Contacts Email-----------*/
$wp_customize->add_setting( 'ccs_email', array(
  'default'           =>  '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

$wp_customize->add_control( 'ccs_email', array(
  'label'     => esc_html__( 'Email', 'ccs' ),
  'section'   => 'ccs_section_contacts',
  'type'      => 'text',
  'priority'  => 30,
  )
);

/*----------- Contacts Background Color -----------*/
$wp_customize->add_setting( 'ccs_contacts_background_color', array(
  'default' => '#19b187',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ccs_contacts_background_color', array(
  'label'    => esc_html__( 'Cor de fundo', 'ccs' ),
  'section'  => 'ccs_section_contacts',
  'priority' => 40,
) ) );

/*----------- Contacts Text Color -----------*/
$wp_customize->add_setting( 'ccs_contacts_text_color', array(
  'default' => '#19b187',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ccs_contacts_text_color', array(
  'label'    => esc_html__( 'Cor do Texto', 'ccs' ),
  'section'  => 'ccs_section_contacts',
  'priority' => 50,
) ) );

/*----------- Contacts Links Color -----------*/
$wp_customize->add_setting( 'ccs_contacts_links_color', array(
  'default' => '#19b187',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ccs_contacts_links_color', array(
  'label'    => esc_html__( 'Cor dos Links', 'ccs' ),
  'section'  => 'ccs_section_contacts',
  'priority' => 60,
) ) );
