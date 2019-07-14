<?php

/*----------- Content Section -----------*/
$wp_customize->add_section( 'crew_cs_section_content', array(
  'title'      => esc_html__( 'Conteúdo Principal', 'crew_cs' ),
  'panel'      => 'crew_cs_general_panel', // Not typically needed.
  'priority'   => 7,
  )
);

/*----------- Content Title -----------*/
$wp_customize->add_setting( 'crew_cs_page_heading', array(
  'default'           =>  '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control( 'crew_cs_page_heading', array(
  'label'     => esc_html__( 'Titlo', 'crew_cs' ),
  'section'   => 'crew_cs_section_content',
  'type'      => 'textarea',
  'priority'  => 10,
  )
);

/*----------- Content Text -----------*/
$wp_customize->add_setting( 'crew_cs_text', array(
  'default'           =>  '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control( 'crew_cs_text', array(
  'label'     => esc_html__( 'Descrição', 'crew_cs' ),
  'section'   => 'crew_cs_section_content',
  'type'      => 'textarea',
  'priority'  => 20,
  )
);

/*----------- Content Background Color -----------*/
$wp_customize->add_setting( 'crew_cs_page_background_color', array(
  'default'     => 'rgba(51,51,51,.7)',
) );

$wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'crew_cs_page_background_color', array(
  'label'         => __( 'Cor de Fundo', 'crew_cs' ),
  'section'       => 'crew_cs_section_content',
  'priority' => 30,
  'show_opacity'  => true, // Optional.
  'palette'	=> array(
      'rgb(150, 50, 220)', // RGB, RGBa, and hex values supported
      'rgba(50,50,50,0.8)',
      'rgba( 255, 255, 255, 0.2 )', // Different spacing = no problem
      '#00CC99' // Mix of color types = no problem
  )
) ) );

/*----------- Content Title Color -----------*/
$wp_customize->add_setting( 'crew_cs_page_heading_color', array(
  'default' => '#19b187',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'crew_cs_page_heading_color', array(
  'label'    => esc_html__( 'Cor do Titlo', 'crew_cs' ),
  'section'  => 'crew_cs_section_content',
  'priority' => 40,
) ) );

/*----------- Content text Color -----------*/
$wp_customize->add_setting( 'crew_cs_page_text_color', array(
  'default' => '#19b187',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'crew_cs_page_text_color', array(
  'label'    => esc_html__( 'Cor do Texto', 'crew_cs' ),
  'section'  => 'crew_cs_section_content',
  'priority' => 50,
) ) );
