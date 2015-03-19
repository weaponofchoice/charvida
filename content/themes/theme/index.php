<?php
get_header();

if( have_posts() ):
  while( have_posts() ): the_post();
    
    // Loop into ACF groups
    if( have_rows('page') ):
      while( have_rows('page') ): the_row();
        
        if( get_row_layout() == 'hero' ):
          include_once( locate_template('content/hero.php') );
        elseif( get_row_layout() == 'text' ):
          include_once( locate_template('content/text.php') );
        elseif( get_row_layout() == 'grid' ):
          include_once( locate_template('content/grid.php') );
        endif;
        
      endwhile;
    endif;
        
  endwhile;
endif;

get_footer();
?>