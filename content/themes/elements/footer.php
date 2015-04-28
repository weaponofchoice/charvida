  </main>
  
  <?php global $i_anchor; ?>
  <!-- Footer -->
  <footer <?php if( get_field('footer_o_menu', 'option') == true ): echo 'class="has-anchor" id="anchor-' . $i_anchor . '"'; endif; ?>>
    <div class="footer_inner">
      <?php
      $footer_hours_title = get_field( 'footer_hours_title', 'option' );
      $footer_hours_list = get_field( 'footer_hours_list', 'option' );
      $footer_contact_title = get_field( 'footer_contact_title', 'option' );
      $footer_contact_text = get_field( 'footer_contact_text', 'option' );
      ?>
      <div class="footer_content">
        <div class="footer_top">
        
        </div>
        <div class="footer_bottom">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
        </div>
      </div>
    
      <div class="footer_content">
        <div class="footer_top">
          <p><?php echo $footer_hours_title; ?></p>
        </div>
        <div class="footer_bottom">
          <ul>
            <?php foreach( $footer_hours_list as $item ): ?>
              <li>
                <p><?php echo $item['footer_hours_list_label']; ?></p>
                <p><?php echo $item['footer_hours_list_value']; ?></p>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    
      <div class="footer_content">
        <div class="footer_top">
          <p><?php echo $footer_contact_title; ?></p>
        </div>
        <div class="footer_bottom">
          <?php echo $footer_contact_text; ?>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- Scripts -->
  <?php wp_footer(); ?>
</body>
</html>