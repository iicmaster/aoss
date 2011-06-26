<?php include('header.php'); ?>
<body>
<div data-role="page">
	<header data-role="header">
		<h1><?php echo $title ?></h1>
	</header>
	<div data-role="content">
		<ul data-role="listview">
			<li><a href="<?php echo base_url() ?>mobile/register" data-transition="slide">การสมัครสมาชิก</a></li>
			<li><a href="<?php echo base_url() ?>mobile/autoship" data-transition="slide">การรักษาคุณสมบัติ</a></li>
			<li><a href="<?php echo base_url() ?>mobile/commission" data-transition="slide">การจ่ายผลตอบแทน</a></li>
		</ul>
	</div>
	<footer data-role="footer">
		<h4>Powered by NextGen Solution</h4>
	</footer>
</div>
</body>
</html>
