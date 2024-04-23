<?php 
	include('home.php');
	$postId = $_GET['id'];
	if (($postId < 0) && ($postId > 1000000)) {
		var_dump("Invalid id");
	}
	$data = getAllIdFromDB(createDBConnection());
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
	<a class="logo">Escape.</a>
	<nav>
	<ul class="list">
		<?= $post[$postId]['links'] ?>
	</ul>
	</nav>
</header>
<main>
	<div class="headers">
	<h1><?= $post['title'], $post['id'] ?></h1>
	<h2><?= $post[$postId]['subtitle'] ?></h2>
	</div>
	<img class="img_main" src="http://localhost:8001/static/Photos/Mountains_main_back.jpeg" alt="Mountains">
	<div class="main_text">
		<?= $post[$postId]['text'] ?>
	</div>
</main>

        <footer>
            <div class="footer_color">
                <div class="footer_content">
                    <a class="logo bottom_header">Escape.</a>
                    <ul class="list bottom_li">
						<?= $post[$postId]['links'] ?>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>
