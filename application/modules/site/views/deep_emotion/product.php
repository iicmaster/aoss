<?php include('header.php') ?>
<style type="text/css">
/*----------------------------------------------------------------------------------------------------*/
/* Navigator */
/*----------------------------------------------------------------------------------------------------*/
#navigator ul
{
	list-style: none;
	margin: 30px 0 0 0;
	position: relative;
}

#navigator li
{
	float:left;
	margin: 8px 0px;
}

#navigator li:first-child { margin-left: 50p; }

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
	margin-left: 20px;
	opacity: 0.9;
	width: 150px;
}

#navigator li a:hover, #navigator li a.active { box-shadow: 0px 0px 5px #FFF, 1px 1px 3px #999; 	/*margin-left: 50px;*/
	background: url(<?php echo base_url().'assets/modules/site/image/theme/'.$member_theme['name'].'/'.$member_theme['color'] ?>/bg_navigator_hover.png) no-repeat;
}

/*----------------------------------------------------------------------------------------------------*/
/* Left Navigator */
/*----------------------------------------------------------------------------------------------------*/

#navigator_left 

/*----------------------------------------------------------------------------------------------------*/
/* VDO */
/*----------------------------------------------------------------------------------------------------*/

#vdo div { text-align: center; }
</style>
</head>

<body>
<div id="container" >
	<div class="row">
		<div id="header" class="column grid_16">
			<div class="row"> <?php echo image_asset('theme/'.$member_theme['name'].'/'.$member_theme['color'].'/bg_logo.png', 'site', array('alt'=>'Agel Independent', 'width'=>'267', 'height'=>'152' , 'id'=>'logo')); ?>
				<?php include('navigator.php'); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="column grid_5">
			<div id="product">
				<h2><?php echo image_asset('theme/'.$member_theme['name'].'/'.$member_theme['color'].'/bg_banner_fold.png', 'site', array('alt'=>'ribbon', 'width'=>'11', 'height'=>'41', 'class'=>'lef_ribbon')); ?>Agel core</h2>
				<ul>
					<li>MIN</li>
					<li>UMI</li>
					<li>EXO</li>
				</ul>
				<h2><?php echo image_asset('theme/'.$member_theme['name'].'/'.$member_theme['color'].'/bg_banner_fold.png', 'site', array('alt'=>'ribbon', 'width'=>'11', 'height'=>'41', 'class'=>'lef_ribbon')); ?>Agel Active</h2>
				<ul>
					<li>OHM</li>
					<li>SLM / FIT</li>
				</ul>
				<h2><?php echo image_asset('theme/'.$member_theme['name'].'/'.$member_theme['color'].'/bg_banner_fold.png', 'site', array('alt'=>'ribbon', 'width'=>'11', 'height'=>'41', 'class'=>'lef_ribbon')); ?>Agel Trive</h2>
				<ul>
					<li>HRT</li>
					<li>CAL</li>
					<li>FLX</li>
					<li>GRN</li>
				</ul>
				<h2><?php echo image_asset('theme/'.$member_theme['name'].'/'.$member_theme['color'].'/bg_banner_fold.png', 'site', array('alt'=>'ribbon', 'width'=>'11', 'height'=>'41', 'class'=>'lef_ribbon')); ?>Agel Body</h2>
				<ul>
					<li>GLO</li>
					<li>UMI</li>
					<li>EXO</li>
				</ul>
			</div>
			<?php include("contact_form.php"); ?>
		</div>
		<div class="column grid_11">
			<div id="vdo">
				<h2><?php echo image_asset('theme/'.$member_theme['name'].'/'.$member_theme['color'].'/bg_banner_fold.png', 'site', array('alt'=>'ribbon', 'width'=>'11', 'height'=>'41', 'class'=>'lef_ribbon')); ?>VDO</h2>
				<div> <img src="../../../../assets/image/img_vdo_rec_w.png" width="550" height="415" alt="VDO" /> </div>
			</div>
			<?php include("testimonial.php"); ?>
		</div>
	</div>
	<?php include("footer.php"); ?>
</div>
</body>
</html>