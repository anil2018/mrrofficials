<?php get_header(); ?>
<section class="sectionbox jobs clearfix">
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
</section>

<?php get_footer(); ?>