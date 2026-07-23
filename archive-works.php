<?php
/**
 * Template Name: 施工実績 一覧 (Works Archive)
 * Template Post Type: post, page, works
 *
 * @package neyagawaseal
 */

get_header();
?>

<!-- <div class="guidebox"></div> -->

<main class="l_main p_works_archive">
    <!-- Hero Header Section -->
    <section class="p_works_hero">
        <div class="inner w-md">
            <div class="p_works_hero__inner">
                <div class="p_works_hero__decor">
                    <!-- PC version -->
                    <svg class="p_works_hero__decor_svg p_works_hero__decor_svg--pc" xmlns="http://www.w3.org/2000/svg"
                        width="280" height="280" viewBox="0 0 280 280" fill="none">
                        <path d="M224,0h56L56,280H0Z" fill="url(#works_hero_decor_grad_pc)" />
                        <defs>
                            <linearGradient id="works_hero_decor_grad_pc" x1="0.5" y1="0" x2="0.5" y2="1"
                                gradientUnits="objectBoundingBox">
                                <stop offset="0" stop-color="#e54300" />
                                <stop offset="1" stop-color="#eceff1" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <!-- SP version -->
                    <svg class="p_works_hero__decor_svg p_works_hero__decor_svg--sp" xmlns="http://www.w3.org/2000/svg"
                        width="420" height="420" viewBox="0 0 420 420" fill="none">
                        <path d="M336,0h84L84,420H0Z" fill="url(#works_hero_decor_grad_sp)" />
                        <defs>
                            <linearGradient id="works_hero_decor_grad_sp" x1="0.5" y1="0" x2="0.5" y2="1"
                                gradientUnits="objectBoundingBox">
                                <stop offset="0" stop-color="#e54300" />
                                <stop offset="1" stop-color="#eceff1" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="p_works_hero__content">
                    <h1 class="p_works_hero__title">
                        <span class="p_works_hero__en">Works</span>
                        <span class="p_works_hero__ja_group">
                            <span class="p_works_hero__ja_icon"></span>
                            <span class="p_works_hero__ja">施工実績</span>
                        </span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="inner w-md">

        <!-- Filter Search Box Section -->
        <section class="p_works_filter">
            <h2 class="p_works_filter__heading">条件で検索</h2>
            <div class="p_works_filter__form">
                <!-- Genre Filter -->
                <div class="p_works_filter__group">
                    <div class="p_works_filter__label">
                        <span class="p_works_filter__label_dot"></span>
                        <span class="p_works_filter__label_text">ジャンルで探す</span>
                    </div>
                    <div class="p_works_filter__select_wrap">
                        <select name="work_genre" id="filter-work-genre" class="p_works_filter__select">
                            <option value="all">選択する</option>
                            <?php
                            $genre_terms = get_terms(array(
                                'taxonomy'   => 'work_genre',
                                'hide_empty' => false,
                            ));
                            if (!empty($genre_terms) && !is_wp_error($genre_terms)) :
                                foreach ($genre_terms as $term) :
                                    echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                                endforeach;
                            endif;
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Year Filter -->
                <div class="p_works_filter__group">
                    <div class="p_works_filter__label">
                        <span class="p_works_filter__label_dot"></span>
                        <span class="p_works_filter__label_text">年号で探す</span>
                    </div>
                    <div class="p_works_filter__select_wrap">
                        <select name="work_year" id="filter-work-year" class="p_works_filter__select">
                            <option value="all">選択する</option>
                            <?php
                            $year_terms = get_terms(array(
                                'taxonomy'   => 'work_year',
                                'hide_empty' => false,
                            ));
                            if (!empty($year_terms) && !is_wp_error($year_terms)) :
                                foreach ($year_terms as $term) :
                                    echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                                endforeach;
                            endif;
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Use Filter -->
                <div class="p_works_filter__group">
                    <div class="p_works_filter__label">
                        <span class="p_works_filter__label_dot"></span>
                        <span class="p_works_filter__label_text">用途で探す</span>
                    </div>
                    <div class="p_works_filter__select_wrap">
                        <select name="work_use" id="filter-work-use" class="p_works_filter__select">
                            <option value="all">選択する</option>
                            <?php
                            $use_terms = get_terms(array(
                                'taxonomy'   => 'work_use',
                                'hide_empty' => false,
                            ));
                            if (!empty($use_terms) && !is_wp_error($use_terms)) :
                                foreach ($use_terms as $term) :
                                    echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                                endforeach;
                            endif;
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Construction Filter -->
                <div class="p_works_filter__group">
                    <div class="p_works_filter__label">
                        <span class="p_works_filter__label_dot"></span>
                        <span class="p_works_filter__label_text">工事内容で探す</span>
                    </div>
                    <div class="p_works_filter__select_wrap">
                        <select name="work_construction" id="filter-work-construction" class="p_works_filter__select">
                            <option value="all">選択する</option>
                            <?php
                            $construction_terms = get_terms(array(
                                'taxonomy'   => 'work_construction',
                                'hide_empty' => false,
                            ));
                            if (!empty($construction_terms) && !is_wp_error($construction_terms)) :
                                foreach ($construction_terms as $term) :
                                    echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                                endforeach;
                            endif;
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </section>

        <!-- Works Results List Section -->
        <section class="p_works_results_wrap" id="js-works-results">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type'      => 'works',
                'posts_per_page' => 10,
                'paged'          => $paged,
                'post_status'    => 'publish',
            );
            $works_query = new WP_Query($args);

            if ($works_query->have_posts()) : ?>
            <div class="p_works_grid">
                <?php while ($works_query->have_posts()) : $works_query->the_post(); ?>
                <article class="p_works_card">
                    <a href="<?php the_permalink(); ?>" class="p_works_card__link">
                        <div class="p_works_card__img_wrap">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('works_list', array('alt' => get_the_title())); ?>
                            <?php else : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sustainability_1.jpg"
                                alt="<?php the_title_attribute(); ?>">
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
                        <h3 class="p_works_card__title">
                            <?php the_title(); ?>
                        </h3>
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
                        'total'     => $works_query->max_num_pages,
                        'current'   => max(1, $paged),
                        'mid_size'  => 2,
                        'end_size'  => 1,
                        'prev_text' => '<span class="p_works_pagination__arrow p_works_pagination__arrow--prev"></span>',
                        'next_text' => '<span class="p_works_pagination__arrow p_works_pagination__arrow--next"></span>',
                    ));
                    ?>
            </div>
            <?php else : ?>
            <p class="p_works_no_results">現在表示できる施工実績はございません。</p>
            <?php endif;
            wp_reset_postdata();
            ?>
        </section>
    </div>
</main>

<?php
get_footer();