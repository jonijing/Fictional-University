<?php

  while(have_posts()) {
    the_post(); ?>
    This is a page
    <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
    <p><?php the_content(); ?></p>
    <hr>
    <?php 
  }
?>

