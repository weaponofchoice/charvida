  </main>
  
  <!-- Footer -->
  <footer>
    <?php
    $footer_hours_title = get_field( 'footer_hours_title', 'option' );
    $footer_hours_list = get_field( 'footer_hours_list', 'option' );
    $footer_contact_title = get_field( 'footer_contact_title', 'option' );
    $footer_contact_text = get_field( 'footer_contact_text', 'option' );
    ?>
    
    <div class="footer_top row">
      <div class="s-4 m-1 m-offset-2 columns">
        <p><?php echo $footer_hours_title; ?></p>
      </div>
      
      <div class="s-4 m-1 columns">
        <p><?php echo $footer_contact_title; ?></p>
      </div>
    </div>
    
    <div class="footer_bottom row">
      <div class="s-4 m-2 columns">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
      </div>
      
      <div class="s-4 m-1 columns">
        <ul>
          <?php foreach( $footer_hours_list as $item ): ?>
            <li>
              <p><?php echo $item['footer_hours_list_label']; ?></p>
              <p><?php echo $item['footer_hours_list_value']; ?></p>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      
      <div class="s-4 m-1 columns">
        <?php echo $footer_contact_text; ?>
      </div>
    </div>
  </footer>
  
  <!-- Scripts -->
  <?php wp_footer(); ?>
</body>
</html>