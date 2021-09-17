  <footer class="main-footer">
    <div class="container">
      <div class="f_left">
        <p>&copy; 2021 - Advanced WP Theme</p>
      </div>
      <div class="f_right">
      <?php 
        wp_nav_menu([
          'theme_location' => 'footer'
        ]); 
      ?>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
<?php