<?php
/**
 * @package WordPress
 */
?>

<!DOCTYPE html>
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <title>Charvida</title>
  
  <!-- META TAGS -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
  
  <!-- Stylesheet -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">
  
  <!-- Fonts from Typekit -->
  <script src="//use.typekit.net/vwd6jyv.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  
  <!-- WP_HEAD() -->
  <?php wp_head(); ?>
</head>

<?php
$detect = new Mobile_Detect;
if( $detect->isMobile() ){
  $body_class = 'is_mobile';
} elseif( $detect->isTablet() ){
  $body_class = 'is_mobile is_tablet';
}
?>

<body class="is-loading <?php echo $body_class; ?>">
  <!-- Header -->
  <header>
    <a class="link-logo" href="<?php echo home_url(); ?>">
      <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/logo-type.svg">
    </a>
    
    <?php include( 'includes/nav.php' ); ?>
  
    <ul class="social">
      <?php
      $social_platforms = get_field( 'platforms', 'option' );
      
      foreach( $social_platforms as $platform ):
        echo '<li><a href="' . $platform['link'] . '" target="_blank"><img src="' . get_template_directory_uri() . '/img/social/' . $platform['platform'] . '.svg"></a></li>';
      endforeach;
      ?>
    </ul>
    
    <a class="trigger-menu trigger-menuOpen"><i></i></a>
    <a class="trigger-menuClose"><i></i><i></i></a>
  </header>
  
  <!-- Mobile Nav -->
  <div class="menu_mobile">
    <div>
      <?php include( 'includes/nav.php' ); ?>
      
      <ul class="social">
        <?php
        $social_platforms = get_field( 'platforms', 'option' );
      
        foreach( $social_platforms as $platform ):
          echo '<li><a href="' . $platform['link'] . '" target="_blank"><img src="' . get_template_directory_uri() . '/img/social/' . $platform['platform'] . '.svg"></a></li>';
        endforeach;
        ?>
      </ul>
    </div>
  </div>
  
  <?php
  // Hero section must be placed before main
  if( have_posts() ):
    while( have_posts() ): the_post();
    
      // Loop into ACF groups
      if( have_rows('page') ):
        while( have_rows('page') ): the_row();
        
          if( get_row_layout() == 'hero' ):
            echo '<!-- Hero -->';
            include_once( locate_template('content/hero.php') );
          endif;
        
        endwhile;
      endif;
        
    endwhile;
  endif;
  ?>
  
  <!-- Main content -->
  <main role="main">