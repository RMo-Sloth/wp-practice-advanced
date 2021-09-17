<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <title><?php bloginfo('title'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
  <header>
    <div class="container">
      <h1><a href="index.html"><?php bloginfo('name'); ?></a></h1>
      <small><?php bloginfo('description'); ?></small>

      <div class="h_right">
        <form method='GET' action="<?php esc_url(home_url('/')); ?>">
          <input type="text" name="s" placeholder="Search">
        </form>
      
      </div>
    </div>
  </header>
  <nav class="nav main-nav">
    <div class="container">
      <?php 
        wp_nav_menu([
          'theme_location' => 'primary'
        ]); 
      ?>
    </div>
  </nav>

  <div class="container content">
    <div class="main block">
      <article class='post'>
        <h2>Blog Post</h2>
        <p class="meta">Posted 06:00 on September 16 by admin.</p>
        <p>Elit exercitation mollit adipisicing velit. Sunt commodo Lorem sint ea voluptate anim Lorem excepteur cillum velit non velit nisi. Enim magna laboris veniam aliquip commodo voluptate anim magna Lorem fugiat. Dolore minim ad qui nulla sint dolor id laboris aliquip. Voluptate magna adipisicing commodo et. Fugiat irure id labore minim reprehenderit aliqua quis minim sunt.</p>
        <a href="#" class="button">Read More</a>
      </article>

      <article class='post'>
        <h2>Blog Post</h2>
        <p class="meta">Posted 06:00 on September 16 by admin.</p>
        <p>Elit exercitation mollit adipisicing velit. Sunt commodo Lorem sint ea voluptate anim Lorem excepteur cillum velit non velit nisi. Enim magna laboris veniam aliquip commodo voluptate anim magna Lorem fugiat. Dolore minim ad qui nulla sint dolor id laboris aliquip. Voluptate magna adipisicing commodo et. Fugiat irure id labore minim reprehenderit aliqua quis minim sunt.</p>
        <a href="#" class="button">Read More</a>
      </article>

      <article class='post'>
        <h2>Blog Post</h2>
        <p class="meta">Posted 06:00 on September 16 by admin.</p>
        <p>Elit exercitation mollit adipisicing velit. Sunt commodo Lorem sint ea voluptate anim Lorem excepteur cillum velit non velit nisi. Enim magna laboris veniam aliquip commodo voluptate anim magna Lorem fugiat. Dolore minim ad qui nulla sint dolor id laboris aliquip. Voluptate magna adipisicing commodo et. Fugiat irure id labore minim reprehenderit aliqua quis minim sunt.</p>
        <a href="#" class="button">Read More</a>
      </article>
    </div>

    <div class="side">
      <div class="block">
      <h3>Sidebar Head</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
      Nam vel diam hendrerit erat fermentum aliquet sed eget arcu.</p>
      <a class="button">More</a>
      </div>
    </div>
  
  </div>


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