<?php
/**
 * The front page template file
 *
 * @package neyagawaseal
 */

get_header();
?>

<main id="primary" class="site-main">
	<!-- カンプ再現ガイド用ボックス（検証後にコメントアウト） -->
	<!-- <div class="guidebox"></div> -->

	<!-- Section 1: Hero Visual & Statement (Total height: 2117px parallax area) -->
	<section class="p_hero">
		<!-- Parallax Background Elements -->

		<div class="p_hero__bg"></div>
		<div class="p_hero__overlay"></div>

		<!-- Part 1: First View (height: 100vh) -->
		<div class="p_hero__fv">
			<div class="p_hero__fv_inner">
				<!-- Backdrop Typography "Our pride" -->
				<div class="p_hero__backdrop">Our pride</div>

				<!-- Calligraphy Hand-written Logo -->
				<div class="p_hero__logo_wrap">
					<svg viewBox="0 0 569.362 204.589" class="p_hero__logo">
						<path
							d="M65.11,1.008l-7.148,40.54H47.953l-2.2,12.457c-.343,1.943.276,2.519,1.907,2.664H54c2.736,0,3.325-.072,4.329-2.089.428-.792,1.88-4.536,2.236-5.328a18.578,18.578,0,0,0,7.324,3.385c-4.32,11.016-7.776,11.016-12.6,11.016-12.673,0-13.753,0-15.846-.792-2.546-1.08-3.211-3.024-2.428-7.056l2.513-14.257H31.536C29.979,46.3,27.649,52.564,19.6,58.181c-5.412,3.744-12.976,5.4-16.522,5.9A20.533,20.533,0,0,0,0,56.236c15.557-1.656,20.274-7.992,22.968-14.688H14.111l7.148-40.54ZM28.923,7.776l-.8,4.536h25.85l.8-4.536ZM27.044,18.434l-.851,4.824h25.85l.85-4.824ZM25.063,29.666l-.9,5.113h25.85l.9-5.113Z"
							fill="#fff" />
						<path
							d="M132.467,20.809a109.889,109.889,0,0,0-11.312,8.21c-1.922,1.51-4.523,3.6-9.508,7.775a12.892,12.892,0,0,1,4.282-1.008c5.617,0,5.131,4.394,4.585,11.161-.579,6.552-.333,7.2,6.435,7.2a59.265,59.265,0,0,0,11.364-1.153l-1.291,9.362c-3.807.36-6.281.5-8.153.5-17.93,0-17.816-4.321-17.185-11.161.443-3.744.989-8.065-2.035-8.065-1.3,0-4.4.433-10.478,5.112a222.66,222.66,0,0,0-16.814,14.9L77,56.885c8.056-6.481,11.782-9.649,18.825-15.7,3.134-2.665,17.017-14.833,19.9-17.282a121.212,121.212,0,0,1-23.829,3.24l1.358-8.929c11.4.289,23.156-.649,34.787-4.537Zm-6.854-9.72a83.811,83.811,0,0,1-24.36-2.737L104.764.288A80.366,80.366,0,0,0,127.958,3.1Z"
							fill="#fff" />
						<path
							d="M187.976,2.448c-1.4,2.664-3.057,5.9-4.438,8.424,2.983-.576,5.9-1.224,8.9-1.872l-1.02,8.641c-4.1.792-8.391,1.439-12.224,1.944-5.9,11.017-12.708,23.474-22.824,37.155l-7.045-4.968A206.9,206.9,0,0,0,169.55,20.377a33.422,33.422,0,0,1-3.927.216q-2.808,0-6.011-.216l1.656-8.569a41.733,41.733,0,0,0,6.823.5c2.017,0,4.059-.144,5.739-.288C175.7,8.352,177.336,4.392,179.191,0Zm16.942,21.529a42.34,42.34,0,0,0-2.078,7.7c-.534,3.024-1.279,8.064-1.642,12.169a93.983,93.983,0,0,1,13.864,7.129l-6.445,8.784a111.5,111.5,0,0,0-9.129-6.624,11.472,11.472,0,0,1-6.679,8.064,22.555,22.555,0,0,1-9.33,1.872c-8.642,0-15.029-4.608-13.823-11.449.393-2.231,3.294-10.512,17.19-10.512a39.234,39.234,0,0,1,5.757.432c.267-1.513.994-8.5,1.248-9.937.369-2.088.885-4.609,1.782-8.065ZM183.969,55.8c6.192,0,6.739-3.1,7.419-6.553a20.826,20.826,0,0,0-6.649-1.08c-4.177,0-6.451,1.872-6.756,3.6-.559,3.168,3.25,4.032,5.986,4.032m31.365-30.459a107.783,107.783,0,0,0-21.006-7.057L197.9,10.3a103.272,103.272,0,0,1,22.365,6.7Z"
							fill="#fff" />
						<path
							d="M251.172,8.28a73.594,73.594,0,0,0-3.912,8.713,85.479,85.479,0,0,0-3.942,14.186c-1.244,7.056-.836,15.769.963,15.769,1.513,0,4.82-6.913,5.752-8.928a18.426,18.426,0,0,0,6.1,5.832c-7.745,15.337-13.027,15.481-13.891,15.481-5.041,0-10.963-10.513-7.535-29.955A117.5,117.5,0,0,1,241.68,5.761ZM281.288,9c7.066,12.6,8.479,25.418,8.557,37.227l-10.022,2.52a95.841,95.841,0,0,0-1.2-18.937A62.141,62.141,0,0,0,273.1,12.529Z"
							fill="#fff" />
						<path
							d="M338.416.647c-1.875,7.777-2.951,13.466-3.116,14.4a59.236,59.236,0,0,0-.875,9.866c5.887-1.945,7.547-2.376,23.176-6.481l1.29,9.433C344.727,30.6,327.726,33.915,318.358,40.9c-1.077.792-3.736,2.809-4.256,5.761C312.806,54,326.632,54,331.744,54a183.277,183.277,0,0,0,22.72-1.44L353.232,62A169.664,169.664,0,0,1,334.981,63c-6.984,0-16.989-.431-22.737-2.952-7.015-3.095-8-8.928-7.33-12.745,1.892-10.728,14.462-16.273,20.887-19.225-.733-7.273-.492-8.641,2.8-27.29Z"
							fill="#fff" />
						<path
							d="M384.025,38.02c-2.114,2.591-3.986,5.039-4.341,7.056-.546,3.1,3.177,4.033,6.689,4.535a107.8,107.8,0,0,0,12.233.866,141.509,141.509,0,0,0,21.965-1.657l-.744,9.937a170.633,170.633,0,0,1-20.987,1.008c-7.273,0-31.018-.505-28.8-13.1.546-3.1,2.494-7.2,6.923-12.314ZM420.868,16.92a153.875,153.875,0,0,1-19.336,1.44c-9.576,0-14.236-.935-20.2-2.664l3.743-8.569a59.8,59.8,0,0,0,16.6,2.231,184.657,184.657,0,0,0,19.864-1.584Z"
							fill="#fff" />
						<path
							d="M489.052,8.352c-5.388,3.6-21.685,15.985-23.666,17.426a46.145,46.145,0,0,1,10.681-1.368c14.906,0,18.512,9.36,17.153,17.065-1.32,7.488-6.813,13.321-13.146,16.562-9.562,4.824-22.4,4.967-29.1,4.967a19.42,19.42,0,0,0-1.022-9.72,76.763,76.763,0,0,0,8.839.5c16.633,0,23.7-6.985,24.7-12.673,1.041-5.905-4.652-9.145-11.781-9.145-14.473,0-24.608,9.289-30.808,15.049l-4.8-7.488c16.289-11.522,33.784-26.21,36.749-28.731a129.84,129.84,0,0,1-22.36,2.664l1.252-9.144c1.847.143,3.576.143,4.943.143,6.193,0,23.643-1.368,28.192-3.887Z"
							fill="#fff" />
						<path
							d="M530.4,5.761c-5.009,12.888-8.209,22.466-10.228,33.914a121.156,121.156,0,0,0-1.721,20.378l-9.4,1.872a112.806,112.806,0,0,1,1.84-21.457,206.278,206.278,0,0,1,10.63-37.012Zm6.379,34.058c-1.231,6.985-.837,9.649,15.437,9.649A60.73,60.73,0,0,0,565.5,48.46l-1.308,9.865a56.611,56.611,0,0,1-8.611.648c-18.866,0-31.391-1.657-27.3-19.154ZM567.271,18c-4.295-.144-6.959-.144-9.552-.144-7.057,0-11.643.289-22.774,2.161l.634-8.5c5.811-1.512,15.507-2.592,26.883-2.592,1.873,0,4.105,0,6.9.072Z"
							fill="#fff" />
						<path
							d="M46.38,157.569h8.568l-1.358,7.705H45.021l-.634,3.6a69.779,69.779,0,0,0,8.362,6.481c-1.749,2.16-3.621,4.608-5.506,7.129-1.368-1.224-3.012-2.521-4.57-3.889l-4.444,25.2H30.236l3.758-21.313a93.7,93.7,0,0,1-9.558,10.512,23.812,23.812,0,0,0-3.724-8.28c5.7-4.969,10.108-9.144,16.316-19.441h-10.3l1.359-7.705h10.3l1.295-7.345c-2.367.36-5.192.864-7.933,1.3a29.478,29.478,0,0,0-2.365-7.416,110.848,110.848,0,0,0,26.24-5.473l2.724,7.417c-3.371,1.152-7.039,1.944-10.419,2.736Zm-3.108,34.779,5.921-.5c5.149-11.233,9.934-23.259,12.284-29.235,1.677-4.609,3.793-10.08,8.332-21.53l9.044,1.8c-5.293,12.457-12.436,28.875-13.529,31.4-1.668,3.745-3.776,8.353-7.351,16.777,10.462-.935,13.347-1.367,15.871-1.8A142.783,142.783,0,0,0,70.233,174.2l8.226-2.952c2.6,8.137,4.089,13.969,6.815,28.731l-8.891,3.456c-.241-2.3-.674-4.753-1.072-6.985-6.9,1.152-10.746,1.728-14.664,2.3-4.435.649-8.929,1.225-17.28,2.448Z"
							fill="#fff" />
						<path
							d="M137.027,142.879c-1.338,3.1-3.027,6.553-4.213,8.785,4.363-.648,5.337-.864,14.333-2.881l-.851,8.5c-3.476.937-5.87,1.441-17.682,3.1-11.531,22.106-13.035,24.914-24.256,42.411l-7.592-4.32a335.1,335.1,0,0,0,22.321-37.155c-1.812.072-3.553.144-5.353.144-1.872,0-3.66-.072-5.52-.144l1.707-8.857a53.635,53.635,0,0,0,7.832.5c1.727,0,3.54-.072,5.209-.143,1.727-3.673,3.654-8.066,5.424-12.386Zm-5.323,40.4c-.2.72-.372,1.3-.461,1.8-.571,3.241.268,5.832,5.059,6.84a77.384,77.384,0,0,0,10.576.864,100.386,100.386,0,0,0,13.655-1.08l-1.375,9.433a108.493,108.493,0,0,1-12.427.648c-24.626,0-25.331-7.848-23.35-19.082Zm29.724-13.393c-3.934-.145-6.526-.145-8.543-.145a117.2,117.2,0,0,0-19.971,1.369l.33-7.993a130.072,130.072,0,0,1,22.461-2.016c2.16,0,4.74.072,7.594.216Z"
							fill="#fff" />
						<path
							d="M210.04,141.223c-1.588,2.881-2.985,5.9-4.234,8.5A157.123,157.123,0,0,0,227,145.9l-1.24,9.073c-6.9,1.943-17.252,3.1-24.278,3.744-1.829,4.248-3.413,7.921-5.784,14.833,8.873-4.177,15.594-5.545,21-5.545,7.632,0,10.351,1.729,12.308,4.1,2.279,2.592,3.339,5.976,2.463,10.945-2.362,13.393-15.233,16.561-19.3,17.569a100.734,100.734,0,0,1-26.078,2.521,17.255,17.255,0,0,0-.523-9.289c3.13.216,5.493.288,7.366.288,6.409,0,17.255-1.08,22.647-3.889,3.4-1.727,6.289-5.04,6.823-8.064.152-.865,1.032-6.265-7.248-6.265-9.721,0-18.1,3.816-25.324,10.081l-5.346-4.392c2.54-8.281,3.158-10.153,7.935-22.539-4.177,0-8.641,0-12.322-.359l2.01-9.361a108.249,108.249,0,0,0,13.889.864c1.241-2.952,2.985-7.129,4.535-11.017Z"
							fill="#fff" />
						<path
							d="M273.605,193.14c20.018-2.449,25.866-13.97,27.2-21.531.774-4.392.062-8.928-1.76-11.665-2.174-3.6-6.21-5.616-11.89-6.48-10.5,29.738-23.5,42.628-30.63,42.628-7.777,0-10.032-11.3-8.483-20.09,2.844-16.13,17.98-30.1,37.854-30.1,18.938,0,27.16,10.946,24.494,26.067-1.257,7.129-4.771,16.849-17.261,23.977-3.752,2.089-8.513,4.177-17.123,6.049a22.727,22.727,0,0,0-2.4-8.856m-11.342-29.6A25.287,25.287,0,0,0,257,174.994c-.787,4.464-.2,10.945,2.534,10.945,2.232,0,4.316-3.241,4.972-4.1a120.393,120.393,0,0,0,13.614-27.794,27.854,27.854,0,0,0-15.861,9.505"
							fill="#fff" />
						<path
							d="M325.63,157.784l1.155-6.552h25.2l-1.156,6.552Zm7.91,44.573.369-2.089h-5.761l-.6,3.384h-7.345l4.279-24.265h20.738l-4.05,22.97Zm-7.641-26.5,1.092-6.194h19.586l-1.092,6.194Zm1.672-9.074,1.079-6.12h19.514l-.406,2.3c8.555-4.824,10.439-7.345,12.6-10.225h-8.568l1.346-7.633H365.02a39.129,39.129,0,0,0,2.413-6.336l8.874.72a54.149,54.149,0,0,1-2.358,5.616H392.6l-1.261,7.561h-10.3c2.445,5.328,7,8.5,10.9,10.873a26.61,26.61,0,0,0-6.725,6.7c-1.287-.864-3.275-2.664-5.333-4.464l-.572,3.241H356.341l.444-2.521a58.9,58.9,0,0,1-5.493,3.385,37.98,37.98,0,0,0-3.534-6.913l-.673,3.816Zm3.251-18.433,1.206-6.841h19.441l-1.206,6.841Zm5.537,38.019H330.6l-1.269,7.2h5.76Zm24.756-7.272c-.432,1.223-1.3,2.88-1.817,4.176h22.611c-1.495,6.84-3.717,15.769-6.25,18.29-2.35,2.3-5.785,2.591-12.63,3.024a30.446,30.446,0,0,0-1.25-7.2h5.328c2.16,0,2.3,0,2.91-1.8a49,49,0,0,0,1.723-5.688H356.258l-1.227,2.879-8.188-2.16c3.231-6.48,3.659-7.272,5.631-11.52h-4.968l1.194-6.769h39.027l-1.193,6.769Zm11.141-26.427h-2.377c-3.7,5.04-5.094,6.841-7.881,9.577h15.193a29.131,29.131,0,0,1-4.935-9.577"
							fill="#fff" />
						<path
							d="M423.05,145.111c-2.252,4.608-7.82,15.77-9.75,26.714-.3,1.728-.106,2.232.4,2.232.361,0,.593-.5.788-.792.428-.792.969-2.232,2.071-4.392a13.835,13.835,0,0,0,6.091,3.024c-3.722,8.857-7.805,15.266-12.7,15.266-3.744,0-6.85-4.032-4.437-17.714a74.015,74.015,0,0,1,2.7-10.8c.323-1.008,2.834-8.713,5.924-15.625Zm27.473-2.664c-1.743,12.745-1.985,14.113-3.153,20.737-3.58,20.306-8.606,34.923-35.993,39.964a21.081,21.081,0,0,0-1.95-9.361c17.7-1.584,24.617-7.7,28.3-28.586a218.761,218.761,0,0,0,2.538-21.746Z"
							fill="#fff" />
						<path
							d="M503.522,142.807c-1.678,2.16-3.536,4.537-5.187,6.553,8.254-1.08,10.478-1.44,16.061-2.88l-1.261,8.785c-9.459,1.367-12.1,1.655-21.505,2.3-1.444,1.656-3.1,3.672-4.468,5.328a14.08,14.08,0,0,1,5.16-1.08c7.7,0,7.942,5.184,8.073,7.705,4.372-1.513,18.493-6.049,19.878-6.553l1.162,8.929a208.141,208.141,0,0,0-22.008,5.976l-1.726,9.793h-9c.39-1.8.834-4.32,1.24-6.625-5.845,2.521-10.617,4.681-11.177,7.849C477.861,194,487.509,194,492.55,194a109.655,109.655,0,0,0,19.192-1.44l-1.553,9.217a143.323,143.323,0,0,1-15.706.864c-5.4,0-16.058,0-21.488-4.32a8.473,8.473,0,0,1-3.182-8.5c1.535-8.713,12.67-13.465,21.6-17.138.354-2.016-.167-3.96-2.759-3.96-3.6,0-7.832,1.944-11.012,4.464-1.936,1.585-10.012,9-11.634,10.441l-5.206-6.409a114.324,114.324,0,0,0,20.947-19.153c-2.763.144-4.2.144-6.362.144a42.844,42.844,0,0,1-4.629-.288l1.5-8.5c6.248.5,7.819.576,10.555.576,1.3,0,2.952,0,5.282-.144a110.934,110.934,0,0,0,6.56-10.657Z"
							fill="#fff" />
						<path
							d="M537.212,204.085c-5.761,0-9.044-4.248-8.092-9.649a11.936,11.936,0,0,1,11.52-9.793c4.681,0,8.892,3.889,7.85,9.793a11.5,11.5,0,0,1-11.278,9.649m.914-5.184a5.608,5.608,0,0,0,5.18-4.465c.571-3.24-1.89-4.392-3.678-4.465a5.336,5.336,0,0,0-5.153,4.322c-.724,4.1,3.147,4.608,3.651,4.608"
							fill="#fff" />
					</svg>
				</div>

				<!-- Scroll Indicator -->
				<div class="p_hero__scroll">
					<span class="p_hero__scroll_text">scroll</span>
					<div class="p_hero__scroll_line"></div>
				</div>
			</div>
		</div>

		<!-- Part 2: Statement Block (height: 1317px, overlaps on scroll) -->
		<div class="p_hero__statement">
			<div class="animated-line"></div>
			<div class="inner w-md">
				<div class="p_hero__statement_grid">
					<!-- Left: Sub title -->
					<div class="p_hero__statement_left">
						<span class="p_hero__statement_en">Statement</span>
					</div>

					<!-- Right: Main Copy and Detailed Texts -->
					<div class="p_hero__statement_right">
						<h2 class="p_hero__statement_title">
							美しさは、<br />
							見えないところから<br />
							つくられる。
						</h2>

						<p class="p_hero__statement_text">私たちは、目に見える仕上がりだけでなく、<br class="pc" />その先にある品質を大切にしています。<br
								class="pc" />完成すれば見えなくなる部分だからこそ、<br class="pc" />一切の妥協を許さない。</p>

						<p class="p_hero__statement_text">細部まで丁寧に、美しく、<br class="pc" />そして確実に仕上げることが、<br
								class="pc" />お客様の安心と信頼につながると<br class="pc" />考えています。</p>

						<p class="p_hero__statement_text">一つひとつの工程に責任を持ち、<br class="pc" />誠実に向き合う。</p>

						<p class="p_hero__statement_text">その積み重ねこそが、私たちの技術であり、<br class="pc" />誇りです。<br
								class="pc" />見えないところまで、美しく、確実に。</p>

						<p class="p_hero__statement_text">変わらない信念を胸に、<br class="pc" />これからも品質にこだわり続けます。</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 2: Service (Split content layout) -->
	<section class="p_service common_sec">
		<div class="inner w-md">
			<!-- Header inside Section -->
			<div class="p_service__header">
				<h2 class="p_service__title">
					<p class="p_service__title_en">Service</p>
					<p class="p_service__title_jp">
						<svg class="p_service__title_slash" viewBox="0 0 20 20">
							<path d="M16,0h4L4,20H0Z" fill="#e54300" />
						</svg>
						サービス
					</p>
				</h2>
				<p class="p_service__lead">
					私たちが大切にしているのは、<br class="pc" />建物一つひとつに最適な施工を提供すること。<br class="pc" />
					現場ごとに求められる課題に柔軟に対応できる<br class="pc" />フレキシブルな対応力が強みです。
				</p>
			</div>

			<!-- Grid body splits into left items list and right tab image -->
			<div class="p_service__body">
				<!-- Left list items -->
				<div class="p_service__list">
					<div class="p_service__item" data-index="0">
						<span class="p_service__item_num">01</span>
						<h3 class="p_service__item_name">大規模修繕工事</h3>
					</div>

					<div class="p_service__item" data-index="1">
						<span class="p_service__item_num">02</span>
						<h3 class="p_service__item_name">防水工事</h3>
					</div>

					<div class="p_service__item" data-index="2">
						<span class="p_service__item_num">03</span>
						<h3 class="p_service__item_name">シーリング工事</h3>
					</div>

					<div class="p_service__item" data-index="3">
						<span class="p_service__item_num">04</span>
						<h3 class="p_service__item_name">外壁タイル剥離防止工事</h3>
					</div>
				</div>

				<!-- Right tab images -->
				<div class="p_service__images">
					<div class="p_service__image_wrap is-active" data-index="0">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_service_1.jpg"
							alt="大規模修繕工事" />
					</div>

					<div class="p_service__image_wrap" data-index="1">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_service_2.jpg" alt="防水工事" />
					</div>

					<div class="p_service__image_wrap" data-index="2">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_service_3.jpg"
							alt="シーリング工事" />
					</div>

					<div class="p_service__image_wrap" data-index="3">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_service_4.jpg"
							alt="外壁タイル剥離防止工事" />
					</div>
				</div>
			</div>

			<!-- Lower view more button link -->
			<div class="p_service__footer">
				<a href="<?php echo esc_url(home_url('/service/')); ?>" class="c_btn c_btn--black">
					<span class="c_btn__text">VIEW MORE</span>
					<span class="c_btn__line"></span>
					<span class="c_btn__dot"></span>
					<span class="c_btn__circle"></span>
				</a>
			</div>
		</div>
	</section>

	<!-- Section 3: Philosophy & Vision -->
	<section class="p_philosophy common_sec">
		<div class="inner w-md">
			<div class="p_philosophy__grid">
				<!-- Left column: Titles & Lead & Button -->
				<div class="p_philosophy__content">
					<h2 class="p_philosophy__title">
						<span class="p_philosophy__title_en">Philosophy<br />& Vision</span>
						<span class="p_philosophy__title_jp">
							<svg class="p_philosophy__title_slash" viewBox="0 0 20 20">
								<path d="M16,0h4L4,20H0Z" fill="#e54300" />
							</svg>
							企業理念
						</span>
					</h2>

					<p class="p_philosophy__lead">
						私たちは何を大切にし、どのような課題に挑み、<br class="pc" />どんな未来を創ろうとしているのか。<br class="pc" />
						寝屋川シールの想いをお伝えします。
					</p>

					<div class="p_philosophy__footer">
						<a href="<?php echo esc_url(home_url('/philosophy/')); ?>" class="c_btn c_btn--black">
							<span class="c_btn__text">VIEW MORE</span>
							<span class="c_btn__line"></span>
							<span class="c_btn__dot"></span>
							<span class="c_btn__circle"></span>
						</a>
					</div>
				</div>

				<!-- Right column: The Gradient Triangle & Core Values -->
				<div class="p_philosophy__visual">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home_philosophy_1.svg"
						alt="企業理念：お客様のその先の社会をもっと豊かに。徹底したお客様ファースト。Make it fun. 真のプロフェッショナル。一歩先の視点を持つこと。"
						class="p_philosophy__visual_img" />
				</div>
			</div>
		</div>
	</section>

	<!-- Section 4: Sustainability (Rounded banner visual block) -->
	<section class="p_sustainability common_sec">
		<div class="inner w-lg">
			<div class="p_sustainability__banner">
				<div class="p_sustainability__banner_bg"></div>
				<!-- Background overlays inside CSS -->
				<div class="p_sustainability__content">
					<h2 class="p_sustainability__title">
						<span class="p_sustainability__title_en">Sustainability</span>
						<span class="p_sustainability__title_jp">
							<svg class="p_sustainability__title_slash" viewBox="0 0 20 20">
								<path d="M16,0h4L4,20H0Z" fill="#e54300" />
							</svg>
							サスティナビリティ
						</span>
					</h2>

					<p class="p_sustainability__lead">
						お客さまの成功と、未来の豊かさを。<br class="pc" />
						私たちは、ビジネスの成長とサステナビリティの両立を実現する<br class="pc" />
						パートナーとして、一歩先の価値を創造し続けます。
					</p>

					<div class="p_sustainability__footer">
						<a href="<?php echo esc_url(home_url('/sustainability/')); ?>" class="c_btn c_btn--white">
							<span class="c_btn__text">VIEW MORE</span>
							<span class="c_btn__line"></span>
							<span class="c_btn__dot"></span>
							<span class="c_btn__circle"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 4.5: Works (Infinite looping marquees split layout) -->
	<section class="p_works common_sec">
		<div class="inner w-md">
			<div class="p_works__grid">
				<!-- Left column: Up & Down scrolling images -->
				<div class="p_works__visual">
					<!-- Left column: scrolls bottom-to-top (Up) -->
					<div class="p_works__col p_works__col--left">
						<div class="p_works__marquee p_works__marquee--up">
							<!-- Loop set 1 -->
							<div class="p_works__marquee_set">
								<div class="p_works__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_works_1.jpg"
										alt="施工実績" />
								</div>
								<div class="p_works__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_works_2.jpg"
										alt="施工実績" />
								</div>
								<div class="p_works__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_works_3.jpg"
										alt="施工実績" />
								</div>
							</div>
							<!-- Loop set 2 (Repeated for seamless continuity) -->
							<div class="p_works__marquee_set" aria-hidden="true">
								<div class="p_works__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_works_1.jpg"
										alt="施工実績" />
								</div>
								<div class="p_works__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_works_2.jpg"
										alt="施工実績" />
								</div>
								<div class="p_works__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_works_3.jpg"
										alt="施工実績" />
								</div>
							</div>
						</div>
					</div>

					<!-- Right column: scrolls top-to-bottom (Down) -->
					<div class="p_works__col p_works__col--right">
						<div class="p_works__marquee p_works__marquee--down">
							<!-- Loop set 1 -->
							<div class="p_works__marquee_set">
								<div class="p_works__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_works_4.jpg"
										alt="施工実績" />
								</div>
								<div class="p_works__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_works_5.jpg"
										alt="施工実績" />
								</div>
								<div class="p_works__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_works_6.jpg"
										alt="施工実績" />
								</div>
								<div class="p_works__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_works_7.jpg"
										alt="施工実績" />
								</div>
							</div>
							<!-- Loop set 2 (Repeated for seamless continuity) -->
							<div class="p_works__marquee_set" aria-hidden="true">
								<div class="p_works__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_works_4.jpg"
										alt="施工実績" />
								</div>
								<div class="p_works__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_works_5.jpg"
										alt="施工実績" />
								</div>
								<div class="p_works__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_works_6.jpg"
										alt="施工実績" />
								</div>
								<div class="p_works__img">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_works_7.jpg"
										alt="施工実績" />
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Right column: Section titles & description & button -->
				<div class="p_works__content">
					<h2 class="p_works__title">
						<span class="p_works__title_en">Our<br />Project</span>
						<span class="p_works__title_jp">
							<svg class="p_works__title_slash" viewBox="0 0 20 20">
								<path d="M16,0h4L4,20H0Z" fill="#e54300" />
							</svg>
							施工実績
						</span>
					</h2>

					<p class="p_works__lead">
						私たちが手がけた一つひとつの実績の先には、<br class="pc" />
						そこでサステナブルに暮らす人々、<br class="pc" />
						生き生きと働く人々の笑顔があります。
					</p>

					<div class="p_works__footer">
						<a href="<?php echo esc_url(home_url('/works/')); ?>" class="c_btn c_btn--black-white">
							<span class="c_btn__text">VIEW MORE</span>
							<span class="c_btn__line"></span>
							<span class="c_btn__dot"></span>
							<span class="c_btn__circle"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 5: News (Splitted text list) -->
	<section class="p_news common_sec">
		<div class="inner w-md">
			<div class="p_news__grid">
				<!-- Left column: Section Title & Button -->
				<div class="p_news__content">
					<h2 class="p_news__title">
						<span class="p_news__title_en">News</span>
						<span class="p_news__title_jp">
							<svg class="p_news__title_slash" viewBox="0 0 20 20">
								<path d="M16,0h4L4,20H0Z" fill="#e54300" />
							</svg>
							ニュース
						</span>
					</h2>

					<div class="p_news__footer">
						<a href="<?php echo esc_url(home_url('/news/')); ?>" class="c_btn c_btn--black">
							<span class="c_btn__text">VIEW MORE</span>
							<span class="c_btn__line"></span>
							<span class="c_btn__dot"></span>
							<span class="c_btn__circle"></span>
						</a>
					</div>
				</div>

				<!-- Right column: News Articles list (Easy migration structure) -->
				<div class="p_news__list">
					<?php /* Loop dummy articles for seamless dynamic migration later */ $dummy_posts = array( array( 'date' => '2026.00.00', 'category' => 'おしらせ', 'title' => 'ウェブサイトをリニューアルしました!', 'active' => false, ), array( 'date' => '2026.00.00', 'category' => 'おしらせ', 'title' => '施工実績を更新しました。', 'active' => false, ), array( 'date' => '2026.00.00', 'category' => 'おしらせ', 'title' => '「ホテルルートイン三次駅前」様の施工をさせていただきました。', 'active' => false, ), ); foreach ( $dummy_posts as $post ) : $item_classes = 'p_news__item' . ( $post['active'] ? ' is-active' : '' ); ?>
					<a href="#" class="<?php echo esc_attr( $item_classes ); ?>">
						<div class="p_news__item_header">
							<span class="p_news__item_date">
								<?php echo esc_html( $post['date'] ); ?>
							</span>
							<span class="p_news__item_cat">
								<span>
									<?php echo esc_html( $post['category'] ); ?>
								</span>
							</span>
						</div>

						<h3 class="p_news__item_title">
							<?php echo esc_html( $post['title'] ); ?>
						</h3>

						<!-- Dual-circle arrow animation element on hover -->
						<div class="p_news__arrow">
							<span class="p_news__arrow_dot"></span>
							<span class="p_news__arrow_circle"></span>
						</div>
					</a>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 6: Recruit (Circle typography overlay) -->
	<section class="p_recruit common_sec">
		<div class="inner w-md">
			<div class="p_recruit__grid">
				<!-- Left column: Overlapping art circle visuals -->
				<div class="p_recruit__visual">
					<!-- Transparent background circles -->
					<div class="p_recruit__circle p_recruit__circle--1"></div>
					<div class="p_recruit__circle p_recruit__circle--2"></div>
					<div class="p_recruit__circle p_recruit__circle--3"></div>
					<div class="p_recruit__circle p_recruit__circle--4"></div>

					<!-- Image cropped circle -->
					<div class="p_recruit__photo">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top_recruit_1.jpg"
							alt="採用情報イメージ" />
					</div>
				</div>

				<!-- Right column: Contents & Button -->
				<div class="p_recruit__content">
					<h2 class="p_recruit__title">
						<span class="p_recruit__title_en">Recruit</span>
						<span class="p_recruit__title_jp">
							<svg class="p_recruit__title_slash" viewBox="0 0 20 20">
								<path d="M16,0h4L4,20H0Z" fill="#e54300" />
							</svg>
							採用情報
						</span>
					</h2>

					<p class="p_recruit__lead">
						自信を胸に。誇りを形に。<br class="pc" />
						私たちは日々、未来へとつながる価値を<br class="pc" />
						つくり続けています。
					</p>

					<div class="p_recruit__footer">
						<a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="c_btn c_btn--black">
							<span class="c_btn__text">VIEW MORE</span>
							<span class="c_btn__line"></span>
							<span class="c_btn__dot"></span>
							<span class="c_btn__circle"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer();