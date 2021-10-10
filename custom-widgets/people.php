<?php

namespace Elementor;

class MyPeople extends Widget_Base
{

	public function get_name()
	{
		return 'People';
	}

	public function get_title()
	{
		return 'People';
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
		<?php
		// WP_Query arguments
		$args = array(
			'post_type'              => 'People',
			'posts_per_page'         => '-1',
			'order'                  => 'DESC',
		);
		// The Query
		$query = new \WP_Query($args);
		$period = get_field('period');
		?>
		<div class="people">
			<div class="people__slider">
				<?php
				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();
				?>
						<div class="people__left-right slide">
							<div class="people__left">
								<div class="people__featured-img">
									<img width="200" src="<?php echo get_field('image'); ?>" alt="">
								</div>
							</div>
							<div class="people__center">
								<div class="people__post-name">
									<?php echo get_field('full_name'); ?>
								</div>
								<div class="people__post-title">
									<?php echo get_field('title'); ?>
								</div>
							</div>
							<div class="people__right">
								<div class="people__post-subtitle">
									<?php echo get_field('sub_title'); ?>
								</div>
							</div>
						</div>
					<?php
					endwhile;
					wp_reset_postdata();
					?>
			</div>
		<?php
				else :
				// no people found
				endif;
		?>
		</div>
<?php

	}

	protected function _content_template()
	{
	}
}
