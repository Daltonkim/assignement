<?php

namespace Elementor;

class My_Widget_1 extends Widget_Base
{

	public function get_name()
	{
		return 'Team';
	}

	public function get_title()
	{
		return 'Team';
	}

	public function get_icon()
	{
		return 'fa fa-font';
	}

	public function get_categories()
	{
		return ['basic'];
	}

	protected function _register_controls()
	{

		$this->start_controls_section(
			'section_title',
			[
				'label' => __('Content', 'elementor'),
			]
		);



		$this->end_controls_section();
	}

	protected function render()
	{



?>
		<div class="team-pub-wrapper">
			<?php
			get_template_part('custom-widgets/custom/filter', null);
			$args = array(
				'post_type'              => 'Team',
				'posts_per_page'         => '-1',
				'order'                  => 'DESC',
			);
			$the_query = new \WP_Query($args); //Check the WP_Query docs to see how you can limit which posts to display
			// var_export($the_query)
			?>
			<div class="team-pub">
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
								<div class="team-pub__card-img"style="width: 100%;">
									<img style="width: 100%;" src="<?php echo the_field('image'); ?>" alt=""></img>
								</div>
								<div class="team-pub__card-bottom-wrapper">
									<p><?php echo the_field('full_name'); ?></p>
									<p><?php echo the_field('role'); ?></p>
									<p><?php echo the_field('description'); ?></p>

									<a>Show more</a>
								</div>

							</div> <!-- end item -->
						<?php
						// modal content
						// get_template_part('template-parts/custom/modal-content', null);
						endwhile;
						?>
				</div>
			</div>
		<?php else :
		?>
			<div class="no_data">
				No Data has been found!
				<div>
				<?php
					endif; ?>
				</div>
		<?php
	}

	protected function _content_template()
	{
	}
}
