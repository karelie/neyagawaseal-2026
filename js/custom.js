/**
 * Neyagawa Seal Theme Custom Scripts
 */
jQuery(document).ready(function ($) {
    "use strict";

    // 1. スムーズスクロール (すべてのページ内リンク)
    $('a[href^="#"]').on("click", function (e) {
        var href = $(this).attr("href");
        if (href !== "#" && href !== "") {
            var target = $(href);
            if (target.length) {
                e.preventDefault();
                var headerHeight = $(".l_header").length ? $(".l_header").outerHeight() : 100; // 固定ヘッダーの高さ
                var targetOffset = target.offset().top - headerHeight;

                $("html, body").animate(
                    {
                        scrollTop: targetOffset,
                    },
                    600,
                    "swing",
                );

                // アドレスバーのハッシュ更新 (スクロール完了後にセット)
                if (history.pushState) {
                    history.pushState(null, null, href);
                } else {
                    location.hash = href;
                }
            }
        }
    });

    // 1.5. MVのスクロールボタンからステートメントエリアへのスムーズスクロール
    $(".p_hero__scroll").on("click", function () {
        var $target = $(".p_hero__statement");
        if ($target.length) {
            var headerHeight = 100; // 固定ヘッダーの高さ
            var targetOffset = $target.offset().top - headerHeight;

            $("html, body").animate(
                {
                    scrollTop: targetOffset,
                },
                600,
                "swing",
            );
        }
    });

    // 2. スクロールスパイ (Intersection Observer を使用したアクティブセクション監視)
    if ("IntersectionObserver" in window) {
        var observerOptions = {
            root: null,
            rootMargin: "-30% 0px -50% 0px", // 画面中央付近に差し掛かったのを検知
            threshold: 0,
        };

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var id = entry.target.id;

                    // すべてのアクティブ状態をリセット
                    $(".p_philosophy_graphic__item").removeClass("is-active");
                    $(".p_philosophy_graphic").removeClass("is-active-philosophy is-active-purpose is-active-action is-active-spirits");

                    // 現在のアクティブ項目をハイライト ＆ グラフィックへ状態クラスを付与
                    var $activeItem = $('.p_philosophy_graphic__item[href="#' + id + '"]');
                    if ($activeItem.length) {
                        $activeItem.addClass("is-active");
                        $(".p_philosophy_graphic").addClass("is-active-" + id);
                    }
                }
            });
        }, observerOptions);

        // 監視対象セクションの登録
        var sections = ["philosophy", "purpose", "action", "spirits"];
        sections.forEach(function (id) {
            var el = document.getElementById(id);
            if (el) {
                observer.observe(el);
            }
        });
    }

    // 3. サービスセクションのホバー連動画像切り替え (PC/SP両対応)
    $(".p_service__item").on("mouseenter click", function () {
        var index = $(this).data("index");

        // リストのアクティブ切り替え
        $(".p_service__item").removeClass("is-active");
        $(this).addClass("is-active");

        // 画像のアクティブ切り替え
        $(".p_service__image_wrap").removeClass("is-active");
        $('.p_service__image_wrap[data-index="' + index + '"]').addClass("is-active");
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const target = document.querySelector(".p_hero__statement_text");
    const container = document.querySelector(".p_hero__statement");

    if (!target || !container) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                // 要素が画面内に入ったら発火
                if (entry.isIntersecting) {
                    container.classList.add("is-active");

                    // 【修正箇所】一度発火したらこの要素の監視を解除（これでクラスが維持されます）
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            root: null,
            rootMargin: "0px",
            threshold: 0.3, // 20% 見えたら発火
        },
    );

    observer.observe(target);
});

/**
 * 1. テキストを1文字ずつ <span> タグで囲む関数
 */
function splitTextToSpans(selector) {
    const elements = document.querySelectorAll(selector);
    elements.forEach((el) => {
        const nodes = Array.from(el.childNodes);
        el.innerHTML = "";

        nodes.forEach((node) => {
            if (node.nodeType === Node.TEXT_NODE) {
                const chars = Array.from(node.textContent);
                chars.forEach((char) => {
                    const span = document.createElement("span");
                    span.classList.add("char");
                    // 空白文字が詰められないようにノーブレークスペースに置き換え
                    span.textContent = char === " " ? "\u00A0" : char;
                    el.appendChild(span);
                });
            } else {
                el.appendChild(node.cloneNode(true));
            }
        });
    });
}

/**
 * 2. ランダム点滅アニメーション定義
 */
function animateRandomBlink(targetElement) {
    const chars = targetElement.querySelectorAll(".char");

    // パターンA: 明滅（フリッカー）しながらランダムに出現させる設定
    gsap.to(chars, {
        keyframes: [
            { opacity: 0, duration: 0 },
            // { opacity: 0.2, duration: 0.03 },
            { opacity: 1, duration: 0.3 },
            { opacity: 0.0, duration: 0.3 },
            // { opacity: 0.5, duration: 0.3 },
            { opacity: 1, duration: 0.3 },
        ],
        stagger: {
            amount: 1.0, // 全体の表示にかける分散時間（秒）
            from: "random", // 文字の出現順序をランダムに設定
        },
        ease: "none",
    });
}

/**
 * 3. 初期化とスクロール監視 (is-onscreen クラスの付与に連動)
 */
document.addEventListener("DOMContentLoaded", () => {
    // 文字列の分割処理を実行
    splitTextToSpans(".js-text-anim");

    // IntersectionObserver による表示検知
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    target.classList.add("is-onscreen");

                    // アニメーション実行
                    animateRandomBlink(target);

                    // 一度表示されたら監視を解除
                    observer.unobserve(target);
                }
            });
        },
        { threshold: 0.2 }, // 20%画面に入ったら発火
    );

    document.querySelectorAll(".js-text-anim").forEach((el) => {
        observer.observe(el);
    });
});
