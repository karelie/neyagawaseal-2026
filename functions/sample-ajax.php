<?php

/**
 * Ajax用のスクリプト読み込みと、JSへの変数渡し
 */
function news_ajax_enqueue_scripts() {
    // お知らせ一覧ページ（ここでは 'news' というスラッグの固定ページまたはアーカイブページを想定）でのみスクリプトを読み込む
    if ( is_page('news') ) {
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

    $args = array(
        'post_type'      => 'news',
        'posts_per_page' => 10,
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

    $the_query = new WP_Query($args);

    // HTMLの出力をバッファリング
    ob_start();

    if ($the_query->have_posts()) : ?>
       <ul class="news-list">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

    <li class="news-item">
        <a href="<?php the_permalink(); ?>" class="news-link">
            <span class="news-date">
                <?php echo get_the_date('Y.m.d'); ?>
            </span>
            <?php
            // 表示する最終的なカテゴリ情報を格納する変数を準備
            $term_to_display = null;

            // この投稿に紐づく 'news_category' のタームをすべて取得
            $post_terms = get_the_terms(get_the_ID(), 'news_category');

            // タームが1つ以上あり、エラーでないことを確認
            if (!empty($post_terms) && !is_wp_error($post_terms)) {
                
                // --- ロジックの安定化 ---
                // 1. まず、子カテゴリを探す
                foreach ($post_terms as $term) {
                    // 親がいるカテゴリ（子カテゴリ）が見つかったか？
                    if ($term->parent != 0) {
                        // 親カテゴリの情報を取得
                        $parent_term = get_term($term->parent, 'news_category');
                        // 親情報が正しく取得できたら、それを表示対象としてループを抜ける
                        if ($parent_term && !is_wp_error($parent_term)) {
                            $term_to_display = $parent_term;
                            break; // 優先して表示したいものが見つかったのでループ終了
                        }
                    }
                }

                // 2. 子カテゴリが見つからなかった場合の処理
                // ループが終わっても $term_to_display が空の場合
                // (＝設定されているのが全て親カテゴリだった場合)
                if (is_null($term_to_display)) {
                    // 取得したタームリストの最初のものを表示対象とする
                    $term_to_display = $post_terms[0];
                }
            }

            // 最終的に表示対象のタームが存在する場合のみ、名前を出力
            if ($term_to_display) {
                echo '<span class="news-category">' . esc_html($term_to_display->name) . '</span>';
            }
            ?>
            <span class="news-title-text">
                <?php the_title(); ?>
            </span>
            <span class="arrow-button"></span>
        </a>
    </li>
    <?php endwhile; ?>
</ul>

        <div class="pagination pc">
						<?php
										echo paginate_links(array(
											'total'     => $the_query->max_num_pages,
											'current'   => max(1, $paged),
											'mid_size'  => 2,  // 現在ページの左右に表示するページ数
											'end_size'  => 1,  // 先頭と末尾に表示するページ数
											'prev_text' => ' ',
											'next_text' => ' ',
										));
										?>
					</div>
					<div class="pagination sp">
						<?php
															echo paginate_links(array(
																'total'     => $the_query->max_num_pages,
																'current'   => max(1, $paged),
																'mid_size'  => 1,  // 現在ページの左右に表示するページ数
																'end_size'  => 1,  // 先頭と末尾に表示するページ数
																'prev_text' => ' ',
																'next_text' => ' ',
															));
															?>
					</div>
    <?php else : ?>
        <p>お知らせは見つかりませんでした。</p>
    <?php endif;
    wp_reset_postdata();

    // バッファリングしたHTMLを取得してJSONで返す
    $html = ob_get_clean();
    wp_send_json_success($html);
}
// WordPressのAjaxアクションフックに登録
add_action('wp_ajax_news_filter', 'news_ajax_filter_handler');
add_action('wp_ajax_nopriv_news_filter', 'news_ajax_filter_handler'); // 未ログインユーザー用