<div class="row">
	<div id="testimonial" class="column grid_16">
		<h2>ประสบการณ์ผู้ใช้</h2>
		<ul>
			<?php foreach ($testimonial->result() as $row): ?>
			<li>
				<?php echo image_asset('product/icon/'.$row->id_product.'.jpg', 'site', array('width'=>'100', 'height'=>'100', 'alt'=>'Image')) ?>
				<q><?php echo $row->description ?></q>
				<b><?php echo $row->name.' - '.$row->job ?></b>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
