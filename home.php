<?php
$feautured_posts = [
 [
   'title' => 'The Road Ahead',
   'subtitle' => 'The road ahead might be paved - it might not be.',
   'author' => 'Mat Vogels',
   'date' => 'September 25, 2015',
   'action' => '',
   'avatar' => 'Mat',
   'id' => 'first'
 ],
 [
    'title' => 'From Top Down',
    'subtitle' => 'Once a year, go someplace you’ve never been before.',
    'author' => 'William Wong',
    'date' => 'September 25, 2015',
    'action' => 'ADVENTURE',
    'avatar' => 'William',
    'id' => 'second'
 ]
];
$recent_posts = [
    [
      'title' => 'Still Standing Tall',
      'subtitle' => 'Life begins at the end of your comfort zone.',
      'img_modifier' => 'Still_standing_tall',
      'author' => 'William Wong',
      'date' => '9/25/2015',
      'avatar' => 'William'
    ],
    [
       'title' => 'Sunny Side Up',
       'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
       'img_modifier' => 'Sunny_side_up',
       'author' => 'Mat Vogels',
       'date' => '9/25/2015',
       'avatar' => 'Mat'
    ],
    [
       'title' => 'Water Falls',
       'subtitle' => 'We travel not to escape life, but for life not to escape us.',
       'img_modifier' => 'Water_falls',
       'author' => 'Mat Vogels',
       'date' => '9/25/2015',
       'avatar' => 'Mat'
    ],
    [
       'title' => 'Through the Mist',
       'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
       'img_modifier' => 'Through_the_mist',
       'author' => 'William Wong',
       'date' => '9/25/2015',
       'avatar' => 'William'
    ],
    [
       'title' => 'Awaken Early',
       'subtitle' => 'Not all those who wander are lost.',
       'img_modifier' => 'Awaken_early',
       'author' => 'Mat Vogels',
       'date' => '9/25/2015',
       'avatar' => 'Mat'
    ],
    [
       'title' => 'Try it Always',
       'subtitle' => 'The world is a book, and those who do not travel read only one page.',
       'img_modifier' => 'Try_it_always',
       'author' => 'Mat Vogels',
       'date' => '9/25/2015',
       'avatar' => 'Mat'
    ]
   ];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница блога</title>
    <link rel="stylesheet" href="static/Styles/home-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>

<body class="content">
<header class="nav__content head">
    <img src="static/Photos/Escape.svg" alt="Escape">
    <nav class="header__nav">
        <ul class="logo__list">
            <li>HOME</li>
            <li>CATEGORIES</li>
            <li>ABOUT</li>
            <li>CONTACT</li>
        </ul>
    </nav>
</header>

<main>
    <div class="main__head">
        <h1 class="main__head__title">Let's do it together.</h1>
        <h2 class="main__head__subtitle">We travel the world in search of stories. Come along for the ride.</h2>
        <div class="main__button">
            <a>View Latest Posts</a>
        </div>
    </div>
    <ul class="main__menu">
        <li class="menu__nature">Nature</li>
        <li class="menu__photography">Photography</li>
        <li class="menu__relaxation">Relaxation</li>
        <li class="menu__vacation">Vacation</li>
        <li class="menu__travel">Travel</li>
        <li class="menu__adventure">Adventure</li>
    </ul>
    <div class="content-color">
        <div class="content__block-borders">
            <h2 class="content__title">Featured Posts</h2>
            <div class="rectangle"></div>
            
            <div class="content__block">
            <?php 
                foreach ($feautured_posts as $post) {
                    include 'post_feautured_preview.php';
                }
            ?>
            </div>
            <h2 class="content__title">Most Recent</h2>
            <div class="rectangle"></div>
        </div>
        <div class="small__cards">
            <?php 
                foreach ($recent_posts as $post) {
                    include 'post_recent_preview.php';
                }
            ?>
        </div>
    </div>
</main>


<footer  class="footer">
    <div class="footer-color">
        <div class="footer__nav head">
            <img src="static/Photos/Escape.svg" alt="Escape">
            <ul class="logo__list bottom__li">
                <li>HOME</li>
                <li>CATEGORIES</li>
                <li>ABOUT</li>
                <li>CONTACT</li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>
