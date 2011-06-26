<?php include('header.php'); ?>
<body>
<div data-role="page">
	<header data-role="header">
		<h1><?php echo $title ?></h1>
	</header>
	<div data-role="content">
		<ul data-role="listview">
			<li><a href="<?php echo base_url() ?>mobile/news" data-transition="slide">ข่าวประชาสัมพันธ์</a></li>
			<li><a href="<?php echo base_url() ?>mobile/promotion" data-transition="slide">โปรโมชั่น</a></li>
			<li><a href="<?php echo base_url() ?>mobile/calendar" data-transition="slide">ปฏิทิน</a></li>
			<li><a href="<?php echo base_url() ?>mobile/policy" data-transition="slide">ข้อกำหนดสำหรับสมาชิก</a></li>
			<li><a href="<?php echo base_url() ?>mobile/elearning" data-transition="slide">สื่อการเรียนรู้</a></li>
			<li><a href="<?php echo base_url() ?>mobile/tools" data-transition="slide">เครื่องมือในการทำธุรกิจ</a></li>
		</ul>
	</div>
	<footer data-role="footer">
		<h4>Powered by NextGen Solution</h4>
	</footer>
</div>
</body>
</html>
