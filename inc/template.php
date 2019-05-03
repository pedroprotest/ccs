<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php bloginfo( 'name' ); $site_description = get_bloginfo( 'description' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="<?php echo plugins_url('assets/css/style.css',dirname(__FILE__)); ?>">
  <link rel='stylesheet' id='luunch_source_sans_pro-css'  href='//fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C700' type='text/css' media='all' />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script type='text/javascript' src='<?php echo plugins_url('assets/js/main.js',dirname(__FILE__)); ?>'></script>


  <style type="text/css">
  body {
  background-color:<?php echo esc_attr( get_theme_mod('ccs_background_color', '#f5f5f5') ); ?>;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  <?php if (get_theme_mod( 'ccs_background_image', plugin_dir_url( __FILE__ ) .'../assets/images/bg.jpg') ) : ?>
  background-image:url("<?php echo esc_attr(get_theme_mod( 'ccs_background_image', plugin_dir_url( __FILE__ ) .'../assets/images/bg.jpg' )); ?>");
  <?php endif ?>
  }
  <?php echo wp_kses(get_theme_mod( 'ccs_custom_css' ), true); ?>
  </style>
</head>

<body>
  <div id="body-background">

  <!-- Status: Shows if the subscription succeeded or not. -->
  <div id="loading">
    <span class="status icon"></span>
  </div>

  <header class="row" id="header">
    <div class="content">
      <?php if (get_theme_mod( 'ccs_plugin_logo', plugin_dir_url( __FILE__ ) .'../assets/images/logo.png') ) : ?>
      <span class="logo"><img src="<?php echo esc_attr(get_theme_mod( 'ccs_plugin_logo', plugin_dir_url( __FILE__ ) .'../assets/images/logo.png' )); ?>" a;t="<?php bloginfo('name'); ?>"></span>
      <?php else: ?>
      <span><?php bloginfo('name'); ?></span>
      <?php endif; ?>
    </div>

    <?php if (get_theme_mod( 'ccs_percentage_completed', '75') ) : ?>
    <div class="status" style="width:  <?php echo esc_attr(get_theme_mod( 'ccs_percentage_completed', '75')); ?>%;">
    <span><?php echo esc_attr(get_theme_mod( 'ccs_percentage_completed', '75')); ?>%</span>
    <?php else: ?>
    <div class="status">
    <?php endif; ?>
    </div>
  </header>

  <div class="row" id="intro">
    <div class="content">

      <div class="row" id="social">
        <?php if (get_theme_mod( 'ccs_social_twitter', 'https://www.twitter.com/circathemes') ) : ?>
        <a class="icon twitter" href="<?php echo esc_url(get_theme_mod( 'ccs_social_twitter', 'https://www.twitter.com/circathemes')); ?>" target="_blank"></a>
        <?php endif; ?>

        <?php if (get_theme_mod( 'ccs_social_facebook', 'https://www.facebook.com/circathemes') ) : ?>
        <a class="icon facebook" href="<?php echo esc_url(get_theme_mod( 'ccs_social_facebook', 'https://www.facebook.com/circathemes')); ?>" target="_blank"></a>
        <?php endif; ?>

        <?php if (get_theme_mod( 'ccs_social_email', 'you@domain.com') ) : ?>
        <a class="icon email" href="mailto:<?php echo esc_attr(get_theme_mod( 'ccs_social_email', 'you@domain.com')); ?>"></a>
        <?php endif; ?>
      </div><!-- c lose #social-->


      <footer class="row">
        <?php echo wp_kses(get_theme_mod( 'ccs_page_footer', 'Designed by <a href="http://www.leeflets.com" rel="nofollow" target="_blank">Jason Schuller</a> & Developed by <a href="http://www.wpkube.com/" rel="nofollow" target="_blank">WP Kube</a>' ), true); ?>
      </footer>

    </div>
  </div>


  </div>
</body>
</html>
