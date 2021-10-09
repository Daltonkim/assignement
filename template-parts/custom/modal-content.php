<!-- Modal Content -->
<div id="team-<?php the_ID(); ?>" class="modal">
	<div class="team-pub__modal">
		<div class="team-pub__modal-left">
			<div class="team-pub__modal-img">
				<?php echo the_post_thumbnail('full'); ?>
			</div>
			<div class="team-pub__modal-country">
				<?php
				$categories = get_the_terms($post->ID, 'technologies-Category');
				if (is_array($categories) || is_object($categories)) {
					foreach ($categories as $category) {
						echo $category->name . ' ';
					}
				}
				?>
			</div>
		</div>
		<div class="team-pub__modal-right">
			<div class="team-pub__modal-title">
				<?php the_title(); ?>
			</div>
			<div class="team-pub__modal-download-btn">
				<a href="<?php echo the_field('pdf_file') ?>" target="_blank">
					<?php _e('Download', 'ttu'); ?>
				</a>
			</div>
			<div class="team-pub__modal-description">
				<?php the_field('description'); ?>
			</div>
			<div class="team-pub__modal-btn">
				<a href="#" rel="modal:close">
					<?php _e('Close', 'ttu'); ?>
				</a>
			</div>
		</div>
	</div>
</div>
