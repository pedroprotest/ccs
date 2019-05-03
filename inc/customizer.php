<?php
// Customizer Options

// Theme Customizer Panel
function ccs_customizer( $wp_customize ) {
  $wp_customize->add_panel( 'ccs_general_panel', array(
    'priority' => 1,
    'title'    => esc_html__( 'Coming Soon Settings', 'ccs'),
  ));

  require_once( 'customizer/general-settings.php' ); // 1
  require_once( 'customizer/page-settings.php' ); // 2
  require_once( 'customizer/branding.php' ); // 3
  require_once( 'customizer/background.php' ); // 4
  require_once( 'customizer/slider.php' ); // 5
  require_once( 'customizer/social-links.php' ); // 6
  require_once( 'customizer/page-content.php' ); // 7
  require_once( 'customizer/footer.php' ); // 8

}

add_action( 'customize_register', 'ccs_customizer' );

function ccs_sanitize_text( $input ) {
  return wp_kses_post( force_balance_tags( $input ) );
}

function ccs_sanitize_radio( $input, $setting ) {

  global $wp_customize;

  $control = $wp_customize->get_control( $setting->id );

  if ( array_key_exists( $input, $control->choices ) ) {
    return $input;
  } else {
    return $setting->default;
  }

}
