<?php 
/*  
  Template Name: Company Template
*/
get_header(); ?>
  <div class="container content">
    <div class="main block">
      <?php 
      if( have_posts() ):
        while( have_posts() ): the_post();
          print('<article>');
          the_title( '<h1>', '</h1>' );
          print('<p class="phone">Call Us: 1-800-555-5555</p>');
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