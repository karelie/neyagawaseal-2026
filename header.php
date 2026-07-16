<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package neyagawaseal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<script>
		(function (d) {
			var config = {
				kitId: 'jhn0pkh',
				scriptTimeout: 3000,
				async: true
			},
				h = d.documentElement, t = setTimeout(function () { h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive"; }, config.scriptTimeout), tk = d.createElement("script"), f = false, s = d.getElementsByTagName("script")[0], a; h.className += " wf-loading"; tk.src = 'https://use.typekit.net/' + config.kitId + '.js'; tk.async = true; tk.onload = tk.onreadystatechange = function () { a = this.readyState; if (f || a && a != "complete" && a != "loaded") return; f = true; clearTimeout(t); try { Typekit.load(config) } catch (e) { } }; s.parentNode.insertBefore(tk, s)
		})(document);
	</script>
</head>

<?php
    global $post;
	$post_slug=$post->post_name; ?>

<body <?php body_class('drawer target drawer--right page-'.$post_slug); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e( 'Skip to content', 'neyagawaseal' ); ?>
		</a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php if ( is_front_page() || is_home() ) : ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_white.svg" alt="株式会社寝屋川シール"
						class="header-logo">
					<?php else : ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="株式会社寝屋川シール"
						class="header-logo">
					<?php endif; ?>
				</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<ul class="main-menu">
					<li class="main-menu__item">
						<a href="<?php echo esc_url( home_url( '/service/' ) ); ?>" class="main-menu__link">
							<span class="main-menu__ja">サービス</span>
							<span class="main-menu__en">SERVICE</span>
						</a>
					</li>
					<li class="main-menu__item">
						<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="main-menu__link">
							<span class="main-menu__ja">私たちについて</span>
							<span class="main-menu__en">ABOUT</span>
						</a>
					</li>
					<li class="main-menu__item">
						<a href="<?php echo esc_url( home_url( '/works/' ) ); ?>" class="main-menu__link">
							<span class="main-menu__ja">施工実績</span>
							<span class="main-menu__en">WORKS</span>
						</a>
					</li>
					<li class="main-menu__item">
						<a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>" class="main-menu__link">
							<span class="main-menu__ja">採用情報</span>
							<span class="main-menu__en">RECRUIT</span>
						</a>
					</li>
				</ul>

				<div class="header-contact">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
						class="header-contact__button">CONTACT</a>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<nav class="drawer-nav sp" role="navigation">
			<div class="line_box sp">

			</div>
			<div class="drawer-toggle button sp">

			</div>
			<div class="drawer-nav-inner">
				<div class="site-branding">
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="" width=""
								class="">
						</a></p>
				</div>
				<div class="box_block">
					<nav class="mobile-navigation__main">
						<ul class="list_1">

						</ul>
					</nav>

					<nav class="mobile-navigation__sub">

					</nav>


				</div>

			</div>
		</nav>