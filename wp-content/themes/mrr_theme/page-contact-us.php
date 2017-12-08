<?php

get_header();

if(have_posts()):

while (have_posts()): the_post(); ?>

<div class="sectionbox">
	<div class="contact clearfix">
		<div class="col-md-4 col-sm-4 col-xs-12 clearfix">
			<form class="c-form clearfix">
				<?php echo do_shortcode('[contact-form-7 id="81" title="Contact form 1"]'); ?>
			</form>
		</div>
		<div class="col-md-8 col-sm-8 col-xs-12 clearfix">
			<div class="col-md-4 col-sm-6 col-xs-12 add clearfix">
				<h3>
					Jhon Doe
				</h3>
				<h6>
					callme@jhondoe.com
				</h6>
				<p>
					984568465
				</p>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 add clearfix">
				<h3>
					Jhon Doe Phraell
				</h3>
				<h6>
					callme@jhondoe.com
				</h6>
				<p>
					984568465
				</p>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 add clearfix">
				<h3>
					Jhon Doe
				</h3>
				<h6>
					callme@jhondoe.com
				</h6>
				<p>
					984568465
				</p>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 add map clearfix">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227310.617017435!2d84.88572442960997!3d27.1018587706518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fc5944ba91%3A0xad96b5bc273d9875!2sGoogle+Treks+Nepal+Pvt.+Ltd!5e0!3m2!1sen!2snp!4v1512577639013" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>


<?php endwhile;

else:

echo '<p> No content found</p>';

endif;

get_footer();

?>