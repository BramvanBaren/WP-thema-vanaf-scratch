<?php 
    if( have_posts() ) : 
        while( have_posts() ): the_post(); ?>
        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></h3>
        <div><?php the_excerpt(); ?></div>
       
   <?php endwhile;
         else: ?>

    <p>geen berichten gevonden</p>
    <?php endif ?>
    <?php get_footer(); ?>