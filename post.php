<?php 
	include('connection.php');
	$postId = $_GET['id'];
	if (is_int($postId)) {
		var_dump("Invalid id");
	}
	$post = getAllIdFromDB(createDBConnection(), $postId);

	if(!$post) {
		header('Location: /404.php');
	}
	#closeDBConnection(createDBConnection());
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog</title>
	<link rel="stylesheet" href="http://localhost:8001/static/Styles/post-style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>
<body>
<header>
	<img src="http://localhost:8001/static/Photos/logo_b.svg" alt="Escape">
	<nav>
	<ul class="list">
		<li>home</li>
        <li>categories</li>
        <li>about</li>
        <li>contact</li>
	</ul>
	</nav>
</header>
<main>
	<div class="headers">
	<h1><?= $post['title'] ?></h1>
	<h2><?= $post['subtitle'] ?></h2>
	</div>
	<img class="img_main" src="<?= $post['image_url'] ?>" alt="Mountains">
	<div class="main_text">
		<?= $post['content'] ?>
	</div>
</main>

        <footer>
            <div class="footer_color">
                <div class="footer_content">
                    <a class="logo bottom_header">Escape.</a>
                    <ul class="list bottom_li">
						<li>home</li>
            			<li>categories</li>
            			<li>about</li>
            			<li>contact</li>	
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>
