
<!Doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="">
	<meta name="keywords" content="">
	<meta name="msapplication-tap-highlight" content="no" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Touch enabled">
	<meta name="author" content="Ajaya Bajracharya">

	<title><?php bloginfo('name'); ?></title>

	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700|Nixie+One|Shadows+Into+Light+Two" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootsnav.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lightslider.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
</head>
<?php
   $logo = esc_attr(get_option('site_logo'));
   $mail = esc_attr(get_option('mail'));
   $mobile = esc_attr(get_option('mob_number'));
?>
<body>

	<header>
		<div class="clearfix">
			<div class="pull-right">
				<a href="#" class="mail">
					<?php print $mail; ?>
				</a>
				<a href="#" class="phone">
					<?php print $mobile; ?>
				</a>
				<form>
					<?php get_search_form(); ?>
					
				</form>
			</div>
		</div>
	</header>

	<nav class="navbar navbar-default navbar-sticky bootsnav ">
		<div class="container">      
			<!-- Start Header Navigation -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="<?php echo get_site_url(); ?>/home"><img src="<?php print $logo; ?>" class="logo" alt="logo"></a>
			</div>
			<!-- End Header Navigation -->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-menu">

				<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
					<?php
                      wp_nav_menu( array(
                      'theme_location' => 'primary',
                      'menu_id'        => 'Primary Menu Links',
                      'container' => false,
                      'menu_class'=> 'nav navbar-nav navbar-right',
                      'fallback_cb'=> 'wp_bootstrap_navwalker::fallback',
                      'walker'=> new wp_bootstrap_navwalker()
                      ));
                    ?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>   
	</nav>