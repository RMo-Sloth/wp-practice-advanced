
<?php if(is_search() || is_archive()) : ?>
<div class="archive-post">
  <h4>
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h4>
  <p>Posted On: <?php the_time('F j, Y g:i a'); ?></p>
</div>


<?php else : ?>
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
<?php if(is_single()) :
  the_content();
else :
  the_excerpt(); ?>
  <a href="<?php the_permalink(); ?>" class="button">Read More</a>
<?php endif; ?>
</article>
<?php endif;