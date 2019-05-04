<?php

$favicon = '';

if( !empty(get_theme_mod( 'ccs_favicon')) ) {
  $favicon = esc_url(get_theme_mod( 'ccs_favicon'));
}

?>

<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="utf-8">

  <?php // force Internet Explorer to use the latest rendering engine available ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php bloginfo( 'name' ); $site_description = get_bloginfo( 'description' ); ?></title>

  <?php // mobile meta (hooray!) ?>
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
  <!-- <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png"> -->
  <link rel="icon" href="<?php echo $favicon ?>">

  <!--[if IE]>
  <link rel="shortcut icon" href="<?php echo $favicon ?>">
  <![endif]-->
  <?php // or, set /favicon.ico for IE10 win ?>
  <!-- <meta name="msapplication-TileColor" content="#f01d4f"> -->
  <!-- <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png"> -->
  <meta name="theme-color" content="#121212">

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="stylesheet" href="<?php echo plugins_url('assets/css/style.css',dirname(__FILE__)); ?>">
  <script type='text/javascript' src='<?php echo plugins_url('assets/js/main.js',dirname(__FILE__)); ?>'></script>

  <?php // wordpress head functions ?>
  <?php wp_head(); ?>
  <?php // end of wordpress head ?>

  <?php // drop Google Analytics Here ?>
  <?php // end analytics ?>

  <style type="text/css">
  body {
    background-color:<?php echo esc_attr( get_theme_mod( 'ccs_background_color', '#f5f5f5' ) ); ?>;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    <?php
      if( !empty(get_theme_mod( 'ccs_background_image')) ) {
        echo 'background-image:url('. esc_attr(get_theme_mod( 'ccs_background_image', plugin_dir_url( __FILE__ ) . '../assets/images/bg.jpg' )) . ')';
      }
    ?>
  }
  <?php echo wp_kses( get_theme_mod( 'ccs_custom_css' ), true ); ?>
  </style>
</head>

<body>
  <div class="site-wrapper">
    <div class="revslider-wrapper">
      <?php
        $sliderName = get_theme_mod('ccs_slider');
        if ( !empty( $sliderName ) ) {
          echo do_shortcode('[rev_slider alias='. $sliderName .']');
        }
      ?>
    </div><!-- RevSlider-Wrapper-End -->
    <div class="page-wrapper">
      <div class="content-wrapper">
        <header>
          <div class="logo-wrapper">
            <?php if (get_theme_mod('ccs_logo')) : ?>
              <span class="logo"><img src="<?php echo esc_attr(get_theme_mod( 'ccs_logo')); ?>" alt="<?php bloginfo('name'); ?>"></span>
            <?php else: ?>
              <span><?php bloginfo('name'); ?></span>
            <?php endif; ?>
          </div><!-- Logo-Wrapper-End -->
        </header><!-- Header-End -->
        <main class="main-content">
          <div class="status">
            <span>
            <?php
              if( get_theme_mod('ccs_status') == 1 ) {
                echo __('Brevemente', 'ccs');
              } elseif ( get_theme_mod('ccs_status') == 2 ) {
                echo __('Em Manutenção', 'ccs');
              }
             ?>
             </span>
          </div>
          <div class="title">
            <?php
              if ( !empty( get_theme_mod('ccs_page_heading') ) ) {
                echo '<h1 class="page-title">' . get_theme_mod('ccs_page_heading') . '</h1>';
              }
            ?>
          </div><!-- Title-End -->
          <div class="description">
            <?php
              if ( !empty( get_theme_mod('ccs_text') ) ) {
                echo get_theme_mod('ccs_text');
              }
            ?>
          </div><!-- Description-End -->
        </main><!-- Main-Content-End -->
      </div><!-- Content-Wrapper-End -->
      <div class="contacts-wrapper">
        <div class="contact">
          <?php echo '<p class="contacts-description">' . wp_kses(get_theme_mod('ccs_description', 'For more info:'), true) . '</p>'; ?>
          <?php echo '<p class="phone"><span>'. __('Phone:', 'ccs') . '</span> ' . wp_kses(get_theme_mod('ccs_phone', '+ 351 987 654 321'), true) . '</p>'; ?>
          <?php echo '<p class="email"><span>'. __('Email:', 'ccs') . '</span> ' . wp_kses(get_theme_mod('ccs_email', 'you@email.com'), true) . '</p>'; ?>
        </div><!-- Contact-Wrapper-End -->
      </div><!-- Contact-Wrapper-End -->


    </div><!-- Page-Wrapper-End -->
    <footer class="footer-wrapper">
      <?php echo wp_kses(get_theme_mod( 'ccs_footer' ), true); ?>
    </footer><!-- Footer-Wrapper-End -->
  </div><!-- site-Wrapper-End -->
 <?php wp_footer(); ?>
</body>
</html>
