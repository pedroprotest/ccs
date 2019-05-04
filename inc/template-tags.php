<?php

$slider_shortcode = get_theme_mod( 'ccs_slider' );
if ( !empty( $slider_shortcode ) ) {
  echo do_shortcode( $slider_shortcode, true );
}
