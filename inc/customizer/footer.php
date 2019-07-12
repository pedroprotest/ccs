<?php

/*----------- Section Footer -----------*/
$wp_customize->add_section( 'ccs_section_footer', array(
  'title'      => esc_html__( 'Rodapé', 'ccs' ),
  'panel'      => 'ccs_general_panel', // Not typically needed.
  'priority'   => 9,
  )
);

/*----------- Footer Text -----------*/
$wp_customize->add_setting( 'ccs_footer' ,array(
  'default' =>  'Empresa © 2019 - Todos os Direitos Reservados',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

$wp_customize->add_control( 'ccs_footer', array(
  'label'     => esc_html__( 'Texto no Rodapé', 'ccs' ),
  'section'   => 'ccs_section_footer',
  'type'      => 'textarea',
  'priority'  => 10,
  )
);

/*----------- Footer Text Color -----------*/
$wp_customize->add_setting( 'ccs_footer_text_color', array(
  'default' => '#fff',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ccs_footer_text_color', array(
  'label'    => esc_html__( 'Cor do Texto', 'ccs' ),
  'section'  => 'ccs_section_footer',
  'priority' => 20,
) ) );


/*----------- Footer Background Color -----------*/
$wp_customize->add_setting( 'ccs_footer_background_color', array(
  'default' => '#1F1F1F',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ccs_footer_background_color', array(
  'label'    => esc_html__( 'Cor de Fundo', 'ccs' ),
  'section'  => 'ccs_section_footer',
  'priority' => 30,
) ) );
