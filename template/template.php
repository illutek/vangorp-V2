<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php site_url(); ?>/dist/css/styles.css">
	<link rel="icon" type="image/x-icon" href="<?php site_url(); ?>/favicon.ico" />
	<title><?php page_title(); ?> | <?php site_name(); ?></title>
</head>

<body>

	<!-- facebook id -->
	<div id="fb-root"></div>

	<!-- start of r-menu-overlay -->
	<?php require 'menu.inc.php'; ?>
	<!-- end of r-menu-overlay -->

	<!-- start of r-contact-overlay -->
	<?php require 'contact-overlay.inc.php'; ?>
	<!-- end of r-contact-overlay -->

	<div class="r-grid-container">

		<header class="r-header">

			<div class="r-header__top">
				<div class="container r-header__top-inner">
					<div class="r-header__menu">
						<div class="c-hamburger-btn">
							<span class="c-hamburger-btn--open">&nbsp;</span>
							<span class="c-hamburger-btn__label"> Menu</span>
						</div>
					</div>
					<div class="r-header__contact">
						<div class="c-contact-btn js-open-contact">
							<img src="../dist/images/contact-btn.png" alt="" />
						</div>
					</div>
				</div>
			</div><!-- end of r-header-top -->

			<div class="r-header__branding">

				<div class="r-branding__title">
					<div class="container">
						<a href="<?php ('site_url'); ?>/">
							<span class="heading-one">Patesserie</span>
							<h1 class="heading-one"><?php site_name(); ?></h1>
						</a>
					</div>
				</div>

			</div><!-- end of r-header__branding -->
		</header>

		<!-- on desktop this is the right part -->
		<div class="r-main">

			<div class="r-content">
				<div class="container">
					<?php page_content(); ?>
				</div>
			</div>

			<?php require 'footer.inc.php'; ?>

		</div><!-- end of r-main -->

		<div class="r-footer__copy">
			© <?php echo date('Y'); ?> | <?php site_name(); ?>
		</div>

	</div><!-- end of grid-container -->

	<div class="cookie__alert" role="alert">
		<p>We gebruiken cookies om ervoor te zorgen dat u de beste ervaring op onze website krijgt. </p>

		<div class="cookie__flex">
			<a href="<?php ('site_url'); ?>/privacyverklaring">Lees meer</a>
			<button type="button" class="c-btn c-btn--accent-two cookie__accept">
				Akkoord
			</button>
		</div>

	</div><!-- end of cookie__alert -->

</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../dist/js/all.js"></script>
<script>
	easy_background(".r-header__branding",

		{
			slide: ["../dist/images/bcg-img/IMG_0282.JPG", "../dist/images/bcg-img/IMG_0050.JPG", "../dist/images/bcg-img/brood.JPG", "../dist/images/bcg-img/broodmanden.JPG", "../dist/images/bcg-img/fruit.JPG"],

			delay: [2000, 2000, 2000, 2000, 2000]
		}


	);
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-3878171-68"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'UA-3878171-68');
</script>


</html>