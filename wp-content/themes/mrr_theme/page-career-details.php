<?php get_header(); ?>
<?php
                       $ptype="career";
                       $the_query = new WP_Query( array( 'post_type'=>'career', 'posts_per_page' => 3,'paged' => $paged ) );
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
<section class="intro cform-page">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-offset-2">
            <h3 class="cr-form"><?php echo $queried_post->post_title; ?></h3>
            <?php echo $queried_post->post_content; ?>

            <div id="contact-form">
            <h3>Submit the below form</h3>
            <?php echo do_shortcode('[contact-form-7 id="108" title="Career Form"]'); ?>
            </div>
          </div>  
        </div>
      </div>
  </section>


<?php get_footer(); ?>