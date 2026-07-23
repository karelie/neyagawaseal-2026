<?php

/**
 * Enqueue scripts and localize data for Works Ajax filtering
 */
function works_ajax_enqueue_scripts() {
    if ( is_post_type_archive('works') || is_tax(array('work_genre', 'work_year', 'work_use', 'work_construction')) ) {
        wp_enqueue_script(
            'ajax-works-filter',
            get_theme_file_uri('/js/ajax-works-filter.js'),
            array('jquery'),
            filemtime(get_theme_file_path('/js/ajax-works-filter.js')),
            true
        );

        wp_localize_script('ajax-works-filter', 'works_ajax_obj', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('works-ajax-nonce'),
        ));
    }
}
add_action('wp_enqueue_scripts', 'works_ajax_enqueue_scripts');

/**
 * Ajax handler for filtering works
 */
function works_ajax_filter_handler() {
    check_ajax_referer('works-ajax-nonce', 'nonce');

    $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $genre = isset($_POST['work_genre']) ? sanitize_text_field($_POST['work_genre']) : '';
    $year = isset($_POST['work_year']) ? sanitize_text_field($_POST['work_year']) : '';
    $use = isset($_POST['work_use']) ? sanitize_text_field($_POST['work_use']) : '';
    $construction = isset($_POST['work_construction']) ? sanitize_text_field($_POST['work_construction']) : '';

    $args = array(
        'post_type'      => 'works',
        'posts_per_page' => 8,
        'paged'          => $paged,
        'post_status'    => 'publish',
    );

    $tax_query = array();

    if (!empty($genre) && $genre !== 'all') {
        $tax_query[] = array(
            'taxonomy' => 'work_genre',
            'field'    => 'slug',
            'terms'    => $genre,
        );
    }

    if (!empty($year) && $year !== 'all') {
        $tax_query[] = array(
            'taxonomy' => 'work_year',
            'field'    => 'slug',
            'terms'    => $year,
        );
    }

    if (!empty($use) && $use !== 'all') {
        $tax_query[] = array(
            'taxonomy' => 'work_use',
            'field'    => 'slug',
            'terms'    => $use,
        );
    }

    if (!empty($construction) && $construction !== 'all') {
        $tax_query[] = array(
            'taxonomy' => 'work_construction',
            'field'    => 'slug',
            'terms'    => $construction,
        );
    }

    if (count($tax_query) > 0) {
        if (count($tax_query) > 1) {
            $tax_query['relation'] = 'AND';
        }
        $args['tax_query'] = $tax_query;
    }

    $the_query = new WP_Query($args);

    ob_start();

    if ($the_query->have_posts()) : ?>
        <div class="p_works_grid">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <article class="p_works_card">
                    <a href="<?php the_permalink(); ?>" class="p_works_card__link">
                        <div class="p_works_card__img_wrap">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('works_list', array('alt' => get_the_title())); ?>
                            <?php else : ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sustainability_1.jpg" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="p_works_card__tags">
                            <?php
                            $genre_terms = get_the_terms(get_the_ID(), 'work_genre');
                            if ($genre_terms && !is_wp_error($genre_terms)) {
                                foreach ($genre_terms as $g) {
                                    echo '<span class="p_works_card__badge">' . esc_html($g->name) . '</span>';
                                }
                            } else {
                                echo '<span class="p_works_card__badge">新築</span>';
                            }

                            $use_terms = get_the_terms(get_the_ID(), 'work_use');
                            if ($use_terms && !is_wp_error($use_terms)) {
                                foreach ($use_terms as $u) {
                                    echo '<span class="p_works_card__badge">' . esc_html($u->name) . '</span>';
                                }
                            } else {
                                echo '<span class="p_works_card__badge">工場・倉庫</span>';
                            }
                            ?>
                        </div>
                        <h3 class="p_works_card__title"><?php the_title(); ?></h3>
                        <p class="p_works_card__year">
                            <?php 
                            $year_val = get_field('completion_date');
                            if (!$year_val) {
                                $year_terms = get_the_terms(get_the_ID(), 'work_year');
                                if ($year_terms && !is_wp_error($year_terms)) {
                                    $year_val = $year_terms[0]->name;
                                } else {
                                    $year_val = '2026年';
                                }
                            } else {
                                $year_val = $year_val . '年';
                            }
                            echo esc_html($year_val);
                            ?>
                        </p>
                        <div class="p_works_card__divider"></div>
                    </a>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="p_works_pagination">
            <?php
            echo paginate_links(array(
                'total'     => $the_query->max_num_pages,
                'current'   => max(1, $paged),
                'mid_size'  => 2,
                'end_size'  => 1,
                'prev_text' => '<span class="p_works_pagination__arrow p_works_pagination__arrow--prev"></span>',
                'next_text' => '<span class="p_works_pagination__arrow p_works_pagination__arrow--next"></span>',
            ));
            ?>
        </div>
    <?php else : ?>
        <p class="p_works_no_results">該当する施工実績が見つかりませんでした。</p>
    <?php endif;

    wp_reset_postdata();

    $html = ob_get_clean();
    wp_send_json_success(array(
        'html' => $html,
    ));
}

add_action('wp_ajax_works_filter', 'works_ajax_filter_handler');
add_action('wp_ajax_nopriv_works_filter', 'works_ajax_filter_handler');
