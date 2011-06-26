<div id="header" class="column grid_16"> 
	<?php echo image_asset($theme_asset_path.'bg_logo.png', 'site', array('alt'=>'Agel Independent', 'width'=>'267', 'height'=>'152' , 'id'=>'logo')); ?>
	<div class="row">
		<div class="column grid_5">
			<?php include('navigator.php'); ?>
		</div>
		<div id="slideshow" class="column grid_11">
			<ul id="photos" class="galleryview">
				<?php foreach ($slideshow->result() as $row): ?>
				<li>
					<?php echo image_asset($row->image, 'site', array('width'=>'625', 'height'=>'351', 'alt'=>$row->topic)) ?>
					<div class="panel-overlay">
					  <h3><?php echo $row->topic ?></h3>
					  <p><?php echo $row->description ?></p>
					</div>
				  </li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
<div class="row">
	<div id="motto" class="column grid_16">
		<blockquote>อย่าปฏิเสธสิ่งที่คุณไม่รู้จัก เพราะคุณอาจกำลังปฏิเสธสิ่งที่คูณตามหามาทั้งชีวิตอยู่ก็ได้</blockquote>
	</div>
</div>