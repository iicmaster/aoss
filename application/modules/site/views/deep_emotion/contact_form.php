<div id="contact_form" class="column grid_8">
	<h2><?php echo image_asset($image_asset_path.'bg_banner_fold_right.png', 'site', array('alt'=>'ribbon', 'width'=>'11', 'height'=>'41', 'class'=>'right_ribbon')); ?>รับตัวอย่างผลิตภัณฑ์ฟรี</h2>
  	<form action="" method="post">
		<label for="name">ชื่อ - นามสกุล</label>
		<input name="name" type="text" id="name" maxlength="100" />
		<label for="tel">เบอร์โทรศัพท์</label>
		<input name="tel" type="text" id="tel" maxlength="12" />
		<label for="email">อีเมลล์</label>
		<input type="text" name="email" id="email" />
		<label for="message">ข้อความ</label>
		<textarea name="message" rows="2" cols="1" id="message"></textarea>
		<input type="submit" name="Submit" id="Submit" value="ส่งข้อมูล" />
  	</form>
</div>