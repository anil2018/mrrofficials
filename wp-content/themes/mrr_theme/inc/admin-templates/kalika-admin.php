<h1> Mens Rooms Reloaded Theme Option </h1>
<?php settings_errors(); ?>
<?php
 $logo = esc_attr(get_option('site_logo'));
 $fullname = esc_attr(get_option('full_name'));
 $telephone = esc_attr( get_option( 'tel_number' ));
 $address = esc_attr( get_option( 'address' ));
 $img = esc_attr(get_option('picture'))
?>
<div class="kalika-sidebar-preview">
	<div class="kalika-sidebar">
		<h2 class="kalika-phone">Logo</h1>
		<div class="image-container">
			<div id="logo-preview" class="logo" style="background-image: url(<?php print $logo; ?>);"></div>
		</div>
		<h2 class="kalika-phone">About Image</h2>
		<div>
			<div id="logo-pics" class="logo" style="background-image: url(<?php print $img; ?>);"></div>
		</div>
					
		<h1 class="kalika-username"><?php print $fullname; ?></h1>
		<h2 class="kalika-phone"><?php print $telephone; ?></h2>
		<div class="icons-wrapper">
			<?php print $address; ?>
		</div>
	</div>
</div>

<form  method="post" action="options.php" class="kalika-general-form">
	<?php settings_fields('kalika-settings-group'); ?>
	<?php do_settings_sections('custom_theme'); ?>
	<?php submit_button( 'Save Change', 'primary', 'btnSubmit'); ?>
</form>