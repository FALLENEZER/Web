<?php
$postId = $_GET['id'];
include 'api.php';
if (is_int($postId)) {
	var_dump('Invalid ID');
}

$post = getAllIdFromDB(createDBConnection(), $postId);
if (!$post) {
	echo ('404');
}
;

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Post</title>
	<link rel="stylesheet" href="static/styles/post-style.css" />
</head>

<body>
	<header class="header">
		<div class="header-navigation">
			<img class="header-logo" src="http://localhost:8080/static/images/logo_b.svg" />
			<ul class="header-list">
				<li>home</li>
				<li>categories</li>
				<li>about</li>
				<li>contact</li>
			</ul>
		</div>
	</header>

	<main class="main">
		<div class="upper">
			<h1 class="main-title">
				<?= $post['title'] ?>
			</h1>
			<h2 class="main-subtitle">
				<?= $post['subtitle'] ?>
			</h2>
		</div>
		<img src="http://localhost:8080/static/images/<?= $post['image_url'] ?>" class="photo" />
		<div class="text">
			<p class="paragraph">
				<?= $post['content'] ?>
			</p>
		</div>
	</main>

	<footer class="footer">
		<div class="footer-navigation">
			<img src="http://localhost:8080/static/images/logo_w.svg" class="footer-logo" />
			<ul class="footer-list">
				<li>home</li>
				<li>categories</li>
				<li>about</li>
				<li>contact</li>
			</ul>
		</div>
	</footer>
</body>

</html>