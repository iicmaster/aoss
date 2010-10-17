<?php include('header.php') ?>
<style type="text/css">
/*----------------------------------------------------------------------------------------------------*/
/* Header */
/*----------------------------------------------------------------------------------------------------*/

#header
{
 background: url(<?php echo base_url().'assets/modules/site/image/theme/'.$member_theme['name'].'/'.$member_theme['color'] ?>/bg_slideshow.png) no-repeat bottom right;
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
 background: url(<?php echo base_url().'assets/modules/site/image/theme/'.$member_theme['name'].'/'.$member_theme['color'] ?>/bg_navigator.png) center no-repeat;
	border: 1px solid #FFF;
	border-radius: 30px;
	box-shadow: 1px 1px 3px #999;
	color: #FFF;
	display: block;
	height: 30px;
	line-height: 32px;
	text-align: center;
	text-decoration: none;
	text-shadow: 1px 1px 3px #999;
	margin-left: 70px;
	opacity: 0.9;
	width: 150px;
}

#navigator li a:hover, #navigator li a.active
{
	box-shadow: 0px 0px 5px #FFF, 1px 1px 3px #999;
	margin-left: 50px;
 background: url(<?php echo base_url().'assets/modules/site/image/theme/'.$member_theme['name'].'/'.$member_theme['color'] ?>/bg_navigator_hover.png) no-repeat;
}

/*----------------------------------------------------------------------------------------------------*/
/* Slideshow */
/*----------------------------------------------------------------------------------------------------*/

#slideshow
{
	background: #FFF;
	width: 640px;
	height: 360px;
	margin: 40px 10px 10px 0px;
}

/*----------------------------------------------------------------------------------------------------*/
/* Motto */
/*----------------------------------------------------------------------------------------------------*/

#motto
{
 background: url(<?php echo base_url().'assets/modules/site/image/theme/'.$member_theme['name'].'/'.$member_theme['color'] ?>/bg_motto_banner.png);
	color: #FFF;
	height: 46px;
	line-height: 46px;
	text-align: center;
	margin-bottom: 10px;
}

/*----------------------------------------------------------------------------------------------------*/
/* VDO */
/*----------------------------------------------------------------------------------------------------*/

#vdo
{
 background: url(<?php echo base_url().'assets/modules/site/image/theme/'.$member_theme['name'].'/'.$member_theme['color'] ?>/bg_video.png) no-repeat;
	height: 300px;
	padding: 0px;
	margin-bottom: 10px;
}

#vdo li
{
	float: left;
	list-style: none;
	text-align: center;
	margin: 0px;
	width: 235px;
}

#vdo img
{
	display: block;
	margin: auto;
	margin-bottom: 15px;
}

/*----------------------------------------------------------------------------------------------------*/
/* Profile */
/*----------------------------------------------------------------------------------------------------*/

#profile
{
 background: url(<?php echo base_url().'assets/modules/site/image/theme/'.$member_theme['name'].'/'.$member_theme['color'] ?>/bg_profile.png) no-repeat;
	height: 400px;
	padding: 0px;
	position: relative;
}

#profileImg
{
	float: left;
	margin: 0px 20px;
}

#profile li { list-style: none; }

/*----------------------------------------------------------------------------------------------------*/
/* Contact */
/*----------------------------------------------------------------------------------------------------*/

#contact_form
{
 background: url(<?php echo base_url().'assets/modules/site/image/theme/'.$member_theme['name'].'/'.$member_theme['color'] ?>/bg_profile.png) no-repeat;
	height: 400px;
	padding: 0px;
	position: relative;
}

#contact_form form
{
	color: #FFF;
	padding: 0px 20px;
}

#contact_form label { font-weight: normal; }

#contact_form input[type=text], #contact input[type=password], #contact textarea { width: 410px; }

/*----------------------------------------------------------------------------------------------------*/
/* Testimonial */
/*----------------------------------------------------------------------------------------------------*/

#testimonial h2
{
 background: url(<?php echo base_url().'assets/modules/site/image/theme/'.$member_theme['name'].'/'.$member_theme['color'] ?>/bg_motto_banner.png);
	color: #FFF;
	height: 46px;
	line-height: 46px;
	margin-bottom: 10px;
}

#testimonial ul
{
	list-style: none;
	margin: 0px;
}

#testimonial li
{
 background: url(<?php echo base_url().'assets/modules/site/image/theme/'.$member_theme['name'].'/'.$member_theme['color'] ?>/bg_testimonial.png) no-repeat;
	color: #333;
	text-shadow: none;
	height: 114px;
	padding: 30px 50px 30px 30px;
	position: relative;
	margin-left: 10px;
	max-width: 775px;
}

#testimonial img
{
	border: 3px solid #FFF;
	border-radius: 10px;
	position: absolute;
	right: -30px;
}

/*----------------------------------------------------------------------------------------------------*/
/* End */
/*----------------------------------------------------------------------------------------------------*/
</style>
</head>
<body>
<div id="container" >
	<div class="row">
		<div id="header" class="column grid_16"> <?php echo image_asset('theme/'.$member_theme['name'].'/'.$member_theme['color'].'/bg_logo.png', 'site', array('alt'=>'Agel Independent', 'width'=>'267', 'height'=>'152' , 'id'=>'logo')); ?>
			<div class="row">
				<?php include('navigator.php'); ?>
				<div id="slideshow" class="column grid_11"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="motto" class="column grid_16">
			<blockquote>อย่าปฏิเสธสิ่งที่คุณไม่รู้จัก เพราะคุณอาจกำลังปฏิเสธสิ่งที่คูณตามหามาทั้งชีวิตอยู่ก็ได้</blockquote>
		</div>
	</div>
	<div class="row">
		<div id="vdo" class="column grid_16">
			<h2><?php echo image_asset('theme/'.$member_theme['name'].'/'.$member_theme['color'].'/bg_banner_fold.png', 'site', array('alt'=>'ribbon', 'width'=>'11', 'height'=>'41', 'class'=>'lef_ribbon')); ?>VDO</h2>
			<ul>
				<li><img src="<?php echo base_url().'assets/image' ?>/img_vdo_rec_w.png" width="165" height="125" alt="VDO" />Overview</li>
				<li><img src="<?php echo base_url().'assets/image' ?>/img_vdo_rec_w.png" width="165" height="125" alt="VDO" />บุคลากรทางการแพทย์</li>
				<li><img src="<?php echo base_url().'assets/image' ?>/img_vdo_rec_w.png" width="165" height="125" alt="VDO" />ประสบการณ์ผู้ใช้</li>
				<li><img src="<?php echo base_url().'assets/image' ?>/img_vdo_rec_w.png" width="165" height="125" alt="VDO" />Why Agel?</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div id="profile" class="column grid_8">
			<h2><?php echo image_asset('theme/'.$member_theme['name'].'/'.$member_theme['color'].'/bg_banner_fold.png', 'site', array('alt'=>'ribbon', 'width'=>'11', 'height'=>'41', 'class'=>'lef_ribbon')); ?>Profile</h2>
			<ul>
				<img src="<?php echo base_url().'assets/image' ?>/img_img_squ_w.png" alt="Image" name="profileImg" width="200" height="300" id="profileImg" />
				<li>ชื่อนามสกุล</li>
				<li>ID:</li>
				<li>Tel:</li>
				<li>Email:</li>
			</ul>
		</div>
		<?php include("contact_form.php"); ?>
	</div>
	<?php include("testimonial.php"); ?>
	<?php include("footer.php"); ?>
</div>
</body>
</html>