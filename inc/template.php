<?php

$favicon = '';

if( !empty(get_theme_mod( 'crew_cs_favicon')) ) {
  $favicon = esc_url(get_theme_mod( 'crew_cs_favicon'));
}

$videoCover = get_theme_mod( 'crew_cs_video_cover' );
$videoMp4   = get_theme_mod( 'crew_cs_video_mp4' );
$videoWebm  = get_theme_mod( 'crew_cs_video_webm' );
$videoOgv   = get_theme_mod( 'crew_cs_video_ogv' );

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
  <?php wp_head(); ?>

  <style type="text/css">
  body {
    background-color:<?php echo esc_attr( get_theme_mod( 'crew_cs_background_color', '#f5f5f5' ) ); ?>;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    <?php
      if( !empty(get_theme_mod( 'crew_cs_background_image')) ) {
        echo 'background-image:url('. esc_attr(get_theme_mod( 'crew_cs_background_image', plugin_dir_url( __FILE__ ) . '../assets/images/bg.jpg' )) . ');';
      }
    ?>
  }

  /*--- Conteudo Principal  ---*/
  .crew-cs-site-wrapper .crew-cs-content-wrapper .crew-cs-content {
    <?php
    if( !empty(get_theme_mod( 'crew_cs_page_background_color')) ) {
      echo 'background-color: ' . esc_attr( get_theme_mod( 'crew_cs_page_background_color', '#1D1D1D' ) ) . ';';
    }
    ?>
  }

  /*--- Status  ---*/
  .crew-cs-site-wrapper .crew-cs-content-wrapper .crew-cs-content .crew-cs-content-details .crew-cs-status {
    <?php
    if( !empty(get_theme_mod( 'crew_cs_status_color')) ) {
      echo 'color: ' . esc_attr( get_theme_mod( 'crew_cs_status_color', '#fff' ) ) . ';';
    }
    ?>
  }

  /*--- Titlo Principal  ---*/
  .crew-cs-site-wrapper .crew-cs-content-wrapper .crew-cs-content .crew-cs-content-details .crew-cs-page-title {
    <?php
    if( !empty(get_theme_mod( 'crew_cs_page_heading_color')) ) {
      echo 'color: ' . esc_attr( get_theme_mod( 'crew_cs_page_heading_color', '#fff' ) ) . ';';
    }
    ?>
  }

  /*--- Descrição Principal  ---*/
  .crew-cs-site-wrapper .crew-cs-content-wrapper .crew-cs-content .crew-cs-content-details .crew-cs-description {
    <?php
    if( !empty(get_theme_mod( 'crew_cs_page_text_color')) ) {
      echo 'color: ' . esc_attr( get_theme_mod( 'crew_cs_page_text_color', '#fff' ) ) . ';';
    }
    ?>
  }

  /*--- Fundo Contactos  ---*/
  .crew-cs-site-wrapper .crew-cs-content-wrapper .crew-cs-contacts-wrapper {
    <?php
    if( !empty(get_theme_mod( 'crew_cs_contacts_background_color')) ) {
      echo 'background-color: ' . esc_attr( get_theme_mod( 'crew_cs_contacts_background_color', '#fff' ) ) . ';';
    }
    ?>
  }

  /*--- Paragrafos dos Contactos  ---*/
  .crew-cs-site-wrapper .crew-cs-content-wrapper .crew-cs-contacts-wrapper p {
    <?php
    if( !empty(get_theme_mod( 'crew_cs_contacts_text_color')) ) {
      echo 'color: ' . esc_attr( get_theme_mod( 'crew_cs_contacts_text_color', '#fff' ) ) . ';';
    }
    ?>
  }

  /*--- Links nos Contactos  ---*/
  .crew-cs-site-wrapper .crew-cs-content-wrapper .crew-cs-contacts-wrapper .link {
    <?php
    if( !empty(get_theme_mod( 'crew_cs_contacts_links_color')) ) {
      echo 'color: ' . esc_attr( get_theme_mod( 'crew_cs_contacts_links_color', '#fff' ) ) . ';';
    }
    ?>
  }

  /*--- Span nos Contactos  ---*/
  .crew-cs-site-wrapper .crew-cs-content-wrapper .crew-cs-contacts-wrapper span {
    <?php
    if( !empty(get_theme_mod( 'crew_cs_contacts_text_color')) ) {
      echo 'color: ' . esc_attr( get_theme_mod( 'crew_cs_contacts_text_color', '#fff' ) ) . ';';
    }
    ?>
  }

  /*--- Fundo do Rodapé  ---*/
  .crew-cs-site-wrapper .crew-cs-footer-wrapper {
    <?php
    if( !empty(get_theme_mod( 'crew_cs_footer_background_color')) ) {
      echo 'background-color: ' . esc_attr( get_theme_mod( 'crew_cs_footer_background_color', '#3D3D3D' ) ) . ';';
    }
    if( !empty(get_theme_mod( 'crew_cs_footer_border_color')) ) {
      echo 'border-color: ' . esc_attr( get_theme_mod( 'crew_cs_footer_border_color', '#3D3D3D' ) ) . ';';
    }
    ?>
  }

  /*--- Texto do Rodapé  ---*/
  .crew-cs-site-wrapper .crew-cs-footer-wrapper p {
    <?php
    if( !empty(get_theme_mod( 'crew_cs_footer_text_color')) ) {
      echo 'color: ' . esc_attr( get_theme_mod( 'crew_cs_footer_text_color', '#fff' ) ) . ';';
    }
    ?>
  }

  <?php echo wp_kses( get_theme_mod( 'crew_cs_custom_css' ), true ); ?>
  </style>
</head>

<body>
  <div class="crew-cs-site-wrapper">
    <div class="crew-cs-video-overlay" style="background: url('<?php echo plugins_url( '../assets/images/dottedOverlay3x3.png', __FILE__ ); ?>') left top repeat"></div><!-- Video-Overlay-End -->
    <?php
      if( !empty($videoMp4) ) { ?>
        <video loop autoplay muted id="crew-cs-video">
          <source src="<?php echo esc_url($videoMp4); ?>" type="video/mp4">
          <source src="<?php echo esc_url($videoWebm); ?>" type="video/webm">
          <source src="<?php echo esc_url($videoOgv); ?>" type="video/ogv">
        </video>
        <script>
            document.getElementById('crew-cs-video').play();
        </script>
      <?php }
    ?>
    <div class="crew-cs-content-wrapper">
      <div class="crew-cs-content-background">
        <div class="crew-cs-content">
          <?php
            if ( !empty(get_theme_mod('crew_cs_logo') )) {
              echo '<img src="' . esc_attr(get_theme_mod( 'crew_cs_logo')) . '" class="crew-cs-logo">';
            }
          ?>
          <main class="crew-cs-content-details">
            <?php
              if( get_theme_mod('crew_cs_status') == 1 ) {
                echo '<p class="crew-cs-status">' . __('Brevemente', 'crew_cs'). '</p>';
              } elseif ( get_theme_mod('crew_cs_status') == 2 ) {
                echo '<p class="crew-cs-status">' . __('Em Manutenção', 'crew_cs'). '</p>';
              }
              if ( !empty( get_theme_mod('crew_cs_page_heading')) ) {
                echo '<h1 class="crew-cs-page-title">' . get_theme_mod('crew_cs_page_heading') . '</h1>';
              }
              if ( !empty( get_theme_mod('crew_cs_text')) ) {
                echo '<p class="crew-cs-description">' . get_theme_mod('crew_cs_text') . '</p>';
              }
            ?>
          </main><!-- Main-Content-End -->
        </div><!-- Content-Wrapper-End -->
        <div class="crew-cs-contacts-wrapper">
          <?php
            echo '<p class="crew-cs-contacts-description">' . wp_kses(get_theme_mod('crew_cs_description', 'For more info:'), true) . '</p>';
            echo '<p class="crew-cs-phone"><span class="link">'. __('Telefone:', 'crew_cs') . '</span> ' . wp_kses(get_theme_mod('crew_cs_phone', '+ 351 987 654 321'), true) . '</p>';
            echo '<p class="crew-cs-email"><span class="link">'. __('Email:', 'crew_cs') . '</span> ' . wp_kses(get_theme_mod('crew_cs_email', 'you@email.com'), true) . '</p>';
          ?>
        </div><!-- Contacts-Wrapper-End -->
      </div>



    </div><!-- Page-Wrapper-End -->
    <footer class="crew-cs-footer-wrapper">
      <p><?php echo wp_kses(get_theme_mod( 'crew_cs_footer' ), true); ?></p>
    </footer><!-- Footer-Wrapper-End -->
  </div><!-- site-Wrapper-End -->
<?php wp_footer();?>
</body>
</html>
