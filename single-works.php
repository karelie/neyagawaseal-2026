<?php
/**
 * Template Name: 施工実績 詳細 (Works Single Detail)
 * Template Post Type: works
 *
 * @package neyagawaseal
 */

get_header();
?>

<!-- <div class="guidebox"></div> -->

<main class="l_main p_works_single">
    <!-- Hero Header Section -->
    <section class="p_works_hero">
        <div class="inner w-md">
            <div class="p_works_hero__inner">
                <div class="p_works_hero__decor">
                    <!-- PC version -->
                    <svg class="p_works_hero__decor_svg p_works_hero__decor_svg--pc" xmlns="http://www.w3.org/2000/svg"
                        width="280" height="280" viewBox="0 0 280 280" fill="none">
                        <path d="M224,0h56L56,280H0Z" fill="url(#works_hero_decor_grad_pc_single)" />
                        <defs>
                            <linearGradient id="works_hero_decor_grad_pc_single" x1="0.5" y1="0" x2="0.5" y2="1"
                                gradientUnits="objectBoundingBox">
                                <stop offset="0" stop-color="#e54300" />
                                <stop offset="1" stop-color="#eceff1" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <!-- SP version -->
                    <svg class="p_works_hero__decor_svg p_works_hero__decor_svg--sp" xmlns="http://www.w3.org/2000/svg"
                        width="420" height="420" viewBox="0 0 420 420" fill="none">
                        <path d="M336,0h84L84,420H0Z" fill="url(#works_hero_decor_grad_sp_single)" />
                        <defs>
                            <linearGradient id="works_hero_decor_grad_sp_single" x1="0.5" y1="0" x2="0.5" y2="1"
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

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="p_works_single__content">
            <!-- Top Head Section: Info (Left) + Eyecatch Image (Right) -->
            <div class="p_works_single__head">
                <div class="p_works_single__head_info">
                    <!-- Tags / Badges (Placed FIRST) -->
                    <div class="p_works_single__tags">
                        <?php
                        $genre_terms = get_the_terms(get_the_ID(), 'work_genre');
                        if ($genre_terms && !is_wp_error($genre_terms)) {
                            foreach ($genre_terms as $g) {
                                echo '<span class="p_works_single__badge">' . esc_html($g->name) . '</span>';
                            }
                        }
                        $use_terms = get_the_terms(get_the_ID(), 'work_use');
                        if ($use_terms && !is_wp_error($use_terms)) {
                            foreach ($use_terms as $u) {
                                echo '<span class="p_works_single__badge">' . esc_html($u->name) . '</span>';
                            }
                        }
                        ?>
                    </div>

                    <!-- Works Title (Placed SECOND) -->
                    <h2 class="p_works_single__title">
                        <?php the_title(); ?>
                    </h2>

                    <div class="p_works_single__divider"></div>

                    <!-- Metadata Info -->
                    <div class="p_works_single__meta">
                        <dl class="p_works_single__meta_list">
                            <div class="p_works_single__meta_item">
                                <dt>竣工年：</dt>
                                <dd>
                                    <?php 
                                    $comp_date = get_field('completion_date');
                                    if (!$comp_date) {
                                        $year_terms = get_the_terms(get_the_ID(), 'work_year');
                                        if ($year_terms && !is_wp_error($year_terms)) {
                                            $comp_date = $year_terms[0]->name;
                                        } else {
                                            $comp_date = '2026年';
                                        }
                                    } else {
                                        if (mb_strpos($comp_date, '年') === false) {
                                            $comp_date .= '年';
                                        }
                                    }
                                    echo esc_html($comp_date);
                                    ?>
                                </dd>
                            </div>
                            <div class="p_works_single__meta_item">
                                <dt>場所：</dt>
                                <dd>
                                    <?php 
                                    $area = get_field('work_area');
                                    echo esc_html($area ? $area : '大阪府大阪市');
                                    ?>
                                </dd>
                            </div>
                            <div class="p_works_single__meta_item">
                                <dt>工事内容：</dt>
                                <dd>
                                    <?php 
                                    $work_details = get_field('work-details');
                                    if (empty($work_details)) {
                                        $work_details = get_field('work_details');
                                    }
                                    if (empty($work_details)) {
                                        $construction_terms = get_the_terms(get_the_ID(), 'work_construction');
                                        if ($construction_terms && !is_wp_error($construction_terms)) {
                                            $c_names = array();
                                            foreach ($construction_terms as $c) {
                                                $c_names[] = $c->name;
                                            }
                                            $work_details = implode('、', $c_names);
                                        } else {
                                            $work_details = 'シーリング工事';
                                        }
                                    }
                                    if (is_array($work_details)) {
                                        $work_details = implode('、', array_map(function($item) {
                                            if (is_array($item)) {
                                                return isset($item['label']) ? $item['label'] : (isset($item['name']) ? $item['name'] : reset($item));
                                            } elseif (is_object($item)) {
                                                return isset($item->name) ? $item->name : (isset($item->post_title) ? $item->post_title : '');
                                            }
                                            return $item;
                                        }, $work_details));
                                    }
                                    echo esc_html($work_details);
                                    ?>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>

                <!-- Main Eyecatch Image (Top Right, works_single_large) -->
                <div class="p_works_single__main_img">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('works_single_large', array('alt' => get_the_title())); ?>
                    <?php else : ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sustainability_1.jpg"
                        alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                </div>
            </div>

            <!-- Works Images Grid (image_1 to image_8) -->
            <div class="p_works_single__images">
                <div class="p_works_single__grid">
                    <?php
                    $has_images = false;
                    for ($i = 1; $i <= 8; $i++) {
                        $img = get_field('image_' . $i);
                        if ($img) {
                            $has_images = true;
                            echo '<div class="p_works_single__img_item">';
                            if (is_numeric($img)) {
                                echo wp_get_attachment_image($img, 'works_single_list', false, array('alt' => get_the_title()));
                            } elseif (is_array($img)) {
                                $img_id = !empty($img['id']) ? $img['id'] : (!empty($img['ID']) ? $img['ID'] : 0);
                                if ($img_id) {
                                    echo wp_get_attachment_image($img_id, 'works_single_list', false, array('alt' => get_the_title()));
                                } elseif (!empty($img['sizes']['works_single_list'])) {
                                    echo '<img src="' . esc_url($img['sizes']['works_single_list']) . '" alt="' . esc_attr(get_the_title()) . '">';
                                } elseif (!empty($img['url'])) {
                                    echo '<img src="' . esc_url($img['url']) . '" alt="' . esc_attr(get_the_title()) . '">';
                                }
                            } elseif (is_string($img)) {
                                echo '<img src="' . esc_url($img) . '" alt="' . esc_attr(get_the_title()) . '">';
                            }
                            echo '</div>';
                        }
                    }

                    if (!$has_images) {
                        if (has_post_thumbnail()) {
                            echo '<div class="p_works_single__img_item">';
                            the_post_thumbnail('works_single_list', array('alt' => get_the_title()));
                            echo '</div>';
                        } else {
                            echo '<div class="p_works_single__img_item">';
                            echo '<img src="' . esc_url(get_stylesheet_directory_uri()) . '/images/sustainability_1.jpg" alt="' . esc_attr(get_the_title()) . '">';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>

            <!-- Post Content Description (if any) -->
            <?php if (get_the_content()) : ?>
            <div class="p_works_single__body">
                <?php the_content(); ?>
            </div>
            <?php endif; ?>

            <!-- Navigation: Prev / Back to Archive / Next Buttons -->
            <div class="p_works_single__back_wrap">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                ?>
                <div class="p_works_single__nav_item p_works_single__nav_item--prev">
                    <?php if (!empty($prev_post)) : ?>
                    <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="p_works_single__nav_btn"
                        aria-label="前の施工実績へ">
                        <span class="p_works_single__nav_circle">
                            <span class="p_works_single__nav_arrow p_works_single__nav_arrow--prev"></span>
                        </span>
                    </a>
                    <?php endif; ?>
                </div>

                <div class="p_works_single__nav_item p_works_single__nav_item--center">
                    <a href="<?php echo esc_url(get_post_type_archive_link('works') ? get_post_type_archive_link('works') : home_url('/works/')); ?>"
                        class="p_works_single__back_link">
                        <span class="p_works_single__back_text">一覧に戻る</span>
                    </a>
                </div>

                <div class="p_works_single__nav_item p_works_single__nav_item--next">
                    <?php if (!empty($next_post)) : ?>
                    <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="p_works_single__nav_btn"
                        aria-label="次の施工実績へ">
                        <span class="p_works_single__nav_circle">
                            <span class="p_works_single__nav_arrow p_works_single__nav_arrow--next"></span>
                        </span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php
get_footer();