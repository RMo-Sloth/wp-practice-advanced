<?php get_header(); ?>
  <div class="container content">
    <div class="main block">
      <?php 
      if( have_posts() ):
        while( have_posts() ): the_post(); ?>
          <article class='post'>
            <h2><?php the_title(); ?></h2>
            <p class="meta"><?php the_time("F j, Y, g:i a"); ?> by <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"><?php the_author(); ?></a> | Posted in:
            <?php 
              $categories = get_the_category();
              $separator = ", ";
              $output = '';

              if( $categories ) {
                foreach( $categories as $category ) {
                  $output .= sprintf(
                    '<a href="%s">%s</a>%s',
                    get_category_link($category->term_id),
                    $category->cat_name,
                    $separator
                  );
                }
                echo trim($output, $separator);
              }
            ?>.</p>
            <?php 
              if( has_post_thumbnail() ) {
                printf( 
                  '<div class="post-thumbnail">%s</div>',
                  get_the_post_thumbnail()
                );
              }
            ?>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="button">Read More</a>
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

<?php get_footer();