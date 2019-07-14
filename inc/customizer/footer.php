<?php

/*----------- Section Footer -----------*/
$wp_customize->add_section( 'crew_cs_section_footer', array(
  'title'      => esc_html__( 'Rodapé', 'crew_cs' ),
  'panel'      => 'crew_cs_general_panel', // Not typically needed.
  'priority'   => 9,
  )
);

/*----------- Footer Text -----------*/
$wp_customize->add_setting( 'crew_cs_footer' ,array(
  'default' =>  'Empresa © 2019 - Todos os Direitos Reservados',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control( 'crew_cs_footer', array(
  'label'     => esc_html__( 'Texto no Rodapé', 'crew_cs' ),
  'section'   => 'crew_cs_section_footer',
  'type'      => 'textarea',
  'priority'  => 10,
  )
);

/*----------- Footer Text Color -----------*/
$wp_customize->add_setting( 'crew_cs_footer_text_color', array(
  'default' => '#fff',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'crew_cs_footer_text_color', array(
  'label'    => esc_html__( 'Cor do Texto', 'crew_cs' ),
  'section'  => 'crew_cs_section_footer',
  'priority' => 20,
) ) );

/*----------- Footer Background Color -----------*/
$wp_customize->add_setting( 'crew_cs_footer_background_color', array(
  'default'     => 'rgba(51,51,51,.7)',
) );

$wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'crew_cs_footer_background_color', array(
  'label'         => __( 'Cor de Fundo', 'crew_cs' ),
  'section'       => 'crew_cs_section_footer',
  'priority' => 30,
  'show_opacity'  => true, // Optional.
  'palette'	=> array(
      'rgb(150, 50, 220)', // RGB, RGBa, and hex values supported
      'rgba(50,50,50,0.8)',
      'rgba( 255, 255, 255, 0.2 )', // Different spacing = no problem
      '#00CC99' // Mix of color types = no problem
  )
) ) );

/*----------- Footer Border Color -----------*/
$wp_customize->add_setting( 'crew_cs_footer_border_color', array(
  'default'     => 'rgba(5,97,156,.8)',
) );

$wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'crew_cs_footer_border_color', array(
  'label'         => __( 'Cor da Borda', 'crew_cs' ),
  'section'       => 'crew_cs_section_footer',
  'priority' => 30,
  'show_opacity'  => true, // Optional.
  'palette'	=> array(
      'rgb(150, 50, 220)', // RGB, RGBa, and hex values supported
      'rgba(50,50,50,0.8)',
      'rgba( 255, 255, 255, 0.2 )', // Different spacing = no problem
      '#00CC99' // Mix of color types = no problem
  )
) ) );
