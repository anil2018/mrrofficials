<?php get_header(); ?>

	<div class="main-slide">
	<div class="mSlider" id="mSlider">
		<?php
        $images = get_field('main_slider');
        if( $images ): $i = 0; ?>
        <?php foreach( $images as $image ):
        if($i == 0):
        ?>
        <div class="item active">
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
            <div class="carousel-caption">
               <h3><?php echo $image['caption']; ?></h3>
               <p><?php echo $image['description']; ?></p>
            </div>
        </div>
        <?php $i++; ?>
        <?php else: ?>
        <div class="item">               
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <div class="carousel-caption">
                <h3><?php echo $image['caption']; ?></h3>
                <p><?php echo $image['description']; ?></p>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
       <?php endif; ?>
	</div>

	<main>
		<section class="sectionbox who clearfix">
			<?php
            // check if the repeater field has rows of data
           if( have_rows('company_info') ):
           // loop through the rows of data
           while ( have_rows('company_info') ) : the_row(); ?>
			<h3>
				<?php the_sub_field('title'); ?>
			</h3>
			<p>
				<?php the_sub_field('description'); ?>
			</p>
			<?php endwhile;
            else :
            // no rows found
            endif;
            ?> 
		</section>
		<section class="sectionbox trends clearfix">
			<h3>
				Trends
			</h3>
			<div class="main-grid clearfix" id="tSlider">
				<?php 
                $images = get_field('trends_images');
                $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                if( $images ): ?>
                <?php foreach( $images as $image ): ?>
				<a href="#" class="col-md-2 col-sm-4 col-xs-6">
					<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
				</a>
				<?php endforeach; ?>    
                <?php endif; ?>
			</div>
		</section>
		<section class="sectionbox bank clearfix">
			<a href="<?php echo get_site_url(); ?>/bloodgrouppage">
				Search Blood Nearby to you
			</a> 
			<a href="<?php echo get_site_url(); ?>/register-your-blood">
				Register your blood group
			</a>
		</section>
		<section class="sectionbox recent clearfix">
			<h3>
				Recent Events
			</h3>
			<div class="seccontent clearfix" id="rSlider">
				 <!--  <?php
                   $ptype="event";
                   $the_query = new WP_Query( array( 'post_type'=>$ptype, 'posts_per_page' => 6,'paged' => $paged ) );
                   if ( $the_query->have_posts() ) {
                   while ( $the_query->have_posts() ) {
                   $the_query->the_post();
                   ?> -->
				<div class="thum">
					<?php the_post_thumbnail('small-thumbnail'); ?>
					<div class="thumbox">
						<h4>
							<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
						</h4>
						<p>
							<?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Read More&raquo;</a>
						</p>
					</div>
				</div>
				<?php }} ?>      
            </div>
			<div class="secfooter">
				<a href="<?php echo get_site_url(); ?>/event-details">
					View More <i class="fa fa-caret-right"></i>
				</a>
			</div>
		</section>
		<section class="sectionbox jobs clearfix">
			<h3>
				Jobs Opening
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
                       $the_query = new WP_Query( array( 'post_type'=>$ptype, 'posts_per_page' => 3,'paged' => $paged ) );
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
			<div class="secfooter">
				<a href="<?php echo get_site_url(); ?>/jobs">
					View more
				</a>
			</div>
		</section>
		<section class="sectionbox blog clearfix">
			<h3>
				From the Blog
			</h3>
			<div class="bSlider" id="bSlider">
				<article class="clearfix">
					<?php if(have_posts()):
                    while (have_posts()): the_post(); 

                    the_content();

                    endwhile;
                    else:
                    echo '<p> No content found</p>';

                    endif; ?>

					<div class="col-md-4 col-sm-4 col-xs-6">
						<?php //news posts loop begins here
                        $newspost = new WP_Query('cat=4&posts_per_page=1');

                        if($newspost->have_posts()):
                        while($newspost->have_posts()): $newspost->the_post(); ?>
						<?php the_post_thumbnail('small-thumbnail'); ?>
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12 jbox">
						<h4>
							<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
						</h4>
						<h6>
							<?php the_time('F j, Y g:i a'); ?>
						</h6>
						<p>
							<?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Read More&raquo;</a>
						</p>
						<?php endwhile;
                         else:
                         //fallback no content message here
                         endif;
                         wp_reset_postdata(); ?>
					</div>
				</article>
				<article class="clearfix">
					<div class="col-md-4 col-sm-4 col-xs-6">
					  <?php //politices posts loop begins here
                      $politicespost = new WP_Query('cat=3&posts_per_page=1');
                      if($politicespost->have_posts()):
                      while($politicespost->have_posts()): $politicespost->the_post(); ?>
					  <?php the_post_thumbnail('small-thumbnail'); ?>
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12 jbox">
						<h4>
							<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
						</h4>
						<h6>
							<?php the_time('F j, Y g:i a'); ?>
						</h6>
						<p>
							<?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Read More&raquo;</a>
						</p>
						<?php endwhile;
                        else:
                        //fallback no content message here
                        endif;
                        wp_reset_postdata(); ?>
					</div>
				</article>
				<article class="clearfix">
					<div class="col-md-4 col-sm-4 col-xs-6">
						<img src="http://via.placeholder.com/150x100">
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12 jbox">
						<h4>
							Title
						</h4>
						<h6>
							03 SEP
						</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit froer dseok.
						</p>
						<p>
							<a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
						</p>
					</div>
				</article>
				<article class="clearfix">
					<div class="col-md-4 col-sm-4 col-xs-6">
						<img src="http://via.placeholder.com/150x100">
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12 jbox">
						<h4>
							Title
						</h4>
						<h6>
							03 SEP
						</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit froer dseok.
						</p>
						<p>
							<a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
						</p>
					</div>
				</article>
			</div>
		</section>
	</main>
<?php get_footer(); ?>
	