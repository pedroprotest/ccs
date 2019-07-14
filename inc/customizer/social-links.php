<?php

// Section - Social Links
$wp_customize->add_section( 'crew_cs_section_social', array(
  'title'          => esc_html__( 'Redes Socias', 'crew_cs' ),
  'panel'          => 'crew_cs_general_panel', // Not typically needed.
  'priority'       => 6,
  )
);

// Setting - Facebook
$wp_customize->add_setting( 'crew_cs_social_facebook', array(
  'default' =>  '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

// Control - Facebook
$wp_customize->add_control( 'crew_cs_social_facebook', array(
  'label'    => esc_html__( 'Facebook', 'crew_cs' ),
  'section'  => 'crew_cs_section_social',
  'type'     => 'text',
  'priority' => 10,
  )
);

// Setting - Twitter
$wp_customize->add_setting( 'crew_cs_social_twitter', array(
  'default' =>  '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

// Control - Twitter
$wp_customize->add_control( 'crew_cs_social_twitter', array(
  'label'    => esc_html__( 'Twitter', 'crew_cs' ),
  'section'  => 'crew_cs_section_social',
  'type'     => 'text',
  'priority' => 20,
  )
);

// Setting - Instagram
$wp_customize->add_setting( 'crew_cs_social_instagram', array(
  'default' =>  '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

// Control - Instagram
$wp_customize->add_control( 'crew_cs_social_instagram', array(
  'label'    => esc_html__( 'Instagram', 'crew_cs' ),
  'section'  => 'crew_cs_section_social',
  'type'     => 'text',
  'priority' => 30,
  )
);

// Setting - Youtube
$wp_customize->add_setting( 'crew_cs_social_youtube', array(
  'default' =>  '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

// Control - Youtube
$wp_customize->add_control( 'crew_cs_social_youtube', array(
  'label'    => esc_html__( 'Youtube', 'crew_cs' ),
  'section'  => 'crew_cs_section_social',
  'type'     => 'text',
  'priority' => 40,
  )
);

// Setting - Linkedin
$wp_customize->add_setting( 'crew_cs_social_linkedin', array(
  'default' =>  '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

// Control - Linkedin
$wp_customize->add_control( 'crew_cs_social_linkedin', array(
  'label'    => esc_html__( 'Linkedin', 'crew_cs' ),
  'section'  => 'crew_cs_section_social',
  'type'     => 'text',
  'priority' => 50,
  )
);

// Setting - Google+
$wp_customize->add_setting( 'crew_cs_social_google', array(
  'default' =>  '',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

// Control - Google+
$wp_customize->add_control( 'crew_cs_social_google', array(
  'label'    => esc_html__( 'Google+', 'crew_cs' ),
  'section'  => 'crew_cs_section_social',
  'type'     => 'text',
  'priority' => 60,
  )
);

// Setting - Email
$wp_customize->add_setting( 'crew_cs_social_email', array(
  'default' =>  'you@domain.com',
  'sanitize_callback' => 'crew_cs_sanitize_text',
) );

// Control - Email
$wp_customize->add_control( 'crew_cs_social_email', array(
  'label'    => esc_html__( 'Email', 'crew_cs' ),
  'section'  => 'crew_cs_section_social',
  'type'     => 'text',
  'priority' => 70,
  )
);
