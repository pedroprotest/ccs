<?php
/**
 * Plugin Name: Modo de Manutenção
 * Plugin URI:  https://crew.pt
 * Description: Plugin para gerir template de modo de manutenção.
 * Version:     1.5.0
 * Author:      Crew
 * Author URI:  https://crew.pt
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: crew_cs
 * Domain Path: /languages
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// Define plugin constants
define('CREW_CS_PLUGIN_PATH', plugin_dir_path(__FILE__)); // Example output: /Applications/MAMP/htdocs/wordpress/wp-content/plugins/seed_csp4/
define('CREW_CS_PLUGIN_URL', plugin_dir_url(__FILE__)); // Example output: http://localhost:8888/wordpress/wp

// loads the text domain for translation
function crew_cs_load_plugin_textdomain() {
	load_plugin_textdomain( 'crew_cs', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}

add_action( 'plugins_loaded', 'crew_cs_load_plugin_textdomain' );


//Loading Plugin Theme Customizer Options
require_once( 'inc/customizer.php' );

// Redirect code that checks if on WP login page
function crew_cs_skip_redirect_on_login () {

  global $pagenow;

  if ('wp-login.php' == $pagenow) {
    return;
  } else {
    if( get_theme_mod('crew_cs_status') != 0 ) {
      add_action( 'template_redirect', 'crew_cs_template_redirect' );
      add_action( 'admin_bar_menu', 'admin_bar_menu', 1000 );
    }
  }

}

add_action( 'init', 'crew_cs_skip_redirect_on_login' );

// Coming Soon Redirect to Template
function crew_cs_template_redirect() {

  global $wp_customize;

  // Checks for if user is logged in OR if customizer is open and customizer preview option is checked
  if ( !is_user_logged_in() ||  isset( $wp_customize ) && (get_theme_mod('crew_cs_status') == 1 || get_theme_mod('crew_cs_status') == 2) ) {
    $file = plugin_dir_path(__FILE__) . 'inc/template.php'; //get path of our coming soon display page and redirecting
    include($file);
    exit();
  }

}

// Display admin bar when active
function admin_bar_menu($str) {

  global $wp_admin_bar;

  $status = get_theme_mod('crew_cs_status');


  if( !isset($status) ) {
      return false;
  }

  $msg = '';
  if( $status == '1' ) {
    $msg = __('Coming Soon Mode Active','crew_cs');
  } elseif( $status == '2' ) {
    $msg = __('Maintenance Mode Active','crew_cs');
  }

  //Add the main siteadmin menu item
  $wp_admin_bar->add_menu( array(
      'id'     => 'crew-cs-notice',
      'href'   => site_url() . '/wp-admin/customize.php',
      'parent' => 'top-secondary',
      'title'  => $msg,
      'meta'   => array( 'class' => 'crew-cs-active' ),
  ) );

}

function add_scripts() {
  wp_enqueue_style( 'crew-cs-adminbar', esc_url( plugins_url( 'assets\css\adminbar-style.css', __FILE__ ) ), false);
}

add_action( 'admin_enqueue_scripts', 'add_scripts' );

// Add external link to Tools area
function crew_cs_settings_link() {

  global $submenu;
  $url = site_url(). '/wp-admin/customize.php';
  $submenu['options-general.php'][] = array('Coming Soon Settings', 'manage_options', $url);

}

add_action('admin_menu', 'crew_cs_settings_link');
