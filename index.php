<?php get_header(); ?>
  <div class="container content">
    <div class="main block">
      <?php 
      if( have_posts() ):
        while( have_posts() ): the_post();
          get_template_part( 'content', get_post_format() );
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