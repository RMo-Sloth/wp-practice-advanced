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
      <?php 
      if( have_posts() ):
        while( have_posts() ): the_post(); ?>
          <article class='post'>
            <h2><?php the_title(); ?></h2>
            <p class="meta"><?php the_time("F j, Y, g:i a"); ?> by <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"><?php the_author(); ?></a>.</p>
            <?php the_content(); ?>
            <a href="#" class="button">Read More</a>
          </article>
        <?php endwhile;
      else:
        echo wpautop('Sorry no posts found.');
      endif;
      ?>
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