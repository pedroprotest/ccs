<?php

/*----------- Section Branding -----------*/
$wp_customize->add_section( 'crew_cs_section_branding', array(
  'title'     => esc_html__( 'Logo & Favicon', 'crew_cs' ),
  'panel'     => 'crew_cs_general_panel', // Not typically needed.
  'priority'  => 3,
  )
);

/*----------- Logo -----------*/
$wp_customize->add_setting( 'crew_cs_logo' ,array(
  'default' => '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'crew_cs_logo', array(
  'label'        => esc_html__( 'Logo', 'crew_cs' ),
  'description'  => esc_html__( 'Tamanho Recomendado: 80px by 80px', 'crew_cs' ),
  'section'      => 'crew_cs_section_branding',
  'priority'     => 10,
  ))
);

/*----------- Favicon -----------*/
$wp_customize->add_setting( 'crew_cs_favicon' ,array(
  'default' => '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'crew_cs_favicon', array(
  'label'        => esc_html__( 'Favicon', 'crew_cs' ),
  'description'  => esc_html__( 'Tamanho Recomendado: 512px by 512px', 'crew_cs' ),
  'section'      => 'crew_cs_section_branding',
  'priority'     => 20,
  ))
);
