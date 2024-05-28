<?php
include 'api.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Home</title>
	<link rel="stylesheet" href="http://localhost:8080/static/styles/home-style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">
</head>

<body>
	<div class="main-upper">
		<header class="header">
			<nav class="navigation-section">
				<img class="header-navigation__image" src="http://localhost:8080/static/images/logo_w.svg" alt="Escape" />
				<ul class="header-navigation__links">
					<li>Home</li>
					<li>Categories</li>
					<li>About</li>
					<li>Contact</li>
				</ul>
			</nav>
		</header>

		<main class="main">
			<div class="main-title">
				<div class="main-title__text">
					<h1>Let's do it together.</h1>
					<h2>
						We travel the world in search of stories. Come along for the ride.
					</h2>
					<a class="main__button--view" href="#">View Latest Posts</a>
				</div>
			</div>
	</div>

	<nav class="main-navigation">
		<ul class="main-navigation__links">
			<li>Nature</li>
			<li>Photography</li>
			<li>Relaxation</li>
			<li>Vacation</li>
			<li>Travel</li>
			<li>Adventure</li>
		</ul>
	</nav>
	<div class="main__container">
		<div class="main-content">

			<div class="main-content__featured">
				<h3 class="featured__title content-title">Featured Posts</h3>
				<div class="rectangle"></div>
				<div class="featured-content">
					<?php
					foreach ($posts as $post) {
						if ($post['featured'] == 0) {
							continue;
						}
						include 'post_feautered_preview.php';
					}
					?>
				</div>
			</div>

			<div class="main-content__recent">
				<div>
					<h3 class="recent__title content-title">Most Recent</h3>
					<div class="rectangle"></div>
					<div class="recent__content">
						<?php
						foreach ($posts as $post) {
							if ($post['featured'] == 1) {
								continue;
							}
							include 'post_recent_preview.php';
						}
						?>
					</div>
				</div>
			</div>

		</div>
	</div>
	</main>

	<footer class="footer">
		<div class="footer__container">
			<div class="top-container">
				<h4 class="footer__title">Stay in Touch</h4>
				<div class="rectangle rectangle-footer"></div>
				<div class="footer-email-send">
					<input type="email" class="footer__email-input" placeholder="Enter your email address"></input>
					<h5 class="footer__button">Submit</h5>
				</div>
			</div>
			<div class="bottom-container">
				<nav class="footer-section">
					<img class="footer-section__image" src="http://localhost:8080/static/images/logo_w.svg" alt="Escape" />
					<ul class="footer-section__links">
						<li>Home</li>
						<li>Categories</li>
						<li>About</li>
						<li>Contact</li>
					</ul>
				</nav>
			</div>
		</div>
	</footer>
</body>

</html>