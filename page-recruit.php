<?php
/**
 * Template Name: Recruit Page
 * Template Post Type: page
 * Slug: recruit
 *
 * @package neyagawaseal
 */

get_header();
?>

<main id="primary" class="site-main">
	<!-- カンプ再現ガイド用ボックス（検証用。完了後に非表示） -->
	<!-- <div class="guidebox"></div> -->

	<!-- Section 1: Recruit Hero Visual & Concept (Parallax Area) -->
	<section class="p_recruit_hero">
		<!-- Parallax Background -->
		<div class="p_recruit_hero__bg"></div>
		<!-- Parallax Orange Stripe Decoration (preserveAspectRatio="xMidYMin slice" にて変倍・角度変化を防止) -->
		<div class="p_recruit_hero__stripe">
			<svg xmlns="http://www.w3.org/2000/svg" width="1280" height="800" viewBox="0 0 1280 800"
				preserveAspectRatio="xMidYMin slice">
				<path id="パス_418" data-name="パス 418" d="M610,0H800L160,800H-30Z" transform="translate(30)"
					fill="#e54300" opacity="0.602" />
			</svg>
		</div>
		<div class="p_recruit_hero__overlay"></div>

		<!-- First View (FV) Area -->
		<div class="p_recruit_hero__fv">
			<div class="p_recruit_hero__fv_inner">
				<!-- Statement Logo "自信を胸に、誇りを形に。" -->
				<div class="p_recruit_hero__statement_logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/recruit_statement_logo.svg"
						alt="自信を胸に、誇りを形に。" />
				</div>

				<!-- Background Outline Typography "RECRUIT" -->
				<div class="p_recruit_hero__backdrop">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/recruit_backdrop_text.svg"
						alt="RECRUIT" />
				</div>

				<!-- Vertical Side Text -->
				<div class="p_recruit_hero__side_text">Attention to detail shines through as confidence.</div>

				<!-- Scroll Indicator -->
				<a href="#concept" class="p_recruit_hero__scroll">
					<span class="p_recruit_hero__scroll_text">scroll</span>
					<div class="p_recruit_hero__scroll_line"></div>
				</a>
			</div>
		</div>

		<!-- Concept Copy & Statement Block -->
		<div id="concept" class="p_recruit_hero__concept">
			<div class="inner w-md">
				<div class="p_recruit_hero__concept_grid">
					<!-- Left Content: Catch Copy & Lead Text -->
					<div class="p_recruit_hero__concept_left">
						<!-- Catch Copy -->
						<h1 class="p_recruit_hero__catch">
							<span>細部への</span>
							<span>こだわりは</span>
							<span>自信という</span>
							<span>輝きへ。</span>
						</h1>

						<!-- Lead Text -->
						<div class="p_recruit_hero__lead">
							<p>私たちが大切にしているのは、<br />結果ではなく、結果に向かって<br />真摯に取り組む姿勢です。</p>
							<p>「自信」の根拠は、日々の準備と<br />積み重ねた努力の中にあります。</p>
							<p>そして「誇り」は、お客様に価値を届け、<br />喜ばれる行動の先にあると信じています。<br />肩書きや過去の実績にとらわれず、<br />一人ひとりが胸を張れる仕事を追求する。<br />自信と誇りを持てる仕事を積み重ね、<br />働くこと通じて一人ひとりが幸せになり、<br />輝ける組織を目指しています。
							</p>
						</div>
					</div>

					<!-- Right Content: 4 Overlay Images -->
					<div class="p_recruit_hero__concept_right">
						<div class="p_recruit_hero__img_wrap p_recruit_hero__img_wrap--1">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/recruit_concept_1.jpg"
								alt="採用イメージ1" />
						</div>
						<div class="p_recruit_hero__img_wrap p_recruit_hero__img_wrap--2">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/recruit_concept_2.jpg"
								alt="採用イメージ2" />
						</div>
						<div class="p_recruit_hero__img_wrap p_recruit_hero__img_wrap--3">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/recruit_concept_3.jpg"
								alt="採用イメージ3" />
						</div>
						<div class="p_recruit_hero__img_wrap p_recruit_hero__img_wrap--4">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/recruit_concept_4.jpg"
								alt="採用イメージ4" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 3: In Numbers (数字で見る寝屋川シール) -->
	<section class="p_recruit_numbers">
		<div class="inner w-md">
			<!-- Section Header -->
			<header class="p_recruit_numbers__header">
				<h2 class="p_recruit_numbers__title">In Numbers</h2>
				<p class="p_recruit_numbers__subtitle">
					<svg class="p_recruit_numbers__subtitle_slash" xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 20 20">
						<path d="M16,0h4L4,20H0Z" fill="#e54300" />
					</svg>
					数字で見る寝屋川シール
				</p>
			</header>

			<!-- 1. 会社について -->
			<div class="p_recruit_numbers__subsection">
				<h3 class="p_recruit_numbers__subsection_title">会社について</h3>
				<div class="p_recruit_numbers__grid p_recruit_numbers__grid--cols3">
					<!-- Card 1: 設立年 -->
					<div class="p_recruit_numbers__card p_recruit_numbers__card--w340_h215">
						<h4 class="p_recruit_numbers__card_title"><span class="p_recruit_numbers__card_dot"></span>設立年
						</h4>
						<div class="p_recruit_numbers__card_body">
							<span class="p_recruit_numbers__card_num">1987</span>
							<span class="p_recruit_numbers__card_unit">年</span>
						</div>
						<p class="p_recruit_numbers__card_sub">（創業：1981年）</p>
					</div>

					<!-- Card 2: 従業員数 -->
					<div class="p_recruit_numbers__card p_recruit_numbers__card--w340_h215">
						<h4 class="p_recruit_numbers__card_title"><span class="p_recruit_numbers__card_dot"></span>従業員数
						</h4>
						<div class="p_recruit_numbers__card_body">
							<span class="p_recruit_numbers__card_num">12</span>
							<span class="p_recruit_numbers__card_unit">名</span>
						</div>
					</div>

					<!-- Card 3: 売上高 -->
					<div class="p_recruit_numbers__card p_recruit_numbers__card--w340_h215">
						<h4 class="p_recruit_numbers__card_title"><span class="p_recruit_numbers__card_dot"></span>売上高
						</h4>
						<div class="p_recruit_numbers__card_body">
							<span class="p_recruit_numbers__card_num">00.0</span>
							<span class="p_recruit_numbers__card_unit">億円</span>
						</div>
						<p class="p_recruit_numbers__card_sub">（2025年度）</p>
					</div>
				</div>
			</div>

			<!-- 2. 働く人について -->
			<div class="p_recruit_numbers__subsection">
				<h3 class="p_recruit_numbers__subsection_title">働く人について</h3>

				<!-- Upper Grid: 2 Columns -->
				<div class="p_recruit_numbers__grid p_recruit_numbers__grid--cols2">
					<!-- Card 4: 男女比率 -->
					<div class="p_recruit_numbers__card p_recruit_numbers__card--w525_h215">
						<h4 class="p_recruit_numbers__card_title"><span class="p_recruit_numbers__card_dot"></span>男女比率
						</h4>
						<div class="p_recruit_numbers__card_flex">
							<div class="p_recruit_numbers__card_item p_recruit_numbers__card_item--male">
								<span class="p_recruit_numbers__card_label">男性</span>
								<span class="p_recruit_numbers__card_num">00</span>
								<span class="p_recruit_numbers__card_unit">%</span>
							</div>
							<div class="p_recruit_numbers__card_item p_recruit_numbers__card_item--female">
								<span class="p_recruit_numbers__card_label">女性</span>
								<span class="p_recruit_numbers__card_num">00</span>
								<span class="p_recruit_numbers__card_unit">%</span>
							</div>
						</div>
					</div>

					<!-- Card 5: 新卒／中途の場合 -->
					<div class="p_recruit_numbers__card p_recruit_numbers__card--w525_h215">
						<h4 class="p_recruit_numbers__card_title"><span
								class="p_recruit_numbers__card_dot"></span>新卒／中途の場合</h4>
						<div class="p_recruit_numbers__card_flex">
							<div class="p_recruit_numbers__card_item p_recruit_numbers__card_item--new">
								<span class="p_recruit_numbers__card_label">新卒</span>
								<span class="p_recruit_numbers__card_num">00</span>
								<span class="p_recruit_numbers__card_unit">%</span>
							</div>
							<div class="p_recruit_numbers__card_item p_recruit_numbers__card_item--mid">
								<span class="p_recruit_numbers__card_label">中途</span>
								<span class="p_recruit_numbers__card_num">00</span>
								<span class="p_recruit_numbers__card_unit">%</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Middle: Wide Age Distribution Card -->
				<div class="p_recruit_numbers__card p_recruit_numbers__card--w1080_h292">
					<h4 class="p_recruit_numbers__card_title"><span class="p_recruit_numbers__card_dot"></span>年代割合</h4>
					<div class="p_recruit_numbers__chart_grid">
						<div class="p_recruit_numbers__chart_row">
							<div class="p_recruit_numbers__chart_bar">
								<span class="p_recruit_numbers__chart_label">〜30代</span>
								<span class="p_recruit_numbers__chart_value">00<small>%</small></span>
								<div class="p_recruit_numbers__chart_track">
									<div class="p_recruit_numbers__chart_fill" style="width: 30%"></div>
								</div>
							</div>
							<div class="p_recruit_numbers__chart_bar">
								<span class="p_recruit_numbers__chart_label">50代</span>
								<span class="p_recruit_numbers__chart_value">00<small>%</small></span>
								<div class="p_recruit_numbers__chart_track">
									<div class="p_recruit_numbers__chart_fill" style="width: 25%"></div>
								</div>
							</div>
						</div>
						<div class="p_recruit_numbers__chart_row">
							<div class="p_recruit_numbers__chart_bar">
								<span class="p_recruit_numbers__chart_label">40代</span>
								<span class="p_recruit_numbers__chart_value">00<small>%</small></span>
								<div class="p_recruit_numbers__chart_track">
									<div class="p_recruit_numbers__chart_fill" style="width: 35%"></div>
								</div>
							</div>
							<div class="p_recruit_numbers__chart_bar">
								<span class="p_recruit_numbers__chart_label">60代</span>
								<span class="p_recruit_numbers__chart_value">00<small>%</small></span>
								<div class="p_recruit_numbers__chart_track">
									<div class="p_recruit_numbers__chart_fill" style="width: 10%"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Lower Grid: 3 Columns -->
				<div class="p_recruit_numbers__grid p_recruit_numbers__grid--cols3">
					<!-- Card 7: 平均勤続年数 -->
					<div class="p_recruit_numbers__card p_recruit_numbers__card--w340_h191">
						<h4 class="p_recruit_numbers__card_title"><span
								class="p_recruit_numbers__card_dot"></span>平均勤続年数</h4>
						<div class="p_recruit_numbers__card_body">
							<span class="p_recruit_numbers__card_prefix">約</span>
							<span class="p_recruit_numbers__card_num">00</span>
							<span class="p_recruit_numbers__card_unit">歳</span>
						</div>
					</div>

					<!-- Card 8: 女性管理職比率 -->
					<div class="p_recruit_numbers__card p_recruit_numbers__card--w340_h191">
						<h4 class="p_recruit_numbers__card_title"><span
								class="p_recruit_numbers__card_dot"></span>女性管理職比率</h4>
						<div class="p_recruit_numbers__card_body">
							<span class="p_recruit_numbers__card_num">00</span>
							<span class="p_recruit_numbers__card_unit">%</span>
						</div>
					</div>

					<!-- Card 9: 育休取得率 -->
					<div class="p_recruit_numbers__card p_recruit_numbers__card--w340_h191">
						<h4 class="p_recruit_numbers__card_title"><span class="p_recruit_numbers__card_dot"></span>育休取得率
						</h4>
						<div class="p_recruit_numbers__card_body">
							<span class="p_recruit_numbers__card_num">00</span>
							<span class="p_recruit_numbers__card_unit">%</span>
						</div>
					</div>
				</div>
			</div>

			<!-- 3. 働く環境について -->
			<div class="p_recruit_numbers__subsection">
				<h3 class="p_recruit_numbers__subsection_title">働く環境について</h3>

				<!-- Wide Job Type Distribution Card (職種別割合: 1080x292) -->
				<div class="p_recruit_numbers__card p_recruit_numbers__card--w1080_h292">
					<h4 class="p_recruit_numbers__card_title"><span class="p_recruit_numbers__card_dot"></span>職種別割合</h4>
					<div class="p_recruit_numbers__chart_grid">
						<div class="p_recruit_numbers__chart_row">
							<div class="p_recruit_numbers__chart_bar">
								<span class="p_recruit_numbers__chart_label">営業職</span>
								<span class="p_recruit_numbers__chart_value">00<small>%</small></span>
								<div class="p_recruit_numbers__chart_track">
									<div class="p_recruit_numbers__chart_fill" style="width: 25%"></div>
								</div>
							</div>
							<div class="p_recruit_numbers__chart_bar">
								<span class="p_recruit_numbers__chart_label">管理職</span>
								<span class="p_recruit_numbers__chart_value">00<small>%</small></span>
								<div class="p_recruit_numbers__chart_track">
									<div class="p_recruit_numbers__chart_fill" style="width: 15%"></div>
								</div>
							</div>
						</div>
						<div class="p_recruit_numbers__chart_row">
							<div class="p_recruit_numbers__chart_bar">
								<span class="p_recruit_numbers__chart_label">現場職</span>
								<span class="p_recruit_numbers__chart_value">00<small>%</small></span>
								<div class="p_recruit_numbers__chart_track">
									<div class="p_recruit_numbers__chart_fill" style="width: 50%"></div>
								</div>
							</div>
							<div class="p_recruit_numbers__chart_bar">
								<span class="p_recruit_numbers__chart_label">事務職</span>
								<span class="p_recruit_numbers__chart_value">00<small>%</small></span>
								<div class="p_recruit_numbers__chart_track">
									<div class="p_recruit_numbers__chart_fill" style="width: 10%"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Lower Grid: 3 Columns (年間休日, 年間有給取得率, 平均残業時間) -->
				<div class="p_recruit_numbers__grid p_recruit_numbers__grid--cols3">
					<!-- Card 11: 年間休日 -->
					<div class="p_recruit_numbers__card p_recruit_numbers__card--w340_h191">
						<h4 class="p_recruit_numbers__card_title"><span class="p_recruit_numbers__card_dot"></span>年間休日</h4>
						<div class="p_recruit_numbers__card_body">
							<span class="p_recruit_numbers__card_num">000</span>
							<span class="p_recruit_numbers__card_unit">日</span>
						</div>
					</div>

					<!-- Card 12: 年間有給取得率 -->
					<div class="p_recruit_numbers__card p_recruit_numbers__card--w340_h191">
						<h4 class="p_recruit_numbers__card_title"><span class="p_recruit_numbers__card_dot"></span>年間有給取得率</h4>
						<div class="p_recruit_numbers__card_body">
							<span class="p_recruit_numbers__card_num">00</span>
							<span class="p_recruit_numbers__card_unit">%</span>
						</div>
						<p class="p_recruit_numbers__card_sub">（2025年実績）</p>
					</div>

					<!-- Card 13: 平均残業時間 -->
					<div class="p_recruit_numbers__card p_recruit_numbers__card--w340_h191">
						<h4 class="p_recruit_numbers__card_title"><span class="p_recruit_numbers__card_dot"></span>平均残業時間</h4>
						<div class="p_recruit_numbers__card_body">
							<span class="p_recruit_numbers__card_num">000</span>
							<span class="p_recruit_numbers__card_unit">日</span>
						</div>
						<p class="p_recruit_numbers__card_sub">（2025年実績）</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 4: Banner Image -->
	<section class="p_recruit_banner">
		<div class="p_recruit_banner__image">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/recruit_banner_1.jpg" alt="採用情報 イメージ画像" />
		</div>
	</section>

	<!-- Section 5: Work Point (働きやすさポイント) -->
	<section id="work_point" class="p_recruit_point common_sec">
		<div class="inner w-md">
			<header class="p_recruit_point__header">
				<h2 class="p_recruit_point__header_en">Work Point</h2>
				<p class="p_recruit_point__header_sub">
					<svg class="p_recruit_point__header_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M16,0h4L4,20H0Z" fill="#e54300" />
					</svg>
					働きやすさポイント
				</p>
			</header>

			<div class="p_recruit_point__body">
				<div class="p_recruit_point__card">
					<!-- Point 1 -->
					<div class="p_recruit_point__item">
						<h3 class="p_recruit_point__item_title">
							<span class="p_recruit_point__item_dot"></span>
							転居を伴う転勤は100％なし！
						</h3>
						<p class="p_recruit_point__item_text">
							勤務地は本社、または関西近郊の工事現場のみに限定されています。転居を伴う転勤や、突発的な遠方への長期出張などは一切ありません。そのため、結婚や子育て、マイホームの購入、将来的な親の介護など、これからの人生でライフステージがどのように変化していっても、住み慣れた家から安心して長く通い続けることができます。
						</p>
					</div>

					<!-- Point 2 -->
					<div class="p_recruit_point__item">
						<h3 class="p_recruit_point__item_title">
							<span class="p_recruit_point__item_dot"></span>
							『ゼロ』からプロに育てる資格取得支援制度
						</h3>
						<p class="p_recruit_point__item_text">
							社員のスキルアップを全力で応援しています。「施工管理技士」や「各種技能検定」など、業務に必要な国家資格・免許の取得にかかる費用（受験料、講習受講料、交通費など）は、会社が全額負担します！試験前には、社内の有資格者による勉強会や、外部講習への参加を勤務時間内に実施。独学ではなく、会社全体であなたの合格をバックアップするので、未経験スタートの先輩たちも一発合格を果たしています。
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 6: Movie (recruit動画) -->
	<section id="movie" class="p_recruit_movie common_sec">
		<div class="inner w-md">
			<div class="p_recruit_movie__head_wrap">
				<header class="p_recruit_movie__header">
					<h2 class="p_recruit_movie__header_en">Movie</h2>
					<p class="p_recruit_movie__header_sub">
						<svg class="p_recruit_movie__header_icon" xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 20 20">
							<path d="M16,0h4L4,20H0Z" fill="#e54300" />
						</svg>
						recruit動画
					</p>
				</header>

				<p class="p_recruit_movie__lead">
					日々誇りを持って働く、<br />
					寝屋川シールの社員たち。次は、あなたの番です。
				</p>
			</div>

			<div class="p_recruit_movie__body">
				<div class="p_recruit_movie__card">
					<div class="p_recruit_movie__player">
						<!-- YouTube埋め込み前プレースホルダー -->
						<div class="p_recruit_movie__cover">
							<span class="p_recruit_movie__play_btn">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
									<path
										d="M50,0a50,50,0,1,0,50,50A50,50,0,0,0,50,0M74.736,52.034l-34.642,20A2.355,2.355,0,0,1,36.562,70v-40a2.355,2.355,0,0,1,3.532-2.039l34.642,20a2.355,2.355,0,0,1,0,4.078"
										fill="#e54300" />
								</svg>
							</span>
						</div>
						<!-- YouTube動画埋め込み用エリア (YouTubeの埋め込みコードに差し替え可能) -->
						<!-- <iframe src="https://www.youtube.com/embed/XXXXXX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 7: Job Description (募集要項) -->
	<section id="job_description" class="p_recruit_job common_sec">
		<div class="inner w-md">
			<header class="p_recruit_job__header">
				<h2 class="p_recruit_job__header_en">Job Description</h2>
				<p class="p_recruit_job__header_sub">
					<svg class="p_recruit_job__header_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M16,0h4L4,20H0Z" fill="#e54300" />
					</svg>
					募集要項
				</p>
			</header>

			<div class="p_recruit_job__body">
				<dl class="p_recruit_job__list">
					<!-- Row 1 -->
					<div class="p_recruit_job__row">
						<dt class="p_recruit_job__label">職種</dt>
						<dd class="p_recruit_job__value">施工管理職</dd>
					</div>

					<!-- Row 2 -->
					<div class="p_recruit_job__row">
						<dt class="p_recruit_job__label">雇用形態</dt>
						<dd class="p_recruit_job__value">正社員<small>※試用期間6カ月（待遇に変更なし）</small></dd>
					</div>

					<!-- Row 3 -->
					<div class="p_recruit_job__row">
						<dt class="p_recruit_job__label">基本給</dt>
						<dd class="p_recruit_job__value">
							新　　卒：270,000円<br />
							中途採用：270,000円〜
						</dd>
					</div>

					<!-- Row 4 -->
					<div class="p_recruit_job__row">
						<dt class="p_recruit_job__label">諸手当</dt>
						<dd class="p_recruit_job__value">役職手当、通勤手当、残業手当、資格手当、家族手当</dd>
					</div>

					<!-- Row 5 -->
					<div class="p_recruit_job__row">
						<dt class="p_recruit_job__label">昇給</dt>
						<dd class="p_recruit_job__value">年1回（◯月）</dd>
					</div>

					<!-- Row 6 -->
					<div class="p_recruit_job__row">
						<dt class="p_recruit_job__label">賞与</dt>
						<dd class="p_recruit_job__value">年2回（7月/12月）</dd>
					</div>

					<!-- Row 7 -->
					<div class="p_recruit_job__row">
						<dt class="p_recruit_job__label">休日</dt>
						<dd class="p_recruit_job__value p_recruit_job__value--holiday">
							完全週休2日制（土日）、年間休日120日以上、年次有給休暇（時間単位での取得も可）、祝祭日、夏季休暇、冬季休暇、ゴールデンウイーク休暇、有給休暇、慶弔休暇、介護休暇、特別休暇（出張休暇、結婚休暇、育児出産休暇など）ほか<br />
							<span class="p_recruit_job__note">※2026年度年間休日休暇130日</span>
						</dd>
					</div>

					<!-- Row 8 -->
					<div class="p_recruit_job__row">
						<dt class="p_recruit_job__label">事業内容</dt>
						<dd class="p_recruit_job__value">
							マンション、ビル 新築建築工事<br />
							シーリング工事／防水工事／塗装工事<br />
							マンション、ビル 大規模修繕工事<br />
							調査診断／下地・タイル補修工事／シーリング工事／外壁塗装工事／防水工事／鉄部塗装工事／構造物補強工事
						</dd>
					</div>

					<!-- Row 9 -->
					<div class="p_recruit_job__row">
						<dt class="p_recruit_job__label">福利厚生</dt>
						<dd class="p_recruit_job__value">
							各種社会保険完備、財形貯蓄制度、交通費支給（規定あり）、退職金制度、制服・PC・携帯貸与、慶弔見舞金、社員旅行・レクリエーション費用会社負担、永年勤続表彰、自社宿泊施設1981年5月
							21日（株式会社改組1987年4月)</dd>
					</div>

					<!-- Row 10 -->
					<div class="p_recruit_job__row">
						<dt class="p_recruit_job__label">就業時間</dt>
						<dd class="p_recruit_job__value">8:00 ～ 17:00（休憩1時間）フレックス勤務制度あり</dd>
					</div>

					<!-- Row 11 -->
					<div class="p_recruit_job__row">
						<dt class="p_recruit_job__label">勤務地</dt>
						<dd class="p_recruit_job__value">本社</dd>
					</div>
				</dl>
			</div>
		</div>
	</section>

	<!-- Section 8: Entry (採用エントリー) -->
	<section id="entry" class="p_recruit_entry common_sec">
		<div class="inner w-md">
			<header class="p_recruit_entry__header">
				<h2 class="p_recruit_entry__header_en">Entry</h2>
				<p class="p_recruit_entry__header_sub">
					<svg class="p_recruit_entry__header_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M16,0h4L4,20H0Z" fill="#e54300" />
					</svg>
					採用エントリー
				</p>
			</header>

			<div class="p_recruit_entry__body">
				<div class="p_recruit_entry__card">
					<p class="p_recruit_entry__lead">電話もしくはお問い合わせフォームよりお申し込みください。</p>

					<div class="p_recruit_entry__grid">
						<!-- 左: お電話でお問い合わせ -->
						<div class="p_recruit_entry__col p_recruit_entry__col--tel">
							<h3 class="p_recruit_entry__col_title">お電話でのお問い合わせ</h3>
							<a href="tel:0728263488" class="p_recruit_entry__tel"> <span
									class="p_recruit_entry__tel_prefix">tel.</span>072-826-3488 </a>
						</div>

						<!-- 中央区切り線 -->
						<div class="p_recruit_entry__divider"></div>

						<!-- 右: WEBでお問い合わせ -->
						<div class="p_recruit_entry__col p_recruit_entry__col--web">
							<h3 class="p_recruit_entry__col_title">WEBでのお問い合わせ</h3>
							<a href="<?php echo esc_url(home_url('/contact')); ?>"
								class="c_btn c_btn--red p_recruit_entry__btn">
								<span class="c_btn__text">お問い合わせフォーム</span>
								<span class="c_btn__line"></span>
								<span class="c_btn__dot"></span>
								<span class="c_btn__circle"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer();