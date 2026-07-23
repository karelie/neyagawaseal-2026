<?php
/**
 * 自動タクソノミーターム一括登録スクリプト
 * テーマのアクティベート時または初期化時に一括でタームを生成します
 */

function neyagawaseal_auto_insert_taxonomy_terms() {
    $taxonomies_data = array(
        'work_genre' => array(
            'new-construction' => '新築',
            'major-renovation' => '大規模修繕',
            'repair-renovation' => '補修・改修',
        ),
        'work_use' => array(
            'medical-welfare'    => '医療・福祉施設',
            'school-educational' => '学校・教育施設',
            'government'         => '官公庁施設',
            'sports-leisure'     => 'スポーツ・レジャー',
            'factory-warehouse'  => '工場・倉庫',
            'commercial'         => '店舗・商業施設',
            'office-building'    => '事務所ビル',
            'apartment-mansion'  => '集合住宅・マンション',
            'hotel'              => 'ホテル',
            'other'              => 'その他',
        ),
        'work_construction' => array(
            'major-renovation-work'     => '大規模修繕工事',
            'sealing-caulking-work'     => 'シーリング・コーキング工事',
            'waterproofing-work'        => '防水工事',
            'external-tile-repair-work' => '外部補修工事・タイル補修工事',
            'substrate-repair-work'    => '下地補修工事',
            'painting-work'             => '塗装工事',
            'other-work'                => 'その他',
        ),
        'work_year' => array(
            '2023' => '2023年',
            '2024' => '2024年',
            '2025' => '2025年',
            '2026' => '2026年',
        ),
    );

    foreach ($taxonomies_data as $taxonomy => $terms) {
        if (!taxonomy_exists($taxonomy)) {
            continue;
        }

        foreach ($terms as $slug => $name) {
            if (!term_exists($name, $taxonomy)) {
                wp_insert_term($name, $taxonomy, array(
                    'slug' => $slug,
                ));
            }
        }
    }
}

// init フック等で実行（必要な場合コメント解除）
add_action('init', 'neyagawaseal_auto_insert_taxonomy_terms');
