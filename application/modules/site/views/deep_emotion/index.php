<?php include('header.php') ?>
<style type="text/css">
/*----------------------------------------------------------------------------------------------------*/
/* Header */
/*----------------------------------------------------------------------------------------------------*/

#header
{
	background: url(<?php echo $image_path ?>bg_slideshow.png) no-repeat bottom right;
	height: 420px;
	margin-bottom: 10px;
	position: relative;
}

#logo { position: absolute; }

/*----------------------------------------------------------------------------------------------------*/
/* Navigator */
/*----------------------------------------------------------------------------------------------------*/

#navigator ul
{
	list-style: none;
	margin: 170px 0 0 0;
	position: relative;
}

#navigator li { margin: 8px 0px; }

#navigator li a
{
	background: url(<?php echo $image_path ?>bg_navigator.png) center no-repeat;
	border: 1px solid #FFF;
	color: #FFF;
	display: block;
	height: 30px;
	line-height: 32px;
	text-align: center;
	text-decoration: none;
	margin-left: 70px;
	opacity: 0.9;
	width: 150px;
	
	/* CSS3 */
	text-shadow: 1px 1px 3px #999;
	
	border-radius: 30px;
	-moz-border-radius: 30px;
	-webkit-border-radius: 30px;
	
	box-shadow: 1px 1px 3px #999;
	-moz-box-shadow: 1px 1px 3px #999;
	-webkit-box-shadow: 1px 1px 3px #999;
}

#navigator li a:hover, #navigator li a.active
{
 	background: url(<?php echo $image_path ?>bg_navigator_hover.png) no-repeat;
	margin-left: 50px;
	
	/* CSS3 */
	box-shadow: 0px 0px 5px #FFF, 1px 1px 3px #999;
	-moz-box-shadow: 0px 0px 5px #FFF, 1px 1px 3px #999;
	-webkit-box-shadow: 0px 0px 5px #FFF, 1px 1px 3px #999;
}

/*----------------------------------------------------------------------------------------------------*/
/* Slideshow */
/*----------------------------------------------------------------------------------------------------*/

#slideshow
{
	width: 625px;
	height: 351px;
	margin: 40px 10px 10px 0px;
	overflow: hidden;
}

#slideshow h3
{
	margin: 5px 0px;	
	font-size: 14px;
}

#slideshow p
{
	font-size: 12px;
}

/*----------------------------------------------------------------------------------------------------*/
/* Motto */
/*----------------------------------------------------------------------------------------------------*/

#motto
{
	background: url(<?php echo $image_path ?>bg_motto_banner.png);
	color: #FFF;
	height: 46px;
	line-height: 46px;
	text-align: center;
	margin-bottom: 10px;
}

/*----------------------------------------------------------------------------------------------------*/
/* Profile */
/*----------------------------------------------------------------------------------------------------*/

#profile
{
	background: url(<?php echo $image_path ?>bg_profile.png) no-repeat;
	height: 400px;
	padding: 0px;
	position: relative;
}

	#profile_content
	{
		padding: 0px 20px; 
	}
	
		#profile_content blockquote
		{
			background: #FFF;
			border: 1px double #FFF;
			color: #000;
			display: table-cell;
			height: 130px;
			line-height: 36px;
			overflow: hidden;			
			padding: 10px;
			text-align: center;
			vertical-align: middle;
			width: 410px;
			
			/* CSS3 */
			text-shadow: none;
			
			border-radius: 10px;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
			
			box-shadow: 0px 0px 3px #666 inset;
			-moz-box-shadow: 0px 0px 3px #666 inset;
			-webkit-box-shadow: 0px 0px 3px #666 inset;
		}
		
		#profile_content blockquote:before
		{
			content: '" ';
			font-size: 36px;
			font-family: Georgia, "Times New Roman", Times, serif;
		}
		
		#profile_content blockquote:after
		{
			content: ' "';
			font-size: 36px;
			font-family: Georgia, "Times New Roman", Times, serif;
		}

		#profile_content div
		{
			margin-top: 20px;
		}

		#profile_content img
		{
			float: left;
			border: 1px double #FFF;
			
			/* CSS3 */
			border-radius: 10px;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
			
			box-shadow: 0px 0px 3px #666 inset;
			-moz-box-shadow: 0px 0px 3px #666 inset;
			-webkit-box-shadow: 0px 0px 3px #666 inset;
		}

		#profile_content li
		{
			list-style: none;
			line-height: 30px;
		}

/*----------------------------------------------------------------------------------------------------*/
/* Testimonial */
/*----------------------------------------------------------------------------------------------------*/

#testimonial h2
{
	background: url(<?php echo $image_path ?>bg_motto_banner.png);
	color: #FFF;
	height: 46px;
	line-height: 46px;
	margin-bottom: 10px;
}

#testimonial ul
{
	list-style: none;
	margin: 0px 0px 30px 0px;
}

#testimonial ul li
{
 	background: url(<?php echo $image_path ?>bg_testimonial.png) no-repeat;
	color: #333;
	height: 114px;
	margin: 5px 20px 10px 0px;
	max-width: 775px;
	padding: 25px 230px 15px 25px;
	position: relative;
	
	/* CSS */
	text-shadow: none;
}

#testimonial ul li img
{
	border: 3px double #FFF;
	position: absolute;
	right: 40px;
	overflow: hidden;
	
	/* CSS3 */
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
			
	box-shadow: 0px 0px 3px #666 inset;
	-moz-box-shadow: 0px 0px 3px #666 inset;
	-webkit-box-shadow: 0px 0px 3px #666 inset;
}

#testimonial ul li q
{
	display: block;
	text-indent: 20px;
}

#testimonial ul li b
{
	position: absolute;
	display: block;
	bottom: 15px;
	right: 230px;
}

/*----------------------------------------------------------------------------------------------------*/
/* End */
/*----------------------------------------------------------------------------------------------------*/
</style>
<link rel="stylesheet" type="text/css" href="http://localhost/aoss/assets/js/fancybox/jquery.fancybox-1.3.2.css" media="screen" />
<link rel="stylesheet" type="text/css" href="http://localhost/aoss/assets/js/galleryview-2.1.1/galleryview.css" media="screen" />
</head>
<body>
<div id="container" >
	<div class="row">
		<div id="header" class="column grid_16"> <?php echo image_asset($image_asset_path.'bg_logo.png', 'site', array('alt'=>'Agel Independent', 'width'=>'267', 'height'=>'152' , 'id'=>'logo')); ?>
			<div class="row">
				<?php include('navigator.php'); ?>
				<div id="slideshow" class="column grid_11">
					<ul id="photos" class="galleryview">
						<?php foreach ($slideshow->result() as $row): ?>
						<li>
							<?php echo image_asset($row->image, 'site', array('width'=>'625', 'height'=>'351', 'alt'=>$row->topic)) ?>
							<div class="panel-overlay">
							  <h3><?php echo $row->topic ?></h3>
							  <p><?php echo $row->description ?></p>
							</div>
						  </li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="motto" class="column grid_16">
			<blockquote>อย่าปฏิเสธสิ่งที่คุณไม่รู้จัก เพราะคุณอาจกำลังปฏิเสธสิ่งที่คูณตามหามาทั้งชีวิตอยู่ก็ได้</blockquote>
		</div>
	</div>
	<?php include("vdo.php"); ?>
	<div class="row">
		<div id="profile" class="column grid_8">
			<h2>
				<?php echo image_asset($image_asset_path.'bg_banner_fold.png', 'site', array('alt'=>'ribbon', 'width'=>'11', 'height'=>'41', 'class'=>'lef_ribbon')); ?>
				ข้อมูลนักธุรกิจ
			</h2>
			<div id="profile_content">
				<blockquote>
					$user['message']
				</blockquote>
				<div>
					<?php echo image_asset('img_img_squ_w.png', '', array('width'=>'130', 'height'=>'130', 'alt'=>'Profile Image')) ?>
					<ul class="float_l">
						<li>$user['name']</li>
						<li>ID:</li>
						<li>Tel:</li>
						<li>Email:</li>
					</ul>
				</div>
			</div>
		</div>
		<?php include("contact_form.php"); ?>
	</div>
	<?php include("testimonial.php"); ?>
	<?php include("footer.php"); ?>
</div>

<!-- jQuery -->
<?php echo js_asset('jquery-1.4.3.min.js'); ?>

<!-- fancybox -->
<?php echo js_asset('fancybox/jquery.fancybox-1.3.2.pack.js'); ?>

<!-- gallery view -->
<?php echo js_asset('galleryview-2.1.1/jquery.easing.1.3.js'); ?>
<?php echo js_asset('galleryview-2.1.1/jquery.galleryview-2.1.1.js'); ?>
<?php echo js_asset('galleryview-2.1.1/jquery.timers-1.2.js'); ?>
<script type="text/javascript">
$(function(){
	
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