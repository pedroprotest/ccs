<?php

// Section - Background
$wp_customize->add_section( 'ccs_section_background', array(
  'title'    => esc_html__( 'Background Settings', 'ccs' ),
  'panel'    => 'ccs_general_panel',
  'priority' => 4,
) );

// Setting  - Background Color
$wp_customize->add_setting( 'ccs_background_color', array(
  'default' => '#f5f5f5',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Background Color
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ccs_background_color', array(
  'label'    => esc_html__( 'Background Color', 'ccs' ),
  'section'  => 'ccs_section_background',
  'priority' => 10,
) ) );

// Setting - Background Image
$wp_customize->add_setting( 'ccs_background_image', array(
  'default' => '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Background Image
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'ccs_background_image', array(
  'label'    => esc_html__( 'Background Image', 'ccs' ),
  'section'  => 'ccs_section_background',
  'priority' => 20,
  ))
);

// Setting - Video MP4
$wp_customize->add_setting( 'ccs_video_mp4', array(
  'default' => '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Video MP4
$wp_customize->add_control(new  WP_Customize_Upload_Control($wp_customize, 'ccs_video_mp4', array(
  'label'    => esc_html__( 'Video .mp4 format', 'ccs' ),
  'section'  => 'ccs_section_background',
  'priority' => 30
) ) );

// Setting - Video WEBM
$wp_customize->add_setting( 'ccs_video_webm', array(
  'default' => '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Video WEBM
$wp_customize->add_control(new  WP_Customize_Upload_Control($wp_customize, 'ccs_video_webm', array(
  'label'    => esc_html__( 'Video .webm format', 'ccs' ),
  'section'  => 'ccs_section_background',
  'priority' => 40
) ) );

// Setting - Video OGV
$wp_customize->add_setting( 'ccs_video_ogv', array(
  'default' => '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Video OGV
$wp_customize->add_control(new  WP_Customize_Upload_Control($wp_customize, 'ccs_video_ogv', array(
  'label'    => esc_html__( 'Video .ogv format', 'ccs' ),
  'section'  => 'ccs_section_background',
  'priority' => 50
) ) );

// Setting - Video Image Cover
$wp_customize->add_setting( 'ccs_video_cover', array(
  'default' => '',
  'sanitize_callback' => 'ccs_sanitize_text',
) );

// Control - Video Image Cover
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'ccs_video_cover', array(
  'label'    => esc_html__( 'Image Video Cover', 'ccs' ),
  'section'  => 'ccs_section_background',
  'priority' => 60,
  ))
);
