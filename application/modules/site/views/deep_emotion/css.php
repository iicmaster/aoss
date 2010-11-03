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
	-moz-box-shadow: 1px 1px 5px #666;
	-webkit-box-shadow: 1px 1px 5px #999;
}
/*----------------------------------------------------------------------------------------------------*/
/* Contact */
/*----------------------------------------------------------------------------------------------------*/

#contact_form
{
	background: url(<?php echo $image_path ?>bg_profile.png) no-repeat;
	height: 400px;
	padding: 0px;
	position: relative;
}

#contact_form h2 { margin-bottom: 5px; }

#contact_form form
{
	color: #FFF;
	padding: 0px 28px 0px 20px;
}

#contact_form form label { font-weight: normal; }

/*----------------------------------------------------------------------------------------------------*/
/* Footer */
/*----------------------------------------------------------------------------------------------------*/

#footer
{
	background: url(<?php echo $image_path ?>bg_video.png) no-repeat;
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