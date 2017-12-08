<?php get_header(); ?>
<?php
   $ptype="event";
   $the_query = new WP_Query( array( 'post_type'=>'event', 'posts_per_page' => 10,'paged' => $paged ) );
   if ( $the_query->have_posts() ) {
   while ( $the_query->have_posts() ) {
   $the_query->the_post();
   ?>
   <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
   <?php the_content(); ?>
   <php
   endwhile;
   endif;?>
<?php }} ?>


<?php get_footer(); ?>