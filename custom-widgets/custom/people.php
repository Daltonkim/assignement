<?php
// WP_Query arguments
    $args = array(
        'post_type'              => 'trackrecord',
        'posts_per_page'         => '10',
        'order'                  => 'DESC',
    );
    // The Query
    $query = new WP_Query($args);
    $period = get_field('period');
?>
<section class="people">
        <div class="people__slider  wow fadeInUp" data-wow-delay="600ms">
            <?php
                if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    ?>
                    <div class="people__left-right slide">
                        <div class="people__left">
                        <div class="people__title">
                            <?php _e('Our track <span>record</span>', 'ttu'); ?>
                        </div>
                            <div class="people__post-title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="people__country">
                                    <?php
                                        $categories = get_the_terms($post->ID, 'people-Category');
                                        if (is_array($categories) || is_object($categories)) {
                                            foreach ($categories as $category) {
                                                echo $category->name . ' ';
                                            }
                                        }
                                    ?>
                                </div>
                                <p>
                                    <?php the_field('excerpt'); ?>
                                </p>
                        </div>
                        <div class="people__right">
                            <div class="people__featured-img">
                                <?php echo the_post_thumbnail('full'); ?>
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
</section>
