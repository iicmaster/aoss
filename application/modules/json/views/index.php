<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Test JSON</title>
<?php echo js_asset('jquery-1.4.3.min.js') ?>
<script type="text/javascript">
$(document).ready(function(){
	$('#btn').click(function(){
		var url = '<?php echo base_url().'json/get_json' ?>';
		
		$.post(url, '',
			function(json){
				$('#content').html('kok');
			},
			'json'
		);
	});
});
</script>
</head>
<body>
<input id="btn" type="button">
<div id="content">
</div>
</body>
</html>