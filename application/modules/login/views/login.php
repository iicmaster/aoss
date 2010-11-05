<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>
<link rel="shortcut icon" href="../favicon.ico" />
<?php echo css_asset('layout.css'); ?>
<?php echo css_asset('style.css'); ?>
<?php echo css_asset('backoffice_theme.css'); ?>
<style type="text/css">
#head_section{ background-image: none; }
#error_msg { margin-top: 20px; }
#button_section { margin-bottom: 20px; text-align: center; }
form input[type=text], form input[type=password]
{
	width: 225px;
}
</style>
</head>

<body id="centerBox" onload="document.getElementById('username').focus();">
<div>
	<div class="gadget">
		<div id="head_section">
			<h2><?php echo $theme['head_text_1'] ?></h2>
			<?php echo image_asset('line_gradient_300px.png', '', array('alt'=>'line', 'width'=>'100%')); ?> 
			<h3><?php echo $theme['head_text_2'] ?></h3>
		</div>
		<div id="form_section">
			<p id="error_msg" class="center red text_12 bold"><?php echo $error_msg ?></p>
			<?php echo form_open('login/validate'); ?>
				<ul>
					<li>
						<label for="username">Username</label>
						<input type="text" name="username" id="username" value="" />
					</li>
					<li>
						<label for="password">Password</label>
						<input type="password" name="password" id="password" />
					</li>
				</ul>
				<div id="button_section">
					<input name="Submit" type="submit" value="Login" />
					<?php //echo anchor('javascript:void(0)', 'Login', array('class'=>'button', 'onclick'=>'this.form(0).submit()')); ?>
				</div>
			<?php echo form_close(); ?>
		</div>
		<div id="foot_section">
			<?php echo $theme['foot_text'] ?>
		</div>
	</div>
</div>
</body>
</html>