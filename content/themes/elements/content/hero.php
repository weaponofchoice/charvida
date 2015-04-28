<?php
// Controlling text color
$hero_o_c_textColor = get_sub_field( 'hero_o_c_textColor' );

// Variables
$hero_banner = get_sub_field( 'hero_banner' );

$hero_c_image = get_sub_field( 'hero_c_image' );
$hero_c_title = get_sub_field( 'hero_c_title' );
$hero_c_text = preg_replace( '/<p>/', '<p class="' . $text_class . '">', get_sub_field( 'hero_c_text' ) );

// Output
echo '<section class="section section_hero has_no-pad">';
  
  // Hero background image
  if( $hero_banner ): 
    echo '<div class="section_hero-banner is-stretched-wrapper">';
      echo '<img class="is-stretched-object" src="' . $hero_banner['sizes']['large'] . '" width="' . $hero_banner['width'] . '" height="' . $hero_banner['height'] . '">';
    echo '</div>';
  endif;
  
  // Hero content container
  if( $hero_c_image || $hero_c_title || $hero_c_text ):
    echo '<div class="section_content">';
      
      // Logo
      if( $hero_c_image ):
        echo '<img src="' . $hero_c_image['sizes']['medium'] . '" width="' . $hero_c_image['width'] . '" height="' .   $hero_c_image['height'] . '">';
      endif;
      
      // Title
      if( $hero_c_title ):
        echo '<h1 class="is_bold is_aligned-center is_' . $hero_o_c_textColor . '">' . $hero_c_title . '</h1>';
      endif;
      
      // Text
      if( $hero_c_text ):
        echo $hero_c_text;
      endif;
      
    echo '</div>';
  endif;
  
echo '</section>';

echo '<a href="javascript:;" class="arrow arrow-scroll"><img src="' . get_template_directory_uri() . '/img/arrow.svg"></a>';
?>