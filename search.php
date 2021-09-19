<?php get_header(); ?>
  <div class="container content">
    <div class="main block">
      <h1 class='page-header'>Search Results</h1>
      <?php
      if( have_posts() ):
        while( have_posts() ): the_post();
          get_template_part('content', get_post_format() );
        endwhile;
      else:
        echo wpautop('Sorry no posts found.');
      endif;
      ?>
    </div>

    <div class="side">
      <?php 
        if( is_active_sidebar( 'sidebar' )):
          dynamic_sidebar( 'sidebar' );
        endif;
      ?>
    </div>
  
  </div>

<?php get_footer();