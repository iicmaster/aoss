<div class="row">
	<div id="vdo" class="column grid_16">
		<h2>VDO</h2>
		<ul>
		<?php foreach ($vdo->result() as $row): ?>
			<li>
				<a href="<?php echo $row->url ?>" title="<?php echo $row->title ?>">
					<img src="<?php echo get_thumbnail_url($row->url) ?>" width="165" height="125" alt="<?php echo $row->title ?>" />
					<?php echo $row->title ?>
				</a>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>