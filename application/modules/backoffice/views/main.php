<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>
<?php echo css_asset('layout.css'); ?>
<?php echo css_asset('style.css'); ?>
<?php echo css_asset('backoffice_theme.css'); ?>
</head>
<body>
<div id="container">
	<?php $this->load->view('header'); ?>
	<?php $this->load->view('menu_main'); ?>
	<?php $this->load->view('navigator'); ?>
	<div id="content_section">
		<?php $this->load->view($main_content); ?>
	</div>
	<div class="clear"></div>
	<?php $this->load->view('footer'); ?>
</div>
</body>
</html>