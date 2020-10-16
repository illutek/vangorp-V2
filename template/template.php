<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Patisserie Van Gorp is één van de pioniers in de streek als het gaat om zuurdesembrood. Brood bakken zoals het bedoeld is.">
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

			<!-- start of r-header-top -->
			<?php require 'header-top.inc.php'; ?>
			<!-- end of r-header-top -->

			<!-- start of r-header__branding -->
			<?php require 'header-branding.inc.php'; ?>
			<!-- end of r-header__branding -->

		</header>

		<!-- on desktop this is the right part -->
		<div class="r-main">

			<div class="r-content">
				<div class="container">
					<?php page_content(); ?>

					<!-- news on home.phtml -->

				</div>
			</div>

			<?php require 'footer.inc.php'; ?>

		</div><!-- end of r-main -->

		<div class="r-footer__copy">
			© <?php echo date('Y'); ?> | <?php site_name(); ?>
		</div>

	</div><!-- end of grid-container -->

	<!-- start of cookie__alert -->
	<div class="cookie__alert" role="alert">
		<p>We gebruiken cookies om ervoor te zorgen dat u de beste ervaring op onze website krijgt. </p>

		<div class="cookie__flex">
			<a href="<?php ('site_url'); ?>/privacyverklaring">Lees meer</a>
			<button type="button" class="c-btn c-btn--accent-two cookie__accept">
				Akkoord
			</button>
		</div>

	</div>
	<!-- end of cookie__alert -->

</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../dist/js/all.js"></script>
<script>
	$(document).ready(function() {
		$(".c-backstretch").backstretch([
			"dist/images/bcg-img/IMG_0282.JPG",
			"dist/images/bcg-img/IMG_0050.JPG",
			"dist/images/bcg-img/brood.jpg",
			"dist/images/bcg-img/broodmanden.jpg",
			"dist/images/bcg-img/koffie.jpg",
		], {
			fade: 750,
			duration: 4000
		});
	});
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