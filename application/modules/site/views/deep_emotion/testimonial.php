<div class="row">
	<div id="testimonial" class="column grid_16">
		<h2>ประสบการณ์ผู้ใช้</h2>
		<ul>
			<?php foreach ($testimonial->result() as $row): ?>
			<li><?php echo image_asset('img_img_squ_w.png', '', array('width'=>'100', 'height'=>'100', 'alt'=>'Image')) ?><?php echo $row->description ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
