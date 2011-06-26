<?php include('header.php'); ?>
<body>
<div data-role="page">
	<header data-role="header">
		<h1><?php echo $title ?></h1>
	</header>
	<div data-role="content">
		<?php echo $this->mobile_model->get_news_list_group_by_date('news') ?>
	</div>
	<footer data-role="footer">
		<h4>Powered by NextGen Solution</h4>
	</footer>
</div>
</body>
</html>