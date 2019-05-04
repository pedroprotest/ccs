<?php

$favicon = '';

if( !empty(get_theme_mod( 'ccs_favicon')) ) {
  $favicon = esc_url(get_theme_mod( 'ccs_favicon'));
}

$videoCover = get_theme_mod( 'ccs_video_cover' );
$videoMp4   = get_theme_mod( 'ccs_video_mp4' );
$videoWebm  = get_theme_mod( 'ccs_video_webm' );
$videoOgv   = get_theme_mod( 'ccs_video_ogv' );

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
  <meta name="theme-color" content="#121212">

  <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
  <!-- <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png"> -->
  <link rel="icon" href="<?php echo $favicon ?>">

  <!--[if IE]>
  <link rel="shortcut icon" href="<?php echo $favicon ?>">
  <![endif]-->
  <?php // or, set /favicon.ico for IE10 win ?>
  <!-- <meta name="msapplication-TileColor" content="#f01d4f"> -->
  <!-- <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png"> -->

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="stylesheet" href="<?php echo plugins_url('assets/css/style.css',dirname(__FILE__)); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script type='text/javascript' src='<?php echo plugins_url('assets/js/main.js',dirname(__FILE__)); ?>'></script>

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
  <div class="ccs-site-wrapper">
    <div class="ccs-video-overlay" style="background: url('<?php echo plugins_url( '../assets/images/dottedOverlay3x3.png', __FILE__ ); ?>') left top repeat"></div><!-- Video-Overlay-End -->
    <?php
      if( !empty($videoMp4) ) { ?>
        <video loop autoplay muted id="ccs-video">
          <source src="<?php echo $videoMp4; ?>" type="video/mp4">
          <source src="<?php echo $videoWebm; ?>" type="video/webm">
          <source src="<?php echo $videoOgv; ?>" type="video/ogv">
        </video>
        <script>
            document.getElementById('ccs-video').play();
        </script>
      <?php }
    ?>
    <div class="ccs-content-wrapper">
      <div class="ccs-content">
        <?php
          if ( !empty(get_theme_mod('ccs_logo') )) {
            echo '<img src="' . esc_attr(get_theme_mod( 'ccs_logo')) . '" class="ccs-logo">';
          }
        ?>
        <main class="ccs-content-details">
          <?php
            if( get_theme_mod('ccs_status') == 1 ) {
              echo '<p class="ccs-status">' . __('Brevemente', 'ccs'). '</p>';
            } elseif ( get_theme_mod('ccs_status') == 2 ) {
              echo '<p class="status">' . __('Em Manutenção', 'ccs'). '</p>';
            }
            if ( !empty( get_theme_mod('ccs_page_heading')) ) {
              echo '<h1 class="ccs-page-title">' . get_theme_mod('ccs_page_heading') . '</h1>';
            }
            if ( !empty( get_theme_mod('ccs_text')) ) {
              echo '<p class="ccs-description">' . get_theme_mod('ccs_text') . '</p>';
            }
          ?>
        </main><!-- Main-Content-End -->
      </div><!-- Content-Wrapper-End -->
      <div class="ccs-contacts-wrapper">
        <?php
          echo '<p class="ccs-contacts-description">' . wp_kses(get_theme_mod('ccs_description', 'For more info:'), true) . '</p>';
          echo '<p class="css-phone"><span>'. __('Telefone:', 'ccs') . '</span> ' . wp_kses(get_theme_mod('ccs_phone', '+ 351 987 654 321'), true) . '</p>';
          echo '<p class="cscs-email"><span>'. __('Email:', 'ccs') . '</span> ' . wp_kses(get_theme_mod('ccs_email', 'you@email.com'), true) . '</p>';
        ?>
      </div><!-- Contacts-Wrapper-End -->


    </div><!-- Page-Wrapper-End -->
    <footer class="ccs-footer-wrapper">
      <?php echo wp_kses(get_theme_mod( 'ccs_footer' ), true); ?>
    </footer><!-- Footer-Wrapper-End -->
  </div><!-- site-Wrapper-End -->
</body>
</html>
