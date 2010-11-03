<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>News</title>
<?php echo css_asset('layout.css') ?>
<?php echo css_asset('style.css') ?>
<?php echo css_asset('jquery-ui-1.8.5/css/modern_green/jquery-ui-1.8.5.custom.css') ?>
<?php echo js_asset('jquery-1.4.3.min.js') ?>
<?php echo js_asset('jquery-ui-1.8.5/jquery-ui-1.8.5.min.js') ?>
<script type="text/javascript">
$(document).ready(function(){
	$('#dialog').dialog({
		autoOpen: false,
		width: 640,
	});
	
	$('#add_news').click(function(){
		$('#dialog').dialog('open');	
	});
	
	$('#delete_news').click(function(){
		var checked = '';
		
		$('tbody :input:checked').each(function() {
			checked += ',' + $(this).val();
		});
		
		var url = '<?php echo base_url().'news/delete_news' ?>';
		var data = 'id=' + checked;
		$.post(url, data, 
			function(json){
				var content = '';
				for(var loop = 0;loop < json['topic'].length;loop++){
					content += '<tr>';
					content += '<td><input type="checkbox" value=' + json['id'][loop] + ' /></td>'
					content += '<td>' + json['topic'][loop] + '</td>';
					content += '<td>' + json['detail'][loop] + '</td>';
					content += '</tr>';
				}
				$('tbody').html(content);
			},
			'json'
		);
	});
});
</script>
</head>
<body>
<div id="container">
	<div id="search_section">
		<form>
			<input id="search" type="text" />
			<select>
				<option value="">Topic</option>
				<option value="">Result</option>
			</select>
		</form>
	</div>
	<div id="content">
	<table border="2">
		<thead>	
			<tr>
				<th></th>
				<th>Topic</th>
				<th>Result</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($data->result() as $row): ?>
			<tr>
				<td><input type="checkbox" value="<?php echo $row->id_news ?>" /></td>
				<td><?php echo $row->topic ?></td>
				<td><?php echo $row->detail ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<a id="add_news" herf="#">Add</a> 
	<a id="delete_news" herf="#">Delete</a> 
	</div>
	<div id="dialog">
		<form action="<?php echo base_url()?>news/add_news" method="post">
			<ul>
				<li>
					<label for="topic">Topic</label>
					<input id="topic" name="topic" type="text" />
				</li>
				<li>
					<label for="detail">Detail</label>
					<input id="detail" name="detail" type="text" />
				</li>
				<li>
					<input type="submit" value="Add News" />
				</li>
			</ul>
		</form>
	</div>
</div>
</body>
</html>