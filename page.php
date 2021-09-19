<?php get_header(); ?>
  <div class="container content">
    <div class="main block">
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

    <div class="side">
      <div class="block">
      <h3>Sidebar Head</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
      Nam vel diam hendrerit erat fermentum aliquet sed eget arcu.</p>
      <a class="button">More</a>
      </div>
    </div>
  
  </div>

<?php get_footer();