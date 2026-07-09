<?php
 
/**
 * ページのスラッグに基づいて個別のCSSファイルを読み込む
 */
function my_enqueue_slug_based_css() {
    // 現在のページが単一の投稿（固定ページ、投稿、カスタム投稿タイプなど）であるかを確認
    if ( is_singular() ) {
        // 現在のページのオブジェクトを取得
        $current_object = get_queried_object();

        // オブジェクトが存在し、post_name (スラッグ) プロパティがあるか確認
        if ( $current_object && isset( $current_object->post_name ) ) {
            $slug = $current_object->post_name; // ページのスラッグを取得

            // CSSファイルの相対パス (テーマディレクトリからのパス)
            $css_relative_path = 'css/' . $slug . '.css';

            // CSSファイルの完全なサーバーパス
            $css_file_path = get_stylesheet_directory() . '/' . $css_relative_path;

            // CSSファイルのURL
            $css_file_uri = get_stylesheet_directory_uri() . '/' . $css_relative_path;

            // CSSファイルが存在するか確認
            if ( file_exists( $css_file_path ) ) {
                // CSSファイルをキューに追加
                wp_enqueue_style(
                    'slug-style-' . $slug,          // ハンドル名 (ユニークにするためスラッグを含む)
                    $css_file_uri,                  // CSSファイルのURL
                    array(),                        // 依存関係 (例: array('main-style') )
                    filemtime( $css_file_path ),    // バージョン (ファイルの最終更新時刻を使いキャッシュを制御)
                    'all'                           // メディアタイプ
                );
            }
        }
    }

    if ( is_single() ) {
        // 現在のページのオブジェクトを取得
        $current_object = get_queried_object();

        // オブジェクトが存在し、post_type プロパティがあるか確認
        if ( $current_object && isset( $current_object->post_type ) ) {
            // 投稿タイプのスラッグ（例: 'post', 'page', 'news'）を取得
            $slug = $current_object->post_type;

            // CSSファイルの相対パス
            $css_relative_path = 'css/' . $slug . '.css';
            // CSSファイルのサーバーパス
            $css_file_path = get_stylesheet_directory() . '/' . $css_relative_path;
            // CSSファイルのURL
            $css_file_uri = get_stylesheet_directory_uri() . '/' . $css_relative_path;

            // CSSファイルが存在する場合のみ読み込む
            if ( file_exists( $css_file_path ) ) {
                wp_enqueue_style(
                    'post-type-style-' . $slug,
                    $css_file_uri,
                    array(),
                    filemtime( $css_file_path ),
                    'all'
                );
            }
        }
    }

    if ( is_front_page() ) {
        // 現在のページのオブジェクトを取得

        // オブジェクトが存在し、post_type プロパティがあるか確認
            // 投稿タイプのスラッグ（例: 'post', 'page', 'news'）を取得
            $slug = "home";

            // CSSファイルの相対パス
            $css_relative_path = 'css/' . $slug . '.css';
            // CSSファイルのサーバーパス
            $css_file_path = get_stylesheet_directory() . '/' . $css_relative_path;
            // CSSファイルのURL
            $css_file_uri = get_stylesheet_directory_uri() . '/' . $css_relative_path;

            // CSSファイルが存在する場合のみ読み込む
            if ( file_exists( $css_file_path ) ) {
                wp_enqueue_style(
                    'post-type-style-' . $slug,
                    $css_file_uri,
                    array(),
                    filemtime( $css_file_path ),
                    'all'
                );
        }
    }

    // カスタム投稿タイプのアーカイブページでCSSを読み込む
    if ( is_post_type_archive() ) {
        // 現在のアーカイブの投稿タイプを取得
        $post_type = get_queried_object()->name;

        // CSSファイルの相対パス
        $css_relative_path = 'css/' . $post_type . '.css';
        // CSSファイルのサーバーパス
        $css_file_path = get_stylesheet_directory() . '/' . $css_relative_path;
        // CSSファイルのURL
        $css_file_uri = get_stylesheet_directory_uri() . '/' . $css_relative_path;

        // CSSファイルが存在する場合のみ読み込む
        if ( file_exists( $css_file_path ) ) {
            wp_enqueue_style(
                'archive-style-' . $post_type,
                $css_file_uri,
                array(),
                filemtime( $css_file_path ),
                'all'
            );
        }
    }

     if ( is_tax( 'news_category' ) ) {

        $slug = 'news';

        // CSSファイルの相対パス
        $css_relative_path = 'css/' . $slug . '.css';
        // CSSファイルのサーバーパス
        $css_file_path = get_stylesheet_directory() . '/' . $css_relative_path;
        // CSSファイルのURL
        $css_file_uri = get_stylesheet_directory_uri() . '/' . $css_relative_path;

        // CSSファイルが存在する場合のみ読み込む
        if ( file_exists( $css_file_path ) ) {
            wp_enqueue_style(
                'taxonomy-style-' . $slug,
                $css_file_uri,
                array(),
                filemtime( $css_file_path ),
                'all'
            );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_slug_based_css' );


// 絵文字削除
function disable_emojis() {
     remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
     remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
     remove_action( 'wp_print_styles', 'print_emoji_styles' );
     remove_action( 'admin_print_styles', 'print_emoji_styles' );     
     remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
     remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );  
     remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_emojis' );




// カスタムサムネイル


add_image_size( 'works_list', 560, 378, true );
add_image_size( 'works_single_large', 1180, 797, true );
add_image_size( 'works_featured', 800, 540, true );

// add_image_size( 'home-works-thumbnail', 420, 540, true );



mvwpform_autop_filter();
function mvwpform_autop_filter() {
 if (class_exists('MW_WP_Form_Admin')) {
 $mw_wp_form_admin = new MW_WP_Form_Admin();
 $forms = $mw_wp_form_admin->get_forms();
 foreach ($forms as $form) {
 add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
 }
 }
}



function split_text_to_spans( $text, $class_name = 'split_text_char' ) {
    // 引数が文字列でなかったり、空だった場合は空文字を返す
    if ( ! is_string( $text ) || empty( $text ) ) {
        return '';
    }

    // strip_tags()で念のためHTMLタグを除去
    $clean_text = strip_tags( $text );

    // mb_str_split() で日本語などのマルチバイト文字にも対応
    $characters = mb_str_split( $clean_text );
    $output_html = '';

    foreach ( $characters as $index => $char ) {
        // 半角スペースは &nbsp; に変換して表示崩れを防ぐ
        if ( ' ' === $char ) {
            $char = '&nbsp;';
        }
        
        // 全角スペースの対応が必要な場合は下のコメントを解除
        // if ( '　' === $char ) {
        //     $char = '&emsp;';
        // }

        // HTMLを組み立てる
        $output_html .= '<span class="' . esc_attr( $class_name ) . '" style="--index:' . intval( $index ) . ';">' . esc_html( $char ) . '</span>';
    }

    return $output_html;
}