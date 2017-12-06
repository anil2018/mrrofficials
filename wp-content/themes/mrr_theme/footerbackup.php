<footer>

		<div class="container clearfix">
			<div class="col-md-9 col-sm-9 col-xs-12 clearfix">
				<div class="col-md-2 col-sm-2 col-xs-12 f-logo">
					<a href="#">
						<?php $img = esc_attr(get_option('picture')); ?><img src="<?php print $img; ?>" class="logo" alt="img">
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<ul>
						<li>
							Other Links
						</li>
						<li>
							<a href="#">
								Privacy Policy
							</a>
						</li>
						<li>
							<a href="#">
								Terms &amp; Conditions
							</a>
						</li>
						<li>
							<a href="#">
								FAQ
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<ul>
						<li>
							Activities
						</li>
						<li>
							<a href="#">
								Social Events
							</a>
						</li>
						<li>
							<a href="#">
								Promotion of tourism
							</a>
						</li>
						<li>
							<a href="#">
								Social Awarness
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					
				  <?php if(is_active_sidebar('footer1')): ?>
     	            <div class="footer-widget-area">
   	                   <?php dynamic_sidebar('footer1'); ?>
   	                </div>
   	              <?php endif; ?>		
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>
		</div>
		<div class="copy">
			<p>
				All rights
			</p>
			<p class="pull-right">
				Designed by:
				<a href="#">
					Theme Nepal
				</a>
			</p>
		</div>
	</footer>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js" ></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lightslider.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/masonry-docs.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootsnav.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js"></script>
</body>
</html>