<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>News</title>
<?php echo css_asset('layout.css') ?>
<?php echo css_asset('style.css') ?>
<link rel="stylesheet" type="text/css" href="http://localhost/aoss/assets/js/jquery-ui-1.8.5/css/modern_green/jquery-ui-1.8.5.custom.css"/>
<?php echo js_asset('jquery-1.4.3.min.js') ?>
<?php echo js_asset('jquery-ui-1.8.5/jquery-ui-1.8.5.min.js') ?>
<script type="text/javascript">
$(function(){
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
				$('tbody').html(get_json_row(json));
			},
			'json'
		);
	});
});

function get_json_row(json, pattern)
{
	pattern = pattern || 'default';
	var data = '';
	
	for(var first_loop = 0; first_loop < json.length; first_loop++)
	{
		data += '<tr>';
		if(pattern == 'default')
		{
			for(var second_loop = 0; second_loop < json[first_loop].length; second_loop++)
			{
				if(second_loop == 0)
				{
					data += '<td><input type="checkbox" value=' + json[first_loop][second_loop] + ' /></td>';
				}
				else
				{
					data += '<td>' + json[first_loop][second_loop] + '</td>';
				}
			}
		}
		else
		{
			for(var second_loop = 0; second_loop < json[first_loop].length; second_loop++)
			{
				var size = pattern[second_loop].match(/#var/g).length;
				if(size > 1)
				{
					var sub_pattern = pattern[second_loop];
					for(var third_loop = 0; third_loop < size; third_loop++)
					{
						sub_pattern = sub_pattern.replace('#var' + (third_loop + 1), json[first_loop][second_loop][third_loop]);		
					}
					data += sub_pattern;
				}
				else
				{
					data += pattern[second_loop].replace('#var1', json[first_loop][second_loop]);
				}
			}
		}
		data += '</tr>';
	}
	return data;
}

/*function get_json_table(json, pattern)
{
	var data = '';
	data += '<table>';
	for(var first_loop = 0;first_loop < json.length;first_loop++)
	{
		data += '<tr>';
		if(first_loop == 0){
			for(var second_loop = 0;second_loop < json[first_loop].length;second_loop++)
			{
				data += '<th>' + json[first_loop][second_loop] + '</th>';	
			}
		}
		else
		{
			for(var second_loop = 0;second_loop < json[first_loop].length;second_loop++)
			{
				if(pattern == 'default' && second_loop == 0)
				{
					data += '<td><input type="checkbox" value=' + json[first_loop][second_loop] + ' /></td>';
				}
				else
				{
					data += '<td>' + json[first_loop][second_loop] + '</td>';
				}
			}
		}
		data += '</tr>';
	}
	data += '</table>';
	return data;
}*/

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
		<a id="add_news" herf="#">Add</a> <a id="delete_news" herf="#">Delete</a> </div>
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