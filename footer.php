<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package neyagawaseal
 */

?>

<footer id="colophon" class="site-footer">

	<!-- Contact Section -->
	<section class="footer-contact">
		<div class="l-container">
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="footer-contact__panel">

				<div class="footer-contact__bg">
					<div class="footer-contact__bg-left">
						<picture>
							<source media="(max-width: 700px)"
								srcset="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/footer_contact_bg_1_sp.jpg' ); ?>">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/footer_contact_bg_1.jpg' ); ?>"
								alt="">
						</picture>
					</div>
					<div class="footer-contact__bg-right">
						<picture>
							<source media="(max-width: 700px)"
								srcset="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/footer_contact_bg_2_sp.jpg' ); ?>">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/footer_contact_bg_2.jpg' ); ?>"
								alt="">
						</picture>
					</div>
				</div>

				<!-- Dark Overlay Mask -->
				<div class="footer-contact__mask"></div>

				<!-- Content (Centered Vertical Layout) -->
				<div class="footer-contact__content">
					<h2 class="footer-contact__title">Contact</h2>
					<div class="footer-contact__subtitle-group">
						<span class="footer-contact__subtitle-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
								fill="none">
								<path d="M16,0h4L4,20H0Z" fill="#e54300" />
							</svg>
						</span>
						<span class="footer-contact__subtitle">お問い合わせ</span>
					</div>
					<p class="footer-contact__text">寝屋川シールへのご相談、<br class="sp" />お問い合わせはこちら。</p>
					<div class="footer-contact__button-wrap">
						<div class="footer-contact__button c_btn c_btn--red">
							<span class="c_btn__text">VIEW MORE</span>
							<span class="c_btn__line"></span>
							<span class="c_btn__dot"></span>
							<span class="c_btn__circle"></span>
						</div>
					</div>
				</div>

			</a>
		</div>
	</section>

	<!-- Footer Main Content (Light gray background) -->
	<div class="footer-main">
		<div class="l-container">
			<div class="footer-main__inner">

				<!-- Left Column: Company Info -->
				<div class="footer-info">
					<div class="footer-info__logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="株式会社寝屋川シール">
						</a>
					</div>
					<div class="footer-info__company">
						株式会社寝屋川シール<br>
						〒572-0077 大阪府寝屋川市点野3-34-5<br>
						TEL:072-826-3488　FAX:072-826-8493
					</div>
				</div>

				<!-- Right Column: Scroll-To-Top Monkey Button -->


			</div>

			<!-- Copyright Section -->
			<div class="footer-bottom">
				<p class="footer-copyright">Copyright &copy; 株式会社寝屋川シール <br class="sp">All Rights Reserved.</p>
			</div>
		</div>

		<!-- Giant background typography backdrop NEYAGAWA SEAL -->
		<div class="footer-bg-typography">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_bg_text_sp.svg" alt=""
				aria-hidden="true" class="sp">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_bg_text.svg" alt="" aria-hidden="true"
				class="pc">
		</div>
	</div>
	<div class="footer-top-btn-wrap">
		<a href="#page" class="js-scroll-top footer-top-btn">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_top_btn.svg" alt="TOP">
		</a>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>