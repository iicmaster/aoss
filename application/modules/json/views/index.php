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
		var pattern = new Array(
									'<td>#var1</td>',
									'<td><a href="#">#var1</a></td>',
									'<td><b>#var1</b>,<i>#var3</i>,<u>#var2</u></td>'
								);
		$.post(url, '',
			function(json){
				$('#content').html(get_json_row(json, pattern));
			},
			'json'
		);
	});
	
	$('#Submit').click(function(){
		if($('#name').val() != '' && $('#tel').val() != '' && $('#email').val() != '' && $('#message').val() != '')
		{
			var url = '<?php echo base_url().'member/post_message' ?>';
			var data = 'name=' + $('#name').val() + '&tel=' + $('#tel').val() + '&email=' + $('#email').val() + '&message=' + $('#message').val();
			$.post(url, '',
				function(response){
					if(response)
					{
						alert('ส่งข้อมูลเรียบร้อย');
						$('#name').val('');
						$('#tel').val('');
						$('#email').val('');
						$('#message').val('');
					}
					else
					{
						alert('Database Error');
					}
				}
			);
		}
		else
		{
			alert('กรอกข้อมูลไม่ครบ');	
		}
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

</script>
</head>
<body>
<input id="btn" type="button">
<table id="content" border="1">
</table>
<div id="contact_form" class="column grid_8">
  	<form action="" method="post">
		<label for="name">ชื่อ - นามสกุล</label>
		<input name="name" type="text" id="name" maxlength="100" />
		<label for="tel">เบอร์โทรศัพท์</label>
		<input name="tel" type="text" id="tel" maxlength="12" />
		<label for="email">อีเมลล์</label>
		<input type="text" name="email" id="email" />
		<label for="message">ข้อความ</label>
		<textarea name="message" rows="2" cols="1" id="message"></textarea>
		<input type="button" name="Submit" id="Submit" value="ส่งข้อมูล" />
  	</form>
</div>
</body>
</html>