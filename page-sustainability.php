<?php
/**
 * Template Name: サステナビリティ
 * Template Post Type: page
 */

get_header();
?>

<div class="guidebox"></div>

<main class="l_main">
    <!-- Section 1: Hero Header -->
    <section class="p_sustainability_hero">
        <div class="inner w-md">
            <div class="p_sustainability_hero__inner">
                <div class="p_sustainability_hero__decor">
                    <!-- PC version (PC Only) -->
                    <svg class="p_sustainability_hero__decor_svg p_sustainability_hero__decor_svg--pc"
                        xmlns="http://www.w3.org/2000/svg" width="280" height="280" viewBox="0 0 280 280" fill="none">
                        <path d="M224,0h56L56,280H0Z" fill="url(#sustainability_hero_decor_grad_pc)" />
                        <defs>
                            <linearGradient id="sustainability_hero_decor_grad_pc" x1="0.5" y1="0" x2="0.5" y2="1"
                                gradientUnits="objectBoundingBox">
                                <stop offset="0" stop-color="#e54300" />
                                <stop offset="1" stop-color="#eceff1" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <!-- SP version (SP Only) -->
                    <svg class="p_sustainability_hero__decor_svg p_sustainability_hero__decor_svg--sp"
                        xmlns="http://www.w3.org/2000/svg" width="420" height="420" viewBox="0 0 420 420" fill="none">
                        <path d="M336,0h84L84,420H0Z" fill="url(#sustainability_hero_decor_grad_sp)" />
                        <defs>
                            <linearGradient id="sustainability_hero_decor_grad_sp" x1="0.5" y1="0" x2="0.5" y2="1"
                                gradientUnits="objectBoundingBox">
                                <stop offset="0" stop-color="#e54300" />
                                <stop offset="1" stop-color="#eceff1" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="p_sustainability_hero__content">
                    <h1 class="p_sustainability_hero__title">
                        <span class="p_sustainability_hero__en js-onscreen js-text-anim">Sustainability</span>
                        <span class="p_sustainability_hero__ja_group">
                            <span class="p_sustainability_hero__ja_icon"></span>
                            <span class="p_sustainability_hero__ja">サステナビリティ</span>
                        </span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Basic Stance (サステナビリティ経営の基本方針) -->
    <section class="p_sustainability_stance">
        <div class="inner w-md">
            <header class="p_sustainability_sec_header">
                <span class="p_sustainability_sec_header__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M16,0h4L4,20H0Z" fill="#e54300" />
                    </svg>
                </span>
                <span class="p_sustainability_sec_header__en">Basic Stance</span>
                <span class="p_sustainability_sec_header__line"></span>
                <h2 class="p_sustainability_sec_header__ja">サステナビリティ経営の基本方針</h2>
            </header>

            <div class="p_sustainability_stance__lead_wrap">
                <h3 class="p_sustainability_stance__lead">本業の技術で、社会の課題を解決する。</h3>
                <p class="p_sustainability_stance__text">
                    当社は、SDGsを経営戦略の中核に据え、建設という本業を通じて社会課題の解決に挑んでいます。私たちが目指すのは、一過性の慈善活動ではなく、ビジネスの仕組みそのもので社会に貢献すること。日々の誠実な施工、環境配慮型資材の積極的な採用、そしてインフラの長寿命化。これら現場における実務の積み重ねこそが、持続可能な街づくりへ直結していると確信しています。「確かな技術で、社会と地球の未来の礎を築く。」このサステナビリティ経営を、私たちは今日も現場から体現していきます。
                </p>
            </div>

            <!-- 3 Pillar Cards -->
            <div class="p_sustainability_pillars">
                <!-- Card 01 -->
                <div class="p_sustainability_pillar_card">
                    <span class="p_sustainability_pillar_card__num">01</span>
                    <div class="p_sustainability_pillar_card__titles">
                        <h3 class="p_sustainability_pillar_card__ja">環 境</h3>
                        <span class="p_sustainability_pillar_card__en">Environment</span>
                    </div>
                    <div class="p_sustainability_pillar_card__subtitle">グリーンなものづくり</div>
                    <div class="p_sustainability_pillar_card__icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sustainability_1.svg" alt="環境" />
                    </div>
                    <div class="p_sustainability_pillar_card__tags">
                        <span class="p_sustainability_pillar_card__tag">脱炭素建築（ZEBなど）の推進</span>
                        <span class="p_sustainability_pillar_card__tag">廃棄物リサイクルの徹底</span>
                    </div>
                </div>

                <!-- Card 02 -->
                <div class="p_sustainability_pillar_card">
                    <span class="p_sustainability_pillar_card__num">02</span>
                    <div class="p_sustainability_pillar_card__titles">
                        <h3 class="p_sustainability_pillar_card__ja">社 会</h3>
                        <span class="p_sustainability_pillar_card__en">Society</span>
                    </div>
                    <div class="p_sustainability_pillar_card__subtitle">災害に強い街づくり</div>
                    <div class="p_sustainability_pillar_card__icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sustainability_2.svg" alt="社会" />
                    </div>
                    <div class="p_sustainability_pillar_card__tags">
                        <span class="p_sustainability_pillar_card__tag">建物の長寿命化を提案</span>
                        <span class="p_sustainability_pillar_card__tag">防災・減災テクノロジーを導入</span>
                    </div>
                </div>

                <!-- Card 03 -->
                <div class="p_sustainability_pillar_card">
                    <span class="p_sustainability_pillar_card__num">03</span>
                    <div class="p_sustainability_pillar_card__titles">
                        <h3 class="p_sustainability_pillar_card__ja">未 来</h3>
                        <span class="p_sustainability_pillar_card__en">Future</span>
                    </div>
                    <div class="p_sustainability_pillar_card__subtitle">誰もが輝ける職場づくり</div>
                    <div class="p_sustainability_pillar_card__icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sustainability_3.svg" alt="未来" />
                    </div>
                    <div class="p_sustainability_pillar_card__tags">
                        <span class="p_sustainability_pillar_card__tag">持続可能な労働環境の整備</span>
                        <span class="p_sustainability_pillar_card__tag">技能者の積極的な育成</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Banner Section -->
    <div class="p_sustainability_banner">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sustainability_4.jpg" alt="サステナビリティ イメージ" />
    </div>

    <!-- Section 3: SDGs Initiatives (SDGsへの取り組み) -->
    <section class="p_sustainability_sdgs">
        <div class="inner w-md">
            <header class="p_sustainability_sec_header">
                <span class="p_sustainability_sec_header__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M16,0h4L4,20H0Z" fill="#e54300" />
                    </svg>
                </span>
                <span class="p_sustainability_sec_header__en">SDGs</span>
                <span class="p_sustainability_sec_header__line"></span>
                <h2 class="p_sustainability_sec_header__ja">SDGsへの取り組み</h2>
            </header>

            <div class="p_sustainability_sdgs__lead_wrap">
                <h3 class="p_sustainability_sdgs__lead">私たちの「日々の現場」が、<br />そのまま「持続可能な未来」になる。</h3>
                <p class="p_sustainability_sdgs__text">
                    当社は、建設という本業を通じて社会課題の解決に挑んでいます。<br />
                    一過性のボランティアではなく、日々の現場実務そのものをSDGsの目標達成へとつなげ、持続可能な街づくりに貢献します。<br />
                    私たちはサステナビリティ経営の推進に向け、特に以下の3つの実務において具体的なアクションを展開しています。
                </p>
            </div>

            <!-- Big White Box Container (Rebuilt from XD export SVG & PNG) -->
            <div class="p_sustainability_sdgs__box">
                <!-- Sub-section 1: 環境と調和 -->
                <div class="p_sustainability_sdgs_item">
                    <div class="p_sustainability_sdgs_item__header">
                        <span class="p_sustainability_sdgs_item__bar"></span>
                        <h4 class="p_sustainability_sdgs_item__title">環境と調和</h4>
                        <p class="p_sustainability_sdgs_item__desc">
                            資材調達からメンテナンス作業にいたるまで、建物のライフサイクル全体で環境負荷の低減に取り組みます。<br class="pc" />
                            ZEBの推進や低炭素資材の活用、建設廃棄物のリサイクルを通じて、脱炭素・循環型社会の実現を目指します。
                        </p>
                    </div>

                    <div class="p_sustainability_sdgs_item__body">
                        <!-- Left Column: 取組み例 + 3 Bullets -->
                        <div class="p_sustainability_sdgs_item__col_left">
                            <div class="p_sustainability_sdgs_item__example_tag">取組み例</div>
                            <ul class="p_sustainability_sdgs_item__list">
                                <li class="p_sustainability_sdgs_item__list_item">
                                    <span class="p_sustainability_sdgs_item__bullet"></span>
                                    <div class="p_sustainability_sdgs_item__list_content">
                                        <h5 class="p_sustainability_sdgs_item__list_title">省エネ改修の提案</h5>
                                        <p class="p_sustainability_sdgs_item__list_text">
                                            計画段階からの断熱性能向上、太陽光発電システムや高効率空調（高効率ZEB・ZEH）の積極的な導入を提案します。</p>
                                    </div>
                                </li>
                                <li class="p_sustainability_sdgs_item__list_item">
                                    <span class="p_sustainability_sdgs_item__bullet"></span>
                                    <div class="p_sustainability_sdgs_item__list_content">
                                        <h5 class="p_sustainability_sdgs_item__list_title">環境配慮型資材の採用</h5>
                                        <p class="p_sustainability_sdgs_item__list_text">
                                            低炭素コンクリートや乾式工法、既存躯体を活用した改修工法を採用し、CO<sub>2</sub>排出量の削減に取り組みます。</p>
                                    </div>
                                </li>
                                <li class="p_sustainability_sdgs_item__list_item">
                                    <span class="p_sustainability_sdgs_item__bullet"></span>
                                    <div class="p_sustainability_sdgs_item__list_content">
                                        <h5 class="p_sustainability_sdgs_item__list_title">産業廃棄物の削減</h5>
                                        <p class="p_sustainability_sdgs_item__list_text">
                                            旧塗膜や下地調整材の粉塵飛散を防ぐため、水養生や集塵機付き工具を使用し、適切な回収・処理を徹底します。</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Right Column: Image + SDGs Badges -->
                        <div class="p_sustainability_sdgs_item__col_right">
                            <div class="p_sustainability_sdgs_item__img_wrap">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sustainability_5.jpg"
                                    alt="環境と調和" />
                            </div>
                            <div class="p_sustainability_sdgs_item__badges">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sdgs_7.svg"
                                    alt="SDGs Goal 7" class="p_sustainability_sdgs_item__badge" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p_sustainability_sdgs__divider"></div>

                <!-- Sub-section 2: 安心・安全な社会への貢献 -->
                <div class="p_sustainability_sdgs_item">
                    <div class="p_sustainability_sdgs_item__header">
                        <span class="p_sustainability_sdgs_item__bar"></span>
                        <h4 class="p_sustainability_sdgs_item__title">安心・安全な社会への貢献</h4>
                        <p class="p_sustainability_sdgs_item__desc">
                            自然災害の激甚化やインフラの老朽化に対応するため、適切なメンテナンスによる建物の長寿命化と、防災・減災を考慮した改修工事を通じて、安全・安心な街づくりの実現を目指します。</p>
                    </div>

                    <div class="p_sustainability_sdgs_item__body">
                        <!-- Left Column: 取組み例 + 3 Bullets -->
                        <div class="p_sustainability_sdgs_item__col_left">
                            <div class="p_sustainability_sdgs_item__example_tag">取組み例</div>
                            <ul class="p_sustainability_sdgs_item__list">
                                <li class="p_sustainability_sdgs_item__list_item">
                                    <span class="p_sustainability_sdgs_item__bullet"></span>
                                    <div class="p_sustainability_sdgs_item__list_content">
                                        <h5 class="p_sustainability_sdgs_item__list_title">長寿命化工法やリニューアル工事の提案</h5>
                                        <p class="p_sustainability_sdgs_item__list_text">
                                            スクラップ＆ビルドから、外壁改修・防水改修・補強工事などによる「建物の長寿命化」へシフトし、既存建物の価値を維持・向上させます。</p>
                                    </div>
                                </li>
                                <li class="p_sustainability_sdgs_item__list_item">
                                    <span class="p_sustainability_sdgs_item__bullet"></span>
                                    <div class="p_sustainability_sdgs_item__list_content">
                                        <h5 class="p_sustainability_sdgs_item__list_title">防災・減災テクノロジーの導入</h5>
                                        <p class="p_sustainability_sdgs_item__list_text">
                                            耐震・免震改修の施工や、豪雨に備えた防水・排水対策などの強化を通じて、災害に強い建物づくりに取り組みます。</p>
                                    </div>
                                </li>
                                <li class="p_sustainability_sdgs_item__list_item">
                                    <span class="p_sustainability_sdgs_item__bullet"></span>
                                    <div class="p_sustainability_sdgs_item__list_content">
                                        <h5 class="p_sustainability_sdgs_item__list_title">周辺環境への配慮</h5>
                                        <p class="p_sustainability_sdgs_item__list_text">
                                            工事現場では、低騒音・低振動型建設機械の導入や安全な歩行者通路の確保を徹底し、周辺環境への影響低減と地域の安全確保に取り組みます。</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Right Column: Image + SDGs Badges -->
                        <div class="p_sustainability_sdgs_item__col_right">
                            <div class="p_sustainability_sdgs_item__img_wrap">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sustainability_6.jpg"
                                    alt="安心・安全な社会への貢献" />
                            </div>
                            <div class="p_sustainability_sdgs_item__badges">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sdgs_11.svg"
                                    alt="SDGs Goal 11" class="p_sustainability_sdgs_item__badge" />
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sdgs_13.svg"
                                    alt="SDGs Goal 13" class="p_sustainability_sdgs_item__badge" />
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sdgs_12.svg"
                                    alt="SDGs Goal 12" class="p_sustainability_sdgs_item__badge" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p_sustainability_sdgs__divider"></div>

                <!-- Sub-section 3: 誠実な組織と未来への投資 -->
                <div class="p_sustainability_sdgs_item">
                    <div class="p_sustainability_sdgs_item__header">
                        <span class="p_sustainability_sdgs_item__bar"></span>
                        <h4 class="p_sustainability_sdgs_item__title">誠実な組織と未来への投資</h4>
                        <p class="p_sustainability_sdgs_item__desc">
                            担い手不足が進む建設業界において、働きやすく持続可能な労働環境づくりを推進します。<br class="pc" />
                            ベテラン職人の高度な技術をデジタルで共有・継承し、若手・女性・外国人を含む多様な人材への技術継承を推進。<br class="pc" />
                            誰もが誇りを持って活躍できる、魅力ある建設業の実現を目指します。
                        </p>
                    </div>

                    <div class="p_sustainability_sdgs_item__body">
                        <!-- Left Column: 取組み例 + 3 Bullets -->
                        <div class="p_sustainability_sdgs_item__col_left">
                            <div class="p_sustainability_sdgs_item__example_tag">取組み例</div>
                            <ul class="p_sustainability_sdgs_item__list">
                                <li class="p_sustainability_sdgs_item__list_item">
                                    <span class="p_sustainability_sdgs_item__bullet"></span>
                                    <div class="p_sustainability_sdgs_item__list_content">
                                        <h5 class="p_sustainability_sdgs_item__list_title">労働環境の改善</h5>
                                        <p class="p_sustainability_sdgs_item__list_text">施工管理業務の分担化や IT
                                            ツールの導入による、時間外労働の削減と「週休2日」の実現に取り組みます。</p>
                                    </div>
                                </li>
                                <li class="p_sustainability_sdgs_item__list_item">
                                    <span class="p_sustainability_sdgs_item__bullet"></span>
                                    <div class="p_sustainability_sdgs_item__list_content">
                                        <h5 class="p_sustainability_sdgs_item__list_title">多様な人材の活躍支援</h5>
                                        <p class="p_sustainability_sdgs_item__list_text">
                                            女性技能者の育成支援や外国人労働者への多言語対応・安全教育を通じ、多様な人材が活躍できる職場づくりを推進します。</p>
                                    </div>
                                </li>
                                <li class="p_sustainability_sdgs_item__list_item">
                                    <span class="p_sustainability_sdgs_item__bullet"></span>
                                    <div class="p_sustainability_sdgs_item__list_content">
                                        <h5 class="p_sustainability_sdgs_item__list_title">技術のデジタル継承</h5>
                                        <p class="p_sustainability_sdgs_item__list_text">
                                            ベテランの熟練技術や施工ノウハウを動画やデジタル技術で可視化し、若手へスムーズに引き継ぐ仕組みづくりに取り組みます。</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Right Column: Image + SDGs Badges -->
                        <div class="p_sustainability_sdgs_item__col_right">
                            <div class="p_sustainability_sdgs_item__img_wrap">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sustainability_7.jpg"
                                    alt="誠実な組織と未来への投資" />
                            </div>
                            <div class="p_sustainability_sdgs_item__badges">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sdgs_5.svg"
                                    alt="SDGs Goal 5" class="p_sustainability_sdgs_item__badge" />
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sdgs_8.svg"
                                    alt="SDGs Goal 8" class="p_sustainability_sdgs_item__badge" />
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sdgs_9.svg"
                                    alt="SDGs Goal 9" class="p_sustainability_sdgs_item__badge" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();