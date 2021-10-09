<?php
// filter
?>
<div class="team-pub-wrapper">
<?php
get_template_part('template-parts/layouts/team/filter', null);
$args = array(
	'post_type'              => 'Team',
	'posts_per_page'         => '-1',
	'order'                  => 'DESC',
);
$the_query = new WP_Query($args); //Check the WP_Query docs to see how you can limit which posts to display
var_export($the_query)
?>
<section class="team-pub">
	<div class="team-pub__card" id="isotope-list">
		<?php
		if ($the_query->have_posts()) :
		?>

			<?php while ($the_query->have_posts()) : $the_query->the_post();
				$termsArray = get_the_terms($post->ID, "team-Category");  //Get the terms for this particular item
				$termsString = ""; //initialize the string that will contain the terms
				foreach ($termsArray as $term) { // for each term
					$termsString .= $term->slug . ' '; //create a string that has all the slugs
				}
			?>
				<div class="team-pub__card-wrapper <?php echo $termsString; ?> item">
					<?php
					// 'item' is used as an identifier (see Setp 5, line 6)
					?>
					<div class="team-pub__card-img">
						<?php echo the_post_thumbnail('full'); ?>
					</div>
					<div class="team-pub__card-bottom-wrapper">
						<p class="team-pub__card-year">
							<?php
							if (strlen($post->post_title) > 30) {
								echo substr(the_title($before = '', $after = '', false), 0, 30) . '...';
							} else {
								the_title();
							}
							?>
						<div class="team-pub__card-download-btn">
							<a href="<?php echo the_field('pdf_file') ?>" download>
								Download
							</a>
						</div>
						</p>
					</div>
					<a href="#team-<?php the_ID(); ?>" rel="modal:open">
						<div class="team-pub__card-btn">
							<div class="team-pub__card-btn-txt">
								<?php _e('Publication Details', 'ttu'); ?>
							</div>
							<div class="team-pub__card-btn-icon">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/frontend/images/team-right-arrow.svg" alt="right arrow">
							</div>
						</div>
					</a>
				</div> <!-- end item -->
			<?php
				// modal content
				get_template_part('template-parts/custom/modal-content', null);
			endwhile;
			?>
	</div>
	</div>
<?php else :
?>
	<div class="no_publication">
		No Publications have been found!
		<div>
		<?php
		endif; ?>
</section>
