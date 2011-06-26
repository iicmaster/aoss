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
/*----------------------------------------------------------------------------------------------------*/
/* product_category */
/*----------------------------------------------------------------------------------------------------*/

#product_category li
{
	margin: 0px;
	list-style: none
}

#product_category > ul > li
{
	background: url(<?php echo $image_path ?>bg_content.png);
	margin-bottom: 20px;
	padding: 20px 0px 1px 0px;
	
	/* CSS3 */
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
}

#product_category > ul > li > h2
{
	margin: 0px;
	
	/* CSS3 */
	box-shadow: 0px 1px 5px #666;
	-moz-box-shadow: 0px 1px 5px #666;
	-webkit-box-shadow: 0px 1px 5px #666;
}

#product_category > ul > li > ul
{
	margin: 10px 0px;
}

#product_category > ul > li > ul > li
{
	clear: both;
}

#product_category > ul > li > ul > li a
{
	display: block;
	line-height: 32px;
	padding: 3px 0px;
}

#product_category > ul > li > ul > li a:hover, #product_category > ul > li > ul > li a.active
{
	background: rgba(255, 255, 255, 0.5);
	color: #FFF;
	margin: 0px 5px;
	
	/* CSS3 */
	border-radius: 32px;
	-moz-border-radius: 32px;
	-webkit-border-radius: 32px;
	
	box-shadow: 1px 1px 5px #999 inset;
	-moz-box-shadow: 1px 1px 5px #999 inset;
	-webkit-box-shadow: 1px 1px 5px #999 inset;
}

#product_category > ul > li > ul > li a:hover img, #product_category > ul > li > ul > li a.active img
{
	margin: 0px 10px 0px 15px;
}
#product_category > ul > li > ul > li img
{
	float: left;
	margin: 0px 10px 0px 20px;
}

/*----------------------------------------------------------------------------------------------------*/
/* main_content */
/*----------------------------------------------------------------------------------------------------*/
#main_content
{
	background: url(<?php echo $image_path ?>bg_content.png);
	padding: 1px 0px;
	
	/* CSS3 */
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
}

#main_content h2
{
	
	/* CSS3 */
	box-shadow: 0px 1px 5px #666;
	-moz-box-shadow: 0px 1px 5px #666;
	-webkit-box-shadow: 0px 1px 5px #666;
}

#main_content > img
{
	float: left;
	width: 380px;
	margin-left: 20px;
	
	/* CSS3 */
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	
	box-shadow: 1px 1px 5px #999;
	-moz-box-shadow: 1px 1px 5px #999;
	-webkit-box-shadow: 1px 1px 5px #999;
}

#main_content > #vdo
{
	background: none;
	margin: 0px;
	padding: 0px;
}

#main_content p 
{
	clear: both;
	padding: 20px;
}

/*----------------------------------------------------------------------------------------------------*/
/* End */
/*----------------------------------------------------------------------------------------------------*/
</style>
</head>
<body>
<div id="container" >
	<div class="row">
		<?php include('header.php') ?>
	</div>
	<div class="row">
		<div class="column grid_5">
			<div id="product_category">				
				<?php echo $this->content_model->get_product_menu() ?>
			</div>
			<?php include("contact_form.php"); ?>
		</div>
		<div class="column grid_11">
			<div id="main_content">
				<h2><?php echo $product['name'] ?></h2>
				<?php echo image_asset('product/full/'.$product['id'].'.jpg', 'site', array('alt'=>$product['name'])); ?>
				<ul id="vdo">
					<li>
						<a href="<?php echo $product['vdo'] ?>" title="<?php echo $product['name'] ?>">
							<img src="<?php echo get_thumbnail_url($product['vdo']) ?>" width="165" height="125" alt="<?php echo $product['name'] ?>" />
							<?php echo $product['name'] ?>
						</a>
					</li>
				</ul>
				<p><?php echo $product['description'] ?></p>
			</div>
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
	
	$('#navigator a:eq(2)').addClass('active');
	$('a#<?php echo $this->uri->segment(3, 1) ?>').addClass('active');
	
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