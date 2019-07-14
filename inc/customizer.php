<?php
// Customizer Options

// Theme Customizer Panel
function crew_cs_customizer( $wp_customize ) {
  $wp_customize->add_panel( 'crew_cs_general_panel', array(
    'priority' => 1,
    'title'    => esc_html__( 'Modo de Manutenção', 'crew_cs'),
  ));

  require_once( 'customizer/alpha-color-picker/alpha-color-picker.php' );
  require_once( 'customizer/general-settings.php' ); // 1
  require_once( 'customizer/page-settings.php' ); // 2
  require_once( 'customizer/branding.php' ); // 3
  require_once( 'customizer/background.php' ); // 4
  //require_once( 'customizer/slider.php' ); // 5
  require_once( 'customizer/social-links.php' ); // 6
  require_once( 'customizer/page-content.php' ); // 7
  require_once( 'customizer/contacts.php' ); // 8
  require_once( 'customizer/footer.php' ); // 9

}

add_action( 'customize_register', 'crew_cs_customizer' );

function crew_cs_sanitize_text( $input ) {
  return wp_kses_post( force_balance_tags( $input ) );
}

function crew_cs_sanitize_radio( $input, $setting ) {

  global $wp_customize;

  $control = $wp_customize->get_control( $setting->id );

  if ( array_key_exists( $input, $control->choices ) ) {
    return $input;
  } else {
    return $setting->default;
  }

}
