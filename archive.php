<?php get_header(); ?>
  <div class="container content">
    <div class="main block">
      <h1 class='page-header'>

        <?php
      if(is_category()){
        single_cat_title();
      } else if(is_author()){
        the_post();
        echo 'Archives By Authors: ' .get_the_author();
        rewind_posts();
      } else if(is_tag()){
        single_tag_title();
      } else if(is_day()){
        echo 'Archives By Day: ' .get_the_date();
      } else if(is_month()){
        echo 'Archives By Month: ' .get_the_date('F Y');
      } else if(is_year()){
        echo 'Archives By Year: ' .get_the_date('Y');
      } else {
        echo 'Archives';
      } ?>
    </h1>
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