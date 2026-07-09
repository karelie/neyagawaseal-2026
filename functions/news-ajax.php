<?php

/**
 * Ajax用のスクリプト読み込みと、JSへの変数渡し
 */
function news_ajax_enqueue_scripts() {
    // お知らせ一覧ページ、カテゴリーページ、およびトップページでスクリプトを読み込む
    if ( is_post_type_archive('news') || is_tax('news_category') || is_front_page() || is_home() ) {
        // JSファイルのパス
        wp_enqueue_script(
            'ajax-news-filter',
            get_theme_file_uri('/js/ajax-news-filter.js'),
            array('jquery'),
            filemtime(get_theme_file_path('/js/ajax-news-filter.js')),
            true
        );

        // JavaScriptに渡すデータ
        wp_localize_script('ajax-news-filter', 'news_ajax_obj', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('news-ajax-nonce'),
        ));
    }
}
add_action('wp_enqueue_scripts', 'news_ajax_enqueue_scripts');

/**
 * Ajaxリクエストを処理する関数
 */
function news_ajax_filter_handler() {
    // nonceをチェックしてセキュリティを確保
    check_ajax_referer('news-ajax-nonce', 'nonce');

    // JSから送られてきたデータを取得
    $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $category_id = isset($_POST['category']) ? sanitize_text_field($_POST['category']) : 'all';
    $archive = isset($_POST['archive']) ? sanitize_text_field($_POST['archive']) : '';
    $is_front_page = isset($_POST['is_front_page']) ? intval($_POST['is_front_page']) : 0;

    $posts_per_page = $is_front_page ? 3 : 10;

    $args = array(
        'post_type'      => 'news',
        'posts_per_page' => $posts_per_page,
        'paged'          => $paged,
        'post_status'    => 'publish',
    );

    // カテゴリーが 'all' でない場合、tax_queryを追加
    if ($category_id !== 'all' && !empty($category_id)) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'news_category',
                'field'    => 'term_id',
                'terms'    => $category_id,
            ),
        );
    }

    // アーカイブが選択されている場合、date_queryを追加
    if (!empty($archive)) {
        $year_month = explode('-', $archive);
        if (count($year_month) === 2) {
            $args['date_query'] = array(
                array(
                    'year'  => $year_month[0],
                    'month' => $year_month[1],
                ),
            );
        } else if (count($year_month) === 1) {
            $args['date_query'] = array(
                array(
                    'year'  => $year_month[0],
                ),
            );
        }
    }

    $the_query = new WP_Query($args);

    // HTMLの出力をバッファリング (記事一覧のみ)
    ob_start();

    if ($the_query->have_posts()) : ?>
        <ul class="article_list">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="article_item">
                    <a href="<?php the_permalink(); ?>" class="item_content">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'news_category');
                        $cat_name = 'お知らせ';
                        $cat_slug = 'info';
                        if ($terms && !is_wp_error($terms)) {
                            $term = array_shift($terms);
                            $cat_name = $term->name;
                            $cat_slug = $term->slug;
                        }
                        ?>
                        <div class="cat <?php echo esc_attr($cat_slug); ?>">
                            <?php echo esc_html($cat_name); ?>
                        </div>
                        <div class="meta">
                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="date">
                                <?php echo get_the_date('Y.m.d'); ?>
                            </time>
                            <p class="title_link">
                                <?php the_title(); ?>
                            </p>
                            <p class="content_link">
                                <?php
                                $excerpt = get_the_excerpt();
                                echo esc_html(wp_html_excerpt($excerpt, 28, '...'));
                                ?>
                            </p>
                        </div>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <p class="no_posts">お知らせは見つかりませんでした。</p>
    <?php endif;

    $articles_html = ob_get_clean();

    // HTMLの出力をバッファリング (ページネーションのみ)
    $pagination_html = '';
    if (!$is_front_page && $the_query->have_posts()) {
        ob_start();
        $archive_link = get_post_type_archive_link('news');
        $default_page1_url = trailingslashit($archive_link);
        $desired_page1_url = $default_page1_url . 'page/1/';

        $links = paginate_links(array(
            'base'      => $default_page1_url . 'page/%#%/',
            'total'     => $the_query->max_num_pages,
            'current'   => max(1, $paged),
            'prev_text' => '<img src="' . esc_url( get_theme_file_uri( '/images/news_prev_icon.svg' ) ) . '" alt="前ページ" class="pagination_arrow_icon">',
            'next_text' => '<img src="' . esc_url( get_theme_file_uri( '/images/news_next_icon.svg' ) ) . '" alt="次ページ" class="pagination_arrow_icon">',
            'type'      => 'array'
        ));

        if ($links) {
            $prev = '';
            $next = '';
            $numbers = [];
            foreach ($links as $link) {
                // URL置換
                $link = str_replace("href='{$default_page1_url}'", "href='{$desired_page1_url}'", $link);
                $link = str_replace("href=\"{$default_page1_url}\"", "href=\"{$desired_page1_url}\"", $link);

                if (strpos($link, 'prev') !== false) {
                    $prev = $link;
                } elseif (strpos($link, 'next') !== false) {
                    $next = $link;
                } else {
                    $numbers[] = $link;
                }
            }
            
            // Output prev arrow (or hidden placeholder if we are on page 1)
            if ( empty( $prev ) ) {
                echo '<span class="prev disabled" style="visibility: hidden;"><img src="' . esc_url( get_theme_file_uri( '/images/news_prev_icon.svg' ) ) . '" alt="前ページ" class="pagination_arrow_icon"></span>';
            } else {
                echo $prev;
            }
            
            echo '<div class="numbers_wrap">' . implode('', $numbers) . '</div>';
            
            // Output next arrow (or hidden placeholder if we are on the last page)
            if ( empty( $next ) ) {
                echo '<span class="next disabled" style="visibility: hidden;"><img src="' . esc_url( get_theme_file_uri( '/images/news_next_icon.svg' ) ) . '" alt="次ページ" class="pagination_arrow_icon"></span>';
            } else {
                echo $next;
            }
        }
        $pagination_html = ob_get_clean();
    }
    wp_reset_postdata();

    // JSONでデータを返却
    wp_send_json_success(array(
        'articles'   => $articles_html,
        'pagination' => $pagination_html,
    ));
}
// WordPressのAjaxアクションフックに登録
add_action('wp_ajax_news_filter', 'news_ajax_filter_handler');
add_action('wp_ajax_nopriv_news_filter', 'news_ajax_filter_handler'); // 未ログインユーザー用
