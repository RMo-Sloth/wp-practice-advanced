<?php get_header(); ?>
  <div class="container content">
    <div class="block">
      <?php 
      if( have_posts() ):
        while( have_posts() ): the_post();
        if(page_is_parent( $post ) || $post->post_parent > 0):
          print('<nav class="nav sub-nav">');
          printf(
            '<span class="parent-link"><a href="%s">%s</a></span>',
            get_the_permalink( get_top_parent( $post ) ),
            get_the_title( get_top_parent( $post ) )
          );
          wp_list_pages([
            'child_of' => get_top_parent( $post ),
            'title_li' => ''
          ]);
          print('</nav>');
          print('<div class="clr"></div>');
        endif;
          print('<article>');
          the_title( '<h1>', '</h1>' );
          the_content();
          print('</article>');
        endwhile;
      else:
        echo wpautop('Sorry no posts found.');
      endif; ?>
    </div>

    <?php 
    if( is_active_sidebar( 'box_1' ) ):
      dynamic_sidebar( 'box_1' );
    endif;

    if( is_active_sidebar( 'box_2' ) ):
      dynamic_sidebar( 'box_2' );
    endif;

    if( is_active_sidebar( 'box_3' ) ):
      dynamic_sidebar( 'box_3' );
    endif;

    if( is_active_sidebar( 'showcase' ) ):
      print('<div class="clr"></div>');
      dynamic_sidebar( 'showcase' );
    endif;
    ?>
  
  </div>

<?php get_footer();