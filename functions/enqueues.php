<?php
/*
 * Enqueues
 */

function _s_child_style_css() {
    // wp_enqueue_script('yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), false, true); 
    // Script
    // wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/js/slick/slick/slick.min.js', array( 'jquery' ), '1', true );
        // wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array( 'jquery' ), '1', true );
    wp_enqueue_script('iscroll-js', 'https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js', array( 'jquery' ), '5.2.0', true );
    wp_enqueue_script('drawer-js', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js', array( 'jquery' ), '3.2.2', true );
    //  wp_enqueue_script('iscroll-js', get_stylesheet_directory_uri() . '/js/iscroll/build/iscroll.js', array( 'jquery' ), '5.2.0', true );
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js', array( 'jquery' ), '3.2.2', true );
    // wp_enqueue_script('compare-js', 'https://cdn.jsdelivr.net/npm/image-compare-viewer@1.5.0/dist/image-compare-viewer.min.js', array( 'jquery' ), '3.2.2', true );

    // wp_enqueue_script('drawer-js', get_stylesheet_directory_uri() . '/js/drawer/dist/js/drawer.min.js', array( 'jquery' ), '3.2.2', true );
    // wp_enqueue_script('css3-animate-it-js', get_stylesheet_directory_uri() . '/js/css3-animate-it/js/css3-animate-it.js', array( 'jquery' ), '1.0.3', true );
    // wp_enqueue_script('invew-js', get_stylesheet_directory_uri() . '/js/inview/jquery.inview.min.js', array( 'jquery' ), '1.0', true );
    // wp_enqueue_script('jarallax-js', get_stylesheet_directory_uri() . '/js/jarallax/jarallax.js', array( 'jquery' ), '1.0', true );
    // wp_enqueue_script('modal-js', get_stylesheet_directory_uri() . '/js/modaal.min.js', array( 'jquery' ), '1.0', true );
    // wp_enqueue_script('table-pagination', get_stylesheet_directory_uri() . '/js/table-pagination.js', array( 'jquery' ), '1.0', true );
    // wp_enqueue_script('modaal-js', 'https://cdn.jsdelivr.net/npm/modaal@0.4.4/dist/js/modaal.min.js', array( 'jquery' ), '0.4.4', true );


    wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true);
    wp_enqueue_script('custom-child-js', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery', 'gsap-js' ), date('YmdGis'), true );

    // Works Ajax Load More & Filter
    if ( is_post_type_archive('works') ) {
        wp_enqueue_script('swiper-works-js', get_stylesheet_directory_uri() . '/js/swiper-works.js', array( 'swiper-js' ), date('YmdGis'), true);
        wp_enqueue_script('ajax-load-more-works', get_stylesheet_directory_uri() . '/js/ajax-load-more-works.js', array(), date('YmdGis'), true);
        wp_enqueue_script('ajax-works-filter', get_stylesheet_directory_uri() . '/js/ajax-works-filter.js', array(), date('YmdGis'), true);
        
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        wp_localize_script('ajax-load-more-works', 'works_ajax_obj', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'current_page' => $paged,
        ));
    }

    // Style Seet
    wp_enqueue_style( '_s-style',  get_template_directory_uri(). '/style.css', array(  ) );
    wp_enqueue_style( '_s-style-child',  get_stylesheet_directory_uri(). '/css/style.css',array('_s-style') ,date('YmdGis'));
    // wp_enqueue_style( 'modaal',  get_template_directory_uri(). '/css/modaal.min.css', array(  ) );
    wp_enqueue_style( 'base-css',  get_stylesheet_directory_uri(). '/css/base.css',array('_s-style') );
    wp_enqueue_style( 'common-css', get_stylesheet_directory_uri() . '/css/common.css', array('_s-style'),date('YmdGis') );
    // wp_register_style('fontawesome5', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', false, '5.8.1', null);
    // wp_enqueue_style('fontawesome5');
    // wp_enqueue_style( 'slick-theme-css', get_stylesheet_directory_uri() . '/js/slick/slick/slick-theme.css' );
    // wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/js/slick/slick/slick.css' );
    // wp_enqueue_style( 'slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css' );
    // wp_enqueue_style( 'slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css' );
    wp_enqueue_style( 'drawer-css', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css', false, '3.2.2' );
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css', false, '3.2.2' );
    // wp_enqueue_style( 'compare-css', 'https://cdn.jsdelivr.net/npm/image-compare-viewer@1.5.0/dist/image-compare-viewer.min.css', false, '3.2.2' );
    // wp_enqueue_style( 'drawer-css', get_stylesheet_directory_uri() . '/js/drawer/dist/css/drawer.min.css', false, '3.2.2' );
    // wp_enqueue_style( 'css3-animate-it-css', get_stylesheet_directory_uri() . '/js/css3-animate-it/css/animations.css', false, '1.0.3' );
    // wp_enqueue_style( 'modaal-css', 'https://cdn.jsdelivr.net/npm/modaal@0.4.4/source/css/modaal.min.css', false, '0.4.4' );

}

add_action( 'wp_enqueue_scripts', '_s_child_style_css', 10 );