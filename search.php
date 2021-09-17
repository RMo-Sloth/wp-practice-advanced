<?php get_header(); ?>
  <div class="container content">
    <div class="main block">
      <h1 class='page-header'>Search Results</h1>
      <?php
      if( have_posts() ):
        while( have_posts() ): the_post(); ?>
        <div class="archive-post">
          <h4>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h4>
          <p>Posted on <?php the_time( "F j, Y, g:i a" ) ?></p>
        </div>
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

<?php get_footer();