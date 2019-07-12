<?php

/*----------- Content Section -----------*/
$wp_customize->add_section( 'ccs_section_content', array(
  'title'      => esc_html__( 'Conteúdo Principal', 'ccs' ),
  'panel'      => 'ccs_general_panel', // Not typically needed.
  'priority'   => 7,
  )
);

/*----------- Content Title -----------*/
$wp_customize->add_setting( 'ccs_page_heading', array(
  'default'           =>  '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

$wp_customize->add_control( 'ccs_page_heading', array(
  'label'     => esc_html__( 'Titlo', 'ccs' ),
  'section'   => 'ccs_section_content',
  'type'      => 'textarea',
  'priority'  => 10,
  )
);

/*----------- Content Text -----------*/
$wp_customize->add_setting( 'ccs_text', array(
  'default'           =>  '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

$wp_customize->add_control( 'ccs_text', array(
  'label'     => esc_html__( 'Descrição', 'ccs' ),
  'section'   => 'ccs_section_content',
  'type'      => 'textarea',
  'priority'  => 20,
  )
);

/*----------- Content Title Color -----------*/
$wp_customize->add_setting( 'ccs_page_heading_color', array(
  'default' => '#19b187',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ccs_page_heading_color', array(
  'label'    => esc_html__( 'Cor do Titlo', 'ccs' ),
  'section'  => 'ccs_section_content',
  'priority' => 30,
) ) );

/*----------- Content text Color -----------*/
$wp_customize->add_setting( 'ccs_page_text_color', array(
  'default' => '#19b187',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ccs_page_text_color', array(
  'label'    => esc_html__( 'Cor do Texto', 'ccs' ),
  'section'  => 'ccs_section_content',
  'priority' => 40,
) ) );
