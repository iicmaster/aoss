<style type="text/css">
/*----------------------------------------------------------------------------------------------------*/
/* deepEnotion.css */
/*----------------------------------------------------------------------------------------------------*/

body 
{
	background: #213C08 url(<?php echo $image_path ?>bg.png) repeat-x;
	color: #FFF;
	text-shadow: 1px 1px 3px #666; 
}

h2
{
	background: url(<?php echo $image_path ?>bg_banner.png) repeat-x;
	color: #FFF;
	padding-left: 20px;
	position: relative;
	text-shadow: 1px 1px 3px #999;
	margin-top: 20px;
	
	/* CSS3 */
	box-shadow: 0px 1px 5px #666;
	-moz-box-shadow: 0px 1px 5px #666;
	-webkit-box-shadow: 0px 1px 5px #666;
}

h2 img.lef_ribbon
{
	position: absolute;
	left: -11px;
}

h2 img.right_ribbon
{
	position: absolute;
	right: -11px;
}

#container
{
	background: url(<?php echo $image_path ?>img_graphic.png) repeat-y top center;
	display: block;
}

a:link 		{ color: #FFF; text-decoration: none; }
a:visited	{ color: #FFF; text-decoration: none; outline:none; }
a:hover 	{ color: #F90; text-decoration: none; }
a:active 	{ color: #F90; text-decoration: none; outline:none; }

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

#navigator
{
	list-style: none;
	margin: 175px 0 0 0;
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
/* VDO */
/*----------------------------------------------------------------------------------------------------*/

#vdo
{
	background: url(<?php echo $image_path ?>bg_video.png) no-repeat;
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

#vdo a img
{
	display: block;
	margin: auto;
	margin-bottom: 15px;
	
	/* CSS3 */
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	
	box-shadow: 1px 1px 5px #999;
	-moz-box-shadow: 1px 1px 5px #999;
	-webkit-box-shadow: 1px 1px 5px #999;
}

/*----------------------------------------------------------------------------------------------------*/
/* Profile */
/*----------------------------------------------------------------------------------------------------*/

#profile
{
	background: url(<?php echo $image_path ?>bg_profile.png) no-repeat;
	height: 400px;
	padding: 1px 0px; 
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
/* Contact */
/*----------------------------------------------------------------------------------------------------*/

#contact_form
{
	background: url(<?php echo $image_path ?>bg_content.png);
	height: 400px;
	padding: 1px 0px 0px 0px; 
	position: relative;
	
	/* CSS3 */
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
}

#contact_form h2 { margin-bottom: 5px; }

#contact_form form
{
	color: #FFF;
	padding: 0px 28px 0px 20px;
}

#contact_form form label { font-weight: normal; }

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
 	background: url(<?php echo $image_path ?>bg_testimonail.png) repeat-x;
	min-height: 150px;
	margin: 5px 20px 10px 0px;
	max-width: 775px;
	padding: 25px 180px 15px 25px;
	position: relative;
	
	/* CSS */
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
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
	color: #333;
	display: block;
	text-indent: 20px;
	text-shadow: none;
	margin-bottom: 50px;
}

#testimonial ul li b
{
	position: absolute;
	display: block;
	bottom: 15px;
	right: 40px;
}


/*----------------------------------------------------------------------------------------------------*/
/* Footer */
/*----------------------------------------------------------------------------------------------------*/

#footer
{
	background: url(<?php echo $image_path ?>bg_video.png) no-repeat;
	margin-top: 20px;
	padding: 10px 20px;
	text-align: center;
}

#footer p
{
	margin: 10px 0px;
}

/*----------------------------------------------------------------------------------------------------*/
/* End */
/*----------------------------------------------------------------------------------------------------*/
</style>