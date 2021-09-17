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
      <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      <small><?php bloginfo('description'); ?></small>

      <div class="h_right">
        <form method='get' action="<?php echo esc_url(home_url('/')); ?>">
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