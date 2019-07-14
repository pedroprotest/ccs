<?php

/*----------- Section Background -----------*/
$wp_customize->add_section( 'crew_cs_section_background', array(
  'title'    => esc_html__( 'Definições de Fundo', 'crew_cs' ),
  'panel'    => 'crew_cs_general_panel',
  'priority' => 4,
) );


/*----------- Background Image -----------*/
$wp_customize->add_setting( 'crew_cs_background_image', array(
  'default' => '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'crew_cs_background_image', array(
  'label'    => esc_html__( 'Background Image', 'crew_cs' ),
  'section'  => 'crew_cs_section_background',
  'priority' => 20,
  ))
);

/*----------- Video MP4 -----------*/
$wp_customize->add_setting( 'crew_cs_video_mp4', array(
  'default' => '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control(new  WP_Customize_Upload_Control($wp_customize, 'crew_cs_video_mp4', array(
  'label'    => esc_html__( 'Video .mp4 format', 'crew_cs' ),
  'section'  => 'crew_cs_section_background',
  'priority' => 30
) ) );

/*----------- Video WEBM -----------*/
$wp_customize->add_setting( 'crew_cs_video_webm', array(
  'default' => '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control(new  WP_Customize_Upload_Control($wp_customize, 'crew_cs_video_webm', array(
  'label'    => esc_html__( 'Video .webm format', 'crew_cs' ),
  'section'  => 'crew_cs_section_background',
  'priority' => 40
) ) );

/*----------- Video OGV-----------*/
$wp_customize->add_setting( 'crew_cs_video_ogv', array(
  'default' => '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control(new  WP_Customize_Upload_Control($wp_customize, 'crew_cs_video_ogv', array(
  'label'    => esc_html__( 'Video .ogv format', 'crew_cs' ),
  'section'  => 'crew_cs_section_background',
  'priority' => 50
) ) );

/*----------- Video Image Cover -----------*/
$wp_customize->add_setting( 'crew_cs_video_cover', array(
  'default' => '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'crew_cs_video_cover', array(
  'label'    => esc_html__( 'Image Video Cover', 'crew_cs' ),
  'section'  => 'crew_cs_section_background',
  'priority' => 60,
  ))
);


/*----------- Background Color -----------*/
$wp_customize->add_setting( 'crew_cs_background_color', array(
  'default' => '#f5f5f5',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'crew_cs_background_color', array(
  'label'    => esc_html__( 'Background Color', 'crew_cs' ),
  'section'  => 'crew_cs_section_background',
  'priority' => 70,
) ) );
