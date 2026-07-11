<?php
/**
 * Template Name: 私たちについて
 * Template Post Type: page
 */

get_header();
?>

<!-- <div class="guidebox"></div> -->

<main class="l_main">
    <!-- Section 1: Hero Header -->
    <section class="p_about_hero">
        <div class="inner w-md">
            <div class="p_about_hero__inner">
                <div class="p_about_hero__decor">
                    <svg xmlns="http://www.w3.org/2000/svg" width="280" height="280" viewBox="0 0 280 280" fill="none">
                        <path d="M224,0h56L56,280H0Z" fill="url(#hero_decor_grad)" />
                        <defs>
                            <linearGradient id="hero_decor_grad" x1="0.5" y1="0" x2="0.5" y2="1"
                                gradientUnits="objectBoundingBox">
                                <stop offset="0" stop-color="#e54300" />
                                <stop offset="1" stop-color="#eceff1" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="p_about_hero__content">
                    <h1 class="p_about_hero__title">
                        <span class="p_about_hero__en">About Us</span>
                        <span class="p_about_hero__ja_group">
                            <span class="p_about_hero__ja_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none">
                                    <path d="M16,0h4L4,20H0Z" fill="#e54300" />
                                </svg>
                            </span>
                            <span class="p_about_hero__ja">私たちについて</span>
                        </span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Local Navigation -->
    <nav class="p_about_nav">
        <div class="inner w-md">
            <div class="p_about_nav__list">
                <a href="#greeting" class="p_about_nav__item">
                    <span class="p_about_nav__text">代表者挨拶</span>
                </a>
                <a href="#overview" class="p_about_nav__item">
                    <span class="p_about_nav__text">会社概要</span>
                </a>
                <a href="#history" class="p_about_nav__item">
                    <span class="p_about_nav__text">沿革</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Section 3: Representative Greeting (Message) -->
    <section id="greeting" class="p_about_message common_sec">
        <div class="inner w-md">
            <div class="p_about_message__grid">
                <!-- Left: Photo -->
                <div class="p_about_message__photo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_message_1.jpg"
                        alt="代表者メッセージ" />
                </div>

                <!-- Right: Content -->
                <div class="p_about_message__content">
                    <header class="p_about_message__header">
                        <span class="p_about_message__header_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path d="M16,0h4L4,20H0Z" fill="#e54300" />
                            </svg>
                        </span>
                        <span class="p_about_message__header_en">Top Message</span>
                        <span class="p_about_message__header_line"></span>
                        <h2 class="p_about_message__header_ja">代表者挨拶</h2>
                    </header>

                    <h3 class="p_about_message__lead">未来に、愛され続ける価値を。</h3>

                    <div class="p_about_message__body">
                        <p class="p_about_message__text">
                            私たちが大切にしているのは、今だけの成果ではありません。<br />
                            その先に続く、お客様、仲間、社会にとっての未来の価値です。
                        </p>
                        <p class="p_about_message__text">
                            目先の利益や一時的な成功を追うのではなく、<br />
                            お客様との信頼を育み、社会にとって本当に意味のある選択を積み重ねていく。
                        </p>
                        <p class="p_about_message__text">
                            約束を守ること。<br />
                            期待を超えること。<br />変化を恐れず、常により良い方法を追求すること。<br />
                            そして、次の世代が誇れる未来を築いていくこと。
                        </p>
                        <p class="p_about_message__text">
                            一つひとつの誠実な行動が、お客様の成果や喜びにつながり、<br />
                            その先にいる家族、仲間、地域社会の笑顔を生み出していくと信じています。<br />
                            10 年後、50 年後の未来を豊かにするために。<br />
                            私たちは、未来に愛され続ける価値を、ここに創り続けます。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Banner Image -->
    <section class="p_about_banner">
        <div class="p_about_banner__image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_overview_1.jpg" alt="私たちについて イメージ画像" />
        </div>
    </section>

    <!-- Section 5: Corporate Profile (Overview) -->
    <section id="overview" class="p_about_overview common_sec">
        <div class="inner w-md">
            <header class="p_about_overview__header">
                <span class="p_about_overview__header_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M16,0h4L4,20H0Z" fill="#e54300" />
                    </svg>
                </span>
                <span class="p_about_overview__header_en">Corporate Profile</span>
                <span class="p_about_overview__header_line"></span>
                <h2 class="p_about_overview__header_ja">会社概要</h2>
            </header>

            <div class="p_about_overview__body">
                <dl class="p_about_overview__list">
                    <!-- Row 1 -->
                    <div class="p_about_overview__row">
                        <dt class="p_about_overview__label">会社名</dt>
                        <dd class="p_about_overview__data">株式会社寝屋川シール</dd>
                    </div>
                    <!-- Row 2 -->
                    <div class="p_about_overview__row">
                        <dt class="p_about_overview__label">所在地</dt>
                        <dd class="p_about_overview__data">
                            〒572-0077　大阪府寝屋川市点野 3-34-5<br />
                            TEL：072-826-3488<br />
                            FAX：072-826-8493
                            <div class="p_about_overview__map-wrap">
                                <a href="https://maps.app.goo.gl/9S4iYVszJpcrLoxH6" target="_blank" rel="noopener"
                                    class="p_about_overview__map-btn">
                                    <span class="p_about_overview__map-btn-text">GOOGLE MAP</span>
                                    <span class="p_about_overview__map-btn-dot"></span>
                                    <span class="p_about_overview__map-btn-circle"></span>
                                </a>
                            </div>
                        </dd>
                    </div>
                    <!-- Row 3 -->
                    <div class="p_about_overview__row">
                        <dt class="p_about_overview__label">設立</dt>
                        <dd class="p_about_overview__data">1981年5月21日（株式会社改組 1987年4月）</dd>
                    </div>
                    <!-- Row 4 -->
                    <div class="p_about_overview__row">
                        <dt class="p_about_overview__label">資本金</dt>
                        <dd class="p_about_overview__data">1,000 万円</dd>
                    </div>
                    <!-- Row 5 -->
                    <div class="p_about_overview__row">
                        <dt class="p_about_overview__label">役員</dt>
                        <dd class="p_about_overview__data">
                            代表取締役　西原 芳博<br />
                            取締役　　　西原 綾子<br />
                            取締役　　　中西 優<br />
                            監査役　　　西原 靖子
                        </dd>
                    </div>
                    <!-- Row 6 -->
                    <div class="p_about_overview__row">
                        <dt class="p_about_overview__label">従業員数</dt>
                        <dd class="p_about_overview__data">13名（営業2名、職工6名、事務5名）常用人員12名</dd>
                    </div>
                    <!-- Row 7 -->
                    <div class="p_about_overview__row">
                        <dt class="p_about_overview__label">協力業者</dt>
                        <dd class="p_about_overview__data">30社（技能士：120人）※2026年6月現在</dd>
                    </div>
                    <!-- Row 8 -->
                    <div class="p_about_overview__row">
                        <dt class="p_about_overview__label">事業内容</dt>
                        <dd class="p_about_overview__data">
                            マンション、ビル 新築建築工事<br />
                            シーリング工事／防水工事／塗装工事<br />
                            マンション、ビル 大規模修繕工事<br />
                            調査診断／下地・タイル補修工事／シーリング工事／外壁塗装工事／防水工事／鉄部塗装工事／構造物補強工事
                        </dd>
                    </div>
                    <!-- Row 9 -->
                    <div class="p_about_overview__row">
                        <dt class="p_about_overview__label">建設業許可</dt>
                        <dd class="p_about_overview__data">
                            許可番号　 大阪府知事 ( 般 -24) 第 749673103 号<br />
                            ［ 建設業の種類 ］<br />
                            防水工事業、大工工事業、とび・土木工事業、屋根工事業、板金工事業、塗装工事業、熱絶縁工事業、左官工事業、石工事業、タイル・れんが・ブロック工事業、ガラス工事業、内装仕上工事業、建具工事
                        </dd>
                    </div>
                    <!-- Row 10 -->
                    <div class="p_about_overview__row">
                        <dt class="p_about_overview__label">加入団体</dt>
                        <dd class="p_about_overview__data">関西シーリング工事業協同組合／日本樹脂施工協同組合／近畿コニシベステム工業会業</dd>
                    </div>
                    <!-- Row 11 -->
                    <div class="p_about_overview__row">
                        <dt class="p_about_overview__label">有資格者</dt>
                        <dd class="p_about_overview__data">
                            ・1級建築施工管理技士：◯名<br />
                            ・監理技術者資格者：◯名<br />
                            ・2級建築施工管理技士（建築）：◯名<br />
                            ・2級建築施工管理技士（仕上げ）：◯名<br />
                            ・シーリング管理士：◯名<br />
                            ・有機溶剤作業主任者：◯名<br />
                            ・石綿取扱い作業従事者：◯名
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <!-- Section 6: Banner Image 2 -->
    <section class="p_about_banner p_about_banner--second">
        <div class="p_about_banner__image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_history_1.jpg" alt="私たちについて イメージ画像" />
        </div>
    </section>

    <!-- Section 7: History (Timeline) -->
    <section id="history" class="p_about_history common_sec">
        <div class="inner w-md">
            <header class="p_about_history__header">
                <span class="p_about_history__header_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M16,0h4L4,20H0Z" fill="#e54300" />
                    </svg>
                </span>
                <span class="p_about_history__header_en">History</span>
                <span class="p_about_history__header_line"></span>
                <h2 class="p_about_history__header_ja">沿革</h2>
            </header>

            <div class="p_about_history__body">
                <div class="p_about_history__timeline">
                    <!-- Item 1 -->
                    <div class="p_about_history__item">
                        <div class="p_about_history__date">1981年5月</div>
                        <div class="p_about_history__content">
                            <p class="p_about_history__text">先代代表取締役である西原恵二が◯◯にてシーリング工事を請け負う寝屋川シールを創業</p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="p_about_history__item">
                        <div class="p_about_history__date">1987年4月</div>
                        <div class="p_about_history__content">
                            <p class="p_about_history__text">株式会社寝屋川シールに組織変更</p>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="p_about_history__item">
                        <div class="p_about_history__date">1987年6月</div>
                        <div class="p_about_history__content">
                            <p class="p_about_history__text">防水工事の建設許可を取得し、受注を開始</p>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="p_about_history__item">
                        <div class="p_about_history__date">2001年6月</div>
                        <div class="p_about_history__content">
                            <p class="p_about_history__text">関西シーリング工業協同組合に入会</p>
                            <p class="p_about_history__text">近畿コニシベステム工業会に入会</p>
                        </div>
                    </div>
                    <!-- Item 5 -->
                    <div class="p_about_history__item">
                        <div class="p_about_history__date">2009年4月</div>
                        <div class="p_about_history__content">
                            <p class="p_about_history__text">代表取締役の交代</p>
                            <p class="p_about_history__text">西原芳博が代表取締役に就任</p>
                        </div>
                    </div>
                    <!-- Item 6 -->
                    <div class="p_about_history__item">
                        <div class="p_about_history__date">2009年4月</div>
                        <div class="p_about_history__content">
                            <p class="p_about_history__text">マンション大規模修繕工事の受注を開始</p>
                            <p class="p_about_history__text">
                                大工工事業、とび・土木工事業、屋根工事業、板金工事業、塗装工事業、熱絶縁工事業、左官工事業、石工事業、タイル・れんが・ブロック工事業、ガラス工事業、内装仕上工事業、建具工事業の建設許可を取得
                            </p>
                        </div>
                    </div>
                    <!-- Item 7 -->
                    <div class="p_about_history__item">
                        <div class="p_about_history__date">2020年11月</div>
                        <div class="p_about_history__content">
                            <p class="p_about_history__text">本社事務所を寝屋川市点野に移転</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>