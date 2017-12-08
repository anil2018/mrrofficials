<?php get_header(); ?>
<section class="sectionbox jobs clearfix">
  <h3>
    Jobs List
  </h3>
  <table class="table">
    <tr>
      <th>
        Job Position
      </th>
      <th>
        Company
      </th>
      <th>
        Details
      </th>
    </tr>
    <div class="fixing">
       <?php
         $ptype="career";
         $the_query = new WP_Query( array( 'post_type'=>$ptype, 'posts_per_page' => 15,'paged' => $paged ) );
         if ( $the_query->have_posts() ) {
         while ( $the_query->have_posts() ) {
         $the_query->the_post();
       ?>
      <tr>
        <?php
          if( have_rows('career') ):
          while ( have_rows('career') ) : the_row();?>
        <td>
          <?php the_sub_field('job_position'); ?>
        </td>
        <td>
          <?php the_sub_field('company_name'); ?>
        </td>
        <td>
          <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
        </td>
        <?php endwhile;
          else :
          endif;
        ?> 
      </tr>
      <?php }} ?>
    </div>
  </table>
</section>


<?php get_footer(); ?>