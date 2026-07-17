<?php
/**
 * Template Name: サービス
 * Template Post Type: page
 */

get_header();
?>

<div class="guidebox"></div>

<main class="l_main">
    <!-- Section 1: Hero Header -->
    <section class="p_service_hero">
        <div class="inner w-md">
            <div class="p_service_hero__inner">
                <div class="p_service_hero__decor">
                    <svg xmlns="http://www.w3.org/2000/svg" width="380" height="380" viewBox="0 0 380 380" fill="none">
                        <path d="M304,0h76L76,380H0Z" fill="url(#hero_decor_grad)" />
                        <defs>
                            <linearGradient id="hero_decor_grad" x1="0.5" y1="0" x2="0.5" y2="1"
                                gradientUnits="objectBoundingBox">
                                <stop offset="0" stop-color="#e54300" />
                                <stop offset="1" stop-color="#eceff1" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="p_service_hero__content">
                    <h1 class="p_service_hero__title">
                        <span class="p_service_hero__en">Service</span>
                        <span class="p_service_hero__ja_group">
                            <span class="p_service_hero__ja_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none">
                                    <path d="M16,0h4L4,20H0Z" fill="#e54300" />
                                </svg>
                            </span>
                            <span class="p_service_hero__ja">サービス</span>
                        </span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Local Navigation -->
    <nav class="p_service_nav">
        <div class="inner w-md">
            <div class="p_service_nav__list">
                <a href="#new-construction" class="p_service_nav__item">
                    <span class="p_service_nav__text">新築外装工事</span>
                </a>
                <a href="#large-repair" class="p_service_nav__item">
                    <span class="p_service_nav__text">大規模修繕工事</span>
                </a>
                <a href="#ve-proposal" class="p_service_nav__item">
                    <span class="p_service_nav__text">外壁補修VE提案</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Section 3: VE Proposal Intro -->
    <section id="ve-proposal" class="p_service_ve_intro common_sec">
        <div class="inner w-md">
            <div class="p_service_ve_intro__inner">
                <!-- セクションヘッダー -->
                <div class="p_service_ve_intro__heading">
                    <div class="p_service_ve_intro__heading_left">
                        <span class="p_service_ve_intro__heading_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path d="M16,0h4L4,20H0Z" fill="#e54300" />
                            </svg>
                        </span>
                        <span class="p_service_ve_intro__heading_en">VE Proposal</span>
                    </div>
                    <div class="p_service_ve_intro__heading_divider"></div>
                    <div class="p_service_ve_intro__heading_right">
                        <span class="p_service_ve_intro__heading_ja">その先を見据えたVE提案</span>
                    </div>
                </div>

                <div class="p_service_ve_intro__grid">
                    <!-- 左カラム: テキストコンテンツ -->
                    <div class="p_service_ve_intro__content">
                        <h2 class="p_service_ve_intro__title">
                            価格競争から、<br />
                            付加価値提案へ
                        </h2>
                        <div class="p_service_ve_intro__text">
                            新築時の状態へ戻すだけの修繕ではなく、現在の建物性能や利用環境に合わせた改修をご提案します。高耐候性塗料・シーリング材への更新による耐久性向上、遮熱塗料や断熱対策による省エネ性能の向上、手すり設置や段差解消などのバリアフリー化など、建物の課題に応じた最適な改善を実施します。<br />
                            「直す」だけではなく「価値を高める」ことで、美観・機能性・耐久性を向上させ、入居者満足度の向上や資産価値の維持につなげます。さらに、長期的な修繕周期の最適化により、LCC（ライフサイクルコスト）の低減を実現。時代のニーズに合わせた、将来を見据えたリニューアルをご提案します。
                        </div>
                    </div>

                    <!-- 右カラム: 画像 -->
                    <div class="p_service_ve_intro__photo">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_1.jpg"
                            alt="その先を見据えたVE提案 施工イメージ" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: LCC & Warranty Proposals -->
    <section class="p_service_proposals">
        <div class="inner w-md">
            <div class="p_service_proposals__container">
                <!-- Proposal 1: LCC Reduction -->
                <div class="p_service_proposals__block">
                    <h3 class="p_service_proposals__title">
                        <span class="p_service_proposals__title_dot"></span>
                        ライフサイクルコスト（LCC）の削減へ。
                    </h3>
                    <div class="p_service_proposals__grid">
                        <div class="p_service_proposals__photo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_2.jpg"
                                alt="ライフサイクルコストの削減へ 施工イメージ" />
                        </div>
                        <div class="p_service_proposals__content">
                            <p class="p_service_proposals__text">
                                外壁材の耐用年数に合わせて、ポリウレタン系・シリコーン系など高耐候性シーリング材を適切にご提案します。一般的なシーリング材では約10年ごとに打ち替えが必要となり、そのたびに足場の設置費用が発生します。一方、高耐候性シーリング材を採用することで、10年目の「シーリング工事のためだけの足場設置」を回避でき、30年間のライフサイクルコスト（LCC）を大幅に削減できます。さらに、そのコスト削減効果を分かりやすく示すLCCシミュレーション資料を、作成・ご提供。施主様への提案力向上をサポートします。
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Divider -->
                <hr class="p_service_proposals__divider" />

                <!-- Proposal 2: Warranty -->
                <div class="p_service_proposals__block">
                    <h3 class="p_service_proposals__title">
                        <span class="p_service_proposals__title_dot"></span>
                        メーカー連名保証による安心を。
                    </h3>
                    <div class="p_service_proposals__grid">
                        <div class="p_service_proposals__photo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_3.jpg"
                                alt="メーカー連名保証による安心を 施工イメージ" />
                        </div>
                        <div class="p_service_proposals__content">
                            <p class="p_service_proposals__text">
                                工事完了後には、当社と材料メーカーの連名による長期品質保証書を発行いたします。予算を大きく増やすことなく、施主様へ「長期的な安心」と「品質への信頼」を提供できるため、他社との差別化につながる付加価値としてご活用いただけます。
                            </p>
                            <p class="p_service_proposals__text">価格だけで選ばれる提案ではなく、LCC 削減・長期保証・提案資料までを含めたトータルな
                                VE（バリューエンジニアリング）提案により、御社の受注競争力向上に貢献いたします。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Menu of Services (Sealing & Waterproofing) -->
    <section class="p_service_menu">
        <div class="inner w-md">
            <div class="p_service_menu__inner">
                <!-- セクションヘッダー -->
                <div class="p_service_menu__heading">
                    <div class="p_service_menu__heading_left">
                        <span class="p_service_menu__heading_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path d="M16,0h4L4,20H0Z" fill="#e54300" />
                            </svg>
                        </span>
                        <span class="p_service_menu__heading_en">Menu of Services</span>
                    </div>
                    <div class="p_service_menu__heading_divider"></div>
                    <div class="p_service_menu__heading_right">
                        <span class="p_service_menu__heading_ja">提供メニュー</span>
                    </div>
                </div>

                <!-- 2カラムコンテンツ -->
                <div class="p_service_menu__grid">
                    <!-- 左カラム: シーリング工事 -->
                    <div class="p_service_menu__item">
                        <h3 class="p_service_menu__title">シーリング工事</h3>
                        <div class="p_service_menu__text">
                            工事完了後には、当社と材料メーカーの連名による長期品質保証書を発行いたします。予算を大きく増やすことなく、施主様へ「長期的な安心」と「品質への信頼」を提供できるため、他社との差別化につながる付加価値としてご活用いただけます。<br />
                            価格だけで選ばれる提案ではなく、LCC 削減・長期保証・提案資料までを含めたトータルな VE（バリューエンジニアリング）提案により、御社の受注競争力向上に貢献いたします。
                        </div>
                    </div>

                    <!-- 右カラム: 防水工事 -->
                    <div class="p_service_menu__item">
                        <h3 class="p_service_menu__title">防水工事</h3>
                        <div class="p_service_menu__text">アスファルト防水・シート防水・塗膜防水（ウレタン等）など、多種多様な防水工法の中から、建物の構造（RC・S
                            造）、下地の挙動、屋上用途（歩行・非歩行・緑化）に合わせた最適な防水仕様をご提案します。設計図書通りの施工にとどまらず、耐久性・施工性・維持管理性を総合的に検討し、初期コストと耐用年数のバランスを最大限に高めた「根拠ある
                            VE 案」を策定。施主様へ納得感のある提案資料として、ご活用いただけます。</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: LCC Renewal Intro -->
    <section class="p_service_lcc_intro common_sec">
        <div class="inner w-md">
            <div class="p_service_lcc_intro__inner">
                <!-- セクションヘッダー -->
                <div class="p_service_lcc_intro__heading">
                    <div class="p_service_lcc_intro__heading_left">
                        <span class="p_service_lcc_intro__heading_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path d="M16,0h4L4,20H0Z" fill="#e54300" />
                            </svg>
                        </span>
                        <span class="p_service_lcc_intro__heading_en">renovations for LCC</span>
                    </div>
                    <div class="p_service_lcc_intro__heading_divider"></div>
                    <div class="p_service_lcc_intro__heading_right">
                        <span class="p_service_lcc_intro__heading_ja">LCCの低減を実現するリニューアル</span>
                    </div>
                </div>

                <div class="p_service_lcc_intro__grid">
                    <!-- 左カラム: テキストコンテンツ -->
                    <div class="p_service_lcc_intro__content">
                        <h2 class="p_service_lcc_intro__title">
                            修繕から、建物価値を<br />
                            高めるリニューアル提案へ
                        </h2>
                        <div class="p_service_lcc_intro__text">
                            新築時の状態へ戻すだけの修繕ではなく、現在の建物性能や利用環境に合わせた改修をご提案します。高耐候性塗料・シーリング材への更新による耐久性向上、遮熱塗料や断熱対策による省エネ性能の向上、手すり設置や段差解消などのバリアフリー化など、建物の課題に応じた最適な改善を実施します。<br />
                            「直す」だけではなく「価値を高める」ことで、美観・機能性・耐久性を向上させ、入居者満足度の向上や資産価値の維持につなげます。さらに、長期的な修繕周期の最適化により、LCC（ライフサイクルコスト）の低減を実現。時代のニーズに合わせた、将来を見据えたリニューアルをご提案します。
                        </div>
                    </div>

                    <!-- 右カラム: 画像 -->
                    <div class="p_service_lcc_intro__photo">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_4.jpg"
                            alt="LCCの低減を実現するリニューアル 施工イメージ" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 7: Tenant Care Proposals -->
    <section class="p_service_tenant_care">
        <div class="inner w-md">
            <div class="p_service_tenant_care__container">
                <div class="p_service_tenant_care__block">
                    <h3 class="p_service_tenant_care__title">
                        <span class="p_service_tenant_care__title_dot"></span>
                        入居者・テナントに配慮した施工管理
                    </h3>
                    <div class="p_service_tenant_care__grid">
                        <div class="p_service_tenant_care__photo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_5.jpg"
                                alt="入居者・テナントに配慮した施工管理 施工イメージ" />
                        </div>
                        <div class="p_service_tenant_care__content">
                            <div class="p_service_tenant_care__text">
                                入居者の皆様やテナントの所有者様が生活、営業を続ける環境でも、安全性と快適性に配慮した施工管理を徹底します。臭気・騒音の抑制をはじめ、プライバシーに配慮した足場計画や、防犯対策を講じることで、日常生活や営業への影響を最小限に抑えます。また、工事着手前の説明会や案内文の配布、工事スケジュールの周知など、入居者様対応を仕組み化。工事中の不安やクレームを未然に防ぎ、元請ゼネコン様や管理組合様の苦情対応や調整業務の負担軽減に貢献します。
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 8: Menu of Services Details -->
    <section class="p_service_menu_detail">
        <div class="inner w-md">
            <div class="p_service_menu_detail__inner">
                <!-- セクションヘッダー -->
                <div class="p_service_menu_detail__heading">
                    <div class="p_service_menu_detail__heading_left">
                        <span class="p_service_menu_detail__heading_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path d="M16,0h4L4,20H0Z" fill="#e54300" />
                            </svg>
                        </span>
                        <span class="p_service_menu_detail__heading_en">Menu of Services</span>
                    </div>
                    <div class="p_service_menu_detail__heading_divider"></div>
                    <div class="p_service_menu_detail__heading_right">
                        <span class="p_service_menu_detail__heading_ja">提供メニュー</span>
                    </div>
                </div>

                <!-- 8項目グリッド (2カラム) -->
                <div class="p_service_menu_detail__grid">
                    <!-- 1. 調査診断 -->
                    <div class="p_service_menu_detail__item">
                        <h3 class="p_service_menu_detail__title">調査診断</h3>
                        <div class="p_service_menu_detail__text">
                            建築知識と劣化状況の分析に基づき、すべての建物に同じ周期で修繕を行う「一律12年周期」の考え方ではなく、建物ごとの劣化スピードや使用環境を踏まえた最適な修繕タイミングを導き出します。例えば、「今回はシーリング補修と防水トップコートのみを実施し、外壁塗装は劣化状況を見ながら数年後に実施する」といった、必要な工事を必要な時期に行う計画をご提案。30年スパンでの
                            LCC（ライフサイクルコスト）の最小化を実現します。</div>
                    </div>

                    <!-- 2. 仮設工事 -->
                    <div class="p_service_menu_detail__item">
                        <h3 class="p_service_menu_detail__title">仮設工事</h3>
                        <div class="p_service_menu_detail__text">
                            豊富な現場経験をもとに、建物形状や施工条件、周辺環境に合わせた最適な仮設計画をご提案します。入居者・テナント様が利用を継続する建物では、動線確保、安全対策、防犯対策、騒音・振動・粉じん対策を徹底。さらに、作業効率と安全性を両立した足場計画により、後工程の品質向上と工期短縮にも貢献します。<br />「ただ設置する仮設」ではなく、「建物価値と工事品質を支える仮設」へ。工事品質を支える、戦略的な仮設計画をご提案します。
                        </div>
                    </div>

                    <!-- 3. 下地・タイル補修工事 -->
                    <div class="p_service_menu_detail__item">
                        <h3 class="p_service_menu_detail__title">下地・タイル補修工事</h3>
                        <div class="p_service_menu_detail__text">
                            ひび割れ・コンクリートの爆裂・タイルの浮きなどの劣化に対し、表面を補修するだけの処置は行いません。中性化の進行状況、内部鉄筋の腐食状態、建物の挙動（動き）の有無を的確に診断し、劣化原因を把握したうえで最適な補修方法をご提案します。エポキシ樹脂注入工法やピンニング工法など、症状に応じた適切な工法を選定することで、劣化の再発を防止。建物本来の耐久性を回復させ、次回修繕までの期間を延ばす、根本解決型の補修工事をご提供します。
                        </div>
                    </div>

                    <!-- 4. シーリング工事 -->
                    <div class="p_service_menu_detail__item">
                        <h3 class="p_service_menu_detail__title">シーリング工事</h3>
                        <div class="p_service_menu_detail__text">
                            目地幅の変化やコンクリート・サイディングの微細な歪みなど、劣化状況や今後の挙動を見極め、変成シリコーン・ポリウレタン・ノンブリード仕様など、部位や環境に応じた最適なシーリング材を選定します。単なる打ち替えるだけではなく、建物の動きに長期間追従できる性能を確保することで、シーリングの耐久性を向上。次回大規模修繕までの期間を延ばす、無駄な補修を抑えることで、長期的な
                            LCC（ライフサイクルコスト）の最小化に貢献します。</div>
                    </div>

                    <!-- 5. 外壁塗装工事 -->
                    <div class="p_service_menu_detail__item">
                        <h3 class="p_service_menu_detail__title">外壁塗装工事</h3>
                        <div class="p_service_menu_detail__text">
                            ひび割れ・コンクリートの爆裂・タイルの浮きなどの劣化に対し、表面を補修するだけの処置は行いません。中性化の進行状況、内部鉄筋の腐食状態、建物の挙動（動き）の有無を的確に診断し、劣化原因を把握したうえで最適な補修方法をご提案します。エポキシ樹脂注入工法やピンニング工法など、症状に応じた適切な工法を選定することで、劣化の再発を防止。建物本来の耐久性を回復させ、次回修繕までの期間を延ばす、根本解決型の補修工事をご提供します。
                        </div>
                    </div>

                    <!-- 6. 防水工事 -->
                    <div class="p_service_menu_detail__item">
                        <h3 class="p_service_menu_detail__title">防水工事</h3>
                        <div class="p_service_menu_detail__text">
                            目既存の防水層をすべて撤去するのではなく、下地の含水状態や劣化状況を詳細に見極め、既存防水を活かした上で新たな防水層を形成する最適な改修工法をご提案します。通気緩衝工法や機械固定工法など、建物の状態に応じた合理的な工法を選定することで、撤去費用や産業廃棄物処理費を削減。初期コストを抑えながら、防水性能と耐久性を向上させ、長期的な維持管理コストの低減を実現します。
                        </div>
                    </div>

                    <!-- 7. 鉄部塗装工事 -->
                    <div class="p_service_menu_detail__item">
                        <h3 class="p_service_menu_detail__title">鉄部塗装工事</h3>
                        <div class="p_service_menu_detail__text">
                            劣化状況を適切に診断し、腐食が進行する前の最適なタイミングで防錆処置を行うメンテナンス計画をご提案します。「数年ごとの部分的な防錆処置」と「0年周期を目安とした計画的な全面塗装」を組み合わせた長期修繕サイクルを設計することで、鉄部の寿命を延ばし、大規模修繕や部材交換のリスクを低減。適切な材料選定と施工管理により、次回塗り替えまでの期間を最大限に延長するご提案を行います。
                        </div>
                    </div>

                    <!-- 8. 構造物補強工事 -->
                    <div class="p_service_menu_detail__item">
                        <h3 class="p_service_menu_detail__title">構造物補強工事</h3>
                        <div class="p_service_menu_detail__text">
                            既存の構造骨組の耐震性能やコンクリート強度を詳細に調査・分析し、建物の状態に応じて、炭素繊維シート補強・鉄骨ブレース設置・SRF工法など、最適な補強方法を選定します。<br />
                            建物全体を解体して建て替えるのではなく、必要な箇所へ的確な補強を施すことで、初期投資を大幅に抑制。建物を長く活用しながら、安全性と資産価値を向上させ、30～50年先を見据えたLCC（ライフサイクルコスト）の最適化を実現します。
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 9: VE Methods Proposals (既存のRelated Proposeを参考に見直し再作成) -->
    <section class="p_service_propose">
        <div class="inner w-md">
            <div class="p_service_propose__inner">
                <!-- セクションヘッダー -->
                <div class="p_service_propose__heading">
                    <div class="p_service_propose__heading_left">
                        <span class="p_service_propose__heading_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path d="M16,0h4L4,20H0Z" fill="#e54300" />
                            </svg>
                        </span>
                        <span class="p_service_propose__heading_en">VE for Exterior Wall Repair</span>
                    </div>
                    <div class="p_service_propose__heading_divider"></div>
                    <div class="p_service_propose__heading_right">
                        <span class="p_service_propose__heading_ja">外壁補修VE提案</span>
                    </div>
                </div>

                <h2 class="p_service_propose__main_title">
                    10年後、20年後を見据えた<br />
                    「長寿命化型・外壁補修VE工法」のご提案
                </h2>

                <!-- 提案グリッド -->
                <div class="p_service_propose__grid">
                    <!-- 提案1: JKセライダー工法 -->
                    <a href="<?php echo home_url('/jk-seraida/'); ?>" class="p_service_propose__card">
                        <div class="p_service_propose__image_wrap">
                            <span class="p_service_propose__num">01</span>
                            <div class="p_service_propose__image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_6.jpg"
                                    alt="JKセライダー工法 施工イメージ" />
                            </div>
                        </div>
                        <div class="p_service_propose__body">
                            <p class="p_service_propose__lead">外観価値を守り、<br />安全性を高めるタイル保全工法。</p>
                            <div class="p_service_propose__divider"></div>
                            <p class="p_service_propose__sub">透明樹脂タイルピン固定剥落防止工法</p>
                            <div class="p_service_propose__title_wrap">
                                <h4 class="p_service_propose__title">JKセライダー工法</h4>
                                <div class="p_service_propose__btn">
                                    <span class="p_service_propose__btn_dot"></span>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- 提案2: JKストーン工法 -->
                    <a href="<?php echo home_url('/jk-stone/'); ?>" class="p_service_propose__card">
                        <div class="p_service_propose__image_wrap">
                            <span class="p_service_propose__num">02</span>
                            <div class="p_service_propose__image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_7.jpg"
                                    alt="JKストーン工法 施工イメージ" />
                            </div>
                        </div>
                        <div class="p_service_propose__body">
                            <p class="p_service_propose__lead">鎧張りで一体化接合。<br />劣化要因をブロックし、長寿命化に貢献。</p>
                            <div class="p_service_propose__divider"></div>
                            <p class="p_service_propose__sub">外壁改修用シート状天然石装飾材</p>
                            <div class="p_service_propose__title_wrap">
                                <h4 class="p_service_propose__title">JKストーン工法</h4>
                                <div class="p_service_propose__btn">
                                    <span class="p_service_propose__btn_dot"></span>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- 提案3: ビススクランプ注入工法 -->
                    <a href="<?php echo home_url('/visclamp/'); ?>" class="p_service_propose__card">
                        <div class="p_service_propose__image_wrap">
                            <span class="p_service_propose__num">03</span>
                            <div class="p_service_propose__image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service_8.jpg"
                                    alt="ビススクランプ注入工法 施工イメージ" />
                            </div>
                        </div>
                        <div class="p_service_propose__body">
                            <p class="p_service_propose__lead">タッピングビスとエポキシ樹脂で、<br />直張りタイルのはく落を防止。</p>
                            <div class="p_service_propose__divider"></div>
                            <p class="p_service_propose__sub">直張りタイル貼り付けモルタル浮き補修</p>
                            <div class="p_service_propose__title_wrap">
                                <h4 class="p_service_propose__title">ビスクランプ注入工法</h4>
                                <div class="p_service_propose__btn">
                                    <span class="p_service_propose__btn_dot"></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>