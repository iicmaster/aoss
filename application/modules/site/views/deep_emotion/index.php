<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>
<?php echo css_asset('layout.css') ?>
<?php echo css_asset('style.css') ?>
<?php include('css.php') ?>
<link rel="stylesheet" type="text/css" href="<?php base_url() ?>assets/js/fancybox/jquery.fancybox-1.3.2.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php base_url() ?>assets/js/galleryview-2.1.1/galleryview.css" media="screen" />
<style type="text/css">
</style>
</head>
<body>
<div id="container" >
	<div class="row">
		<?php include('header.php') ?>
	</div>
	<?php include("vdo.php"); ?>
	<div class="row">
		<div class="column grid_8">
			<?php include("profile.php"); ?>
		</div>
		<div class="column grid_8">
			<?php include("contact_form.php"); ?>
		</div>
	</div>
	<div class="row">
		<div class="column grid_16">
			<?php include("testimonial.php"); ?>
		</div>
	</div>
	<?php include("footer.php"); ?>
</div>

<!-- jQuery -->
<?php echo js_asset('jquery-1.4.3.min.js'); ?>

<!-- fancybox -->
<?php echo js_asset('fancybox/jquery.fancybox-1.3.2.pack.js'); ?>

<!-- gallery view -->
<?php echo js_asset('galleryview-2.1.1/jquery.easing.1.3.js'); ?>
<?php echo js_asset('galleryview-2.1.1/jquery.galleryview-2.1.1-pack.js'); ?>
<?php echo js_asset('galleryview-2.1.1/jquery.timers-1.2.js'); ?>
<script type="text/javascript">
$(function(){
	
	$('#navigator a:eq(0)').addClass('active');
	
	$('#photos').galleryView({
		
		'panel_width'			: 625,
		'panel_height'			: 351,
		'transition_speed'		: 1500,
		'transition_interval'	: 5000,
   		'background_color'		: 'white',
   		'border'				: 'none',
		'pause_on_hover'		: true,
		'show_filmstrip'		: false
	});

	$("#vdo a").click(function(){
		
		var url = $(this).attr("href");
		var id_youtube = url.substr(url.search(/v=/)+2,11);
		
		$.fancybox({
				'padding'		: 0,
				'autoScale'		: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'fade',
				'title'			: this.title,
				'width'			: 450,
				'height'		: 360,
				'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
				'type'			: 'swf',
				'swf'			: {
									'wmode'				: 'transparent',
									'allowfullscreen'	: 'true'
								  }
			});
	
		return false;
	});
});
</script>
</body>
</html>