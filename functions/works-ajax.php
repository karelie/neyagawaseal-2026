<?php

/**
 * Ajax handler for loading more works
 */
function load_more_works_handler() {
    $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;
    
    $args = array(
        'post_type' => 'works',
        'posts_per_page' => 8,
        'paged' => $paged,
        'post_status' => 'publish',
    );

    // Apply filters if passed via POST
    $tax_query = array();
    
    if (isset($_POST['major_cat']) && is_array($_POST['major_cat'])) {
        $tax_query[] = array(
            'taxonomy' => 'works_construction',
            'field'    => 'slug',
            'terms'    => array_map('sanitize_text_field', $_POST['major_cat']),
        );
    }
    
    if (isset($_POST['sub_cat']) && is_array($_POST['sub_cat'])) {
        $tax_query[] = array(
            'taxonomy' => 'works_category',
            'field'    => 'slug',
            'terms'    => array_map('sanitize_text_field', $_POST['sub_cat']),
        );
    }

    if (count($tax_query) > 0) {
        if(count($tax_query) > 1) {
            $tax_query['relation'] = 'AND';
        }
        $args['tax_query'] = $tax_query;
    }

    $query = new WP_Query($args);

    ob_start();

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="item">
                <a href="<?php the_permalink(); ?>">
                    <div class="image">
                        <?php 
                        if(has_post_thumbnail()) {
                            the_post_thumbnail('works_list'); 
                        } else {
                            echo '<img src="' . get_stylesheet_directory_uri() . '/images/works_dummy.jpg" alt="">';
                        }
                        ?>
                    </div>
                    <div class="text_box">
                        <span class="major_cat">
                            <?php 
                            $major_terms = get_the_terms(get_the_ID(), 'works_construction');
                            if ($major_terms && !is_wp_error($major_terms)) {
                                echo esc_html($major_terms[0]->name);
                            }
                            ?>
                        </span>
                        <h3 class="title">
                            <?php the_title(); ?>
                        </h3>
                        <div class="meta">
                            <span class="location_date">
                                <?php echo esc_html(get_field('work_area')); ?> |
                                <?php echo esc_html(get_field('completion_date')); ?>年
                            </span>
                        </div>
                        <div class="tags">
                            <?php 
                            $terms = get_the_terms(get_the_ID(), 'works_category'); 
                            if ($terms && !is_wp_error($terms)) {
                                foreach($terms as $t) {
                                    echo '<span class="tag">#' . esc_html($t->name) . '</span> ';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </a>
            </div>
            <?php
        endwhile;
    endif;
    
    $html = ob_get_clean();
    $has_more = $query->max_num_pages > $paged;

    wp_reset_postdata();

    wp_send_json_success(array(
        'html' => $html,
        'has_more' => $has_more
    ));
}

add_action('wp_ajax_load_more_works', 'load_more_works_handler');
add_action('wp_ajax_nopriv_load_more_works', 'load_more_works_handler');
