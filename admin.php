<?php
include 'api.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Admin</title>
	<link rel="stylesheet" href="static/styles/admin-style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet" />
	<script src="static/scripts/admin.js" defer></script>
</head>

<body>
	<header class="header">
		<div class="header-container">
			<img class="header__logo" src="static/images/big_logo.svg" alt="logo" />
			<div class="header__small-content">
				<img class="contenet__user-avatar" src="static/images/userAvatar.svg" alt="userAvatar" />
				<img class="content__log-out" src="static/images/log-out.svg" alt="logOut" />
			</div>
		</div>
	</header>

	<main class="main">
		<div class="main__container">
			<div class="upper__content">
				<div class="upper__content-text">
					<h1 class="upper__title">New Post</h1>
					<h2 class="upper__subtitle">
						Fill out the form bellow and publish your article
					</h2>
				</div>
				<div>
					<input id="publish-button" class="upper__button" type="submit" value="Publish" form="inputData" />
				</div>
			</div>
			<div class="main__status status_off">
				<img id="status__icon" src="" alt="success/error" />
				<p id="status__info">status</p>
			</div>
			<div class="main__content">
				<h3 class="main__title title__box">Main Information</h3>
				<div class="content__post-menu">
					<div class="post-menu__input">
						<form id="inputData" class="input-information" action="">
							<div class="input__title input__type">
								<p class="title__text mini-text">Title</p>
								<input id="title" class="title__block input-box" type="text" placeholder="New Post" />
								<p class="isRequired status_off">Title is required.</p>
							</div>
							<div class="input__description input__type">
								<p class="description__text mini-text">Short description</p>
								<input id="description" class="description__block input-box" type="text"
									placeholder="Please, enter any description" />
								<p class="isRequired status_off">Description is required.</p>
							</div>
							<div class="input__author-name input__type">
								<p class="author-name__text mini-text">Author name</p>
								<input id="author-name" class="author-name__block input-box" type="text"
									placeholder="Your name" />
								<p class="isRequired status_off">Author name is required.</p>
							</div>
							<div class="input__author-photo input__type">
								<p class="author-photo__text mini-text">Author Photo</p>
								<div class="author-photo__box">
									<label for="author-photo" id="avatar-place">
										<input id="author-photo" class="author-photo__block input-box" type="file"
											accept="image/*" hidden />
										<div id="upload-preview__author-photo"></div>
										<img class="upload__button-author" src="static/images/upload.svg" alt="upload" />
									</label>
									<img class="remove__button-author status_off" src="/static/images/remove.svg" alt="remove" />
								</div>
							</div>
							<div class="input__date input__type">
								<p class="date__text mini-text">Publish Date</p>
								<input id="date" class="date-name__block input-box" type="date" />
								<p class="isRequired status_off">Publish date is required.</p>
							</div>

							<div class="input__hero-photo input__type">
								<p class="hero-photo__text mini-text">Hero Image</p>
								<label for="hero-photo" id="hero-place">
									<input id="hero-photo" class="hero-photo__block input-box" type="file" accept="image/*"
										hidden />
									<div id="hero-photo--view" class="">
										<div id="upload-preview__hero-photo"></div>
									</div>
								</label>
								<div class="hero__buttons">
									<img id="upload-new-button" class="upload__button-hero status_off"
										src="static/images/upload-new.svg" alt="upload" />
									<img class="remove__button-hero status_off" src="/static/images/remove.svg" alt="remove" />
								</div>
								<p class="mini-text">
									Size up to 10mb. Format: png, jpeg, gif.
								</p>
							</div>
							<div class="input__hero-photo--small input__type">
								<p class="hero-photo__text--small mini-text">Hero Image</p>
								<label for="hero-photo--small" id="hero-place--small">
									<input id="hero-photo--small" class="hero-photo__block--small input-box" type="file"
										accept="image/*" hidden />
									<div id="hero-photo--view--small" class="">
										<div id="upload-preview__hero-photo--small"></div>
									</div>
								</label>
								<div class="hero__buttons">
									<img id="upload-new-button--small" class="upload__button-hero status_off"
										src="static/images/upload-new.svg" alt="upload" />
									<img class="remove__button-hero status_off" src="/static/images/remove.svg" alt="remove" />
								</div>
								<p class="mini-text">
									Size up to 10mb. Format: png, jpeg, gif.
								</p>
							</div>
						</form>
					</div>
					<div class="post-menu__preview">
						<div class="preview__post-page">
							<p class="post-page__text mini-text">Article preview</p>
							<div class="post-page__container">
								<div class="post-page__frame">
									<div class="frame__design">
										<div class="ellipse__container">
											<div class="ellipse"></div>
											<div class="ellipse"></div>
											<div class="ellipse"></div>
										</div>
									</div>
									<div class="post-page__content">
										<div class="content__text">
											<p id="title-preview" class="post-page__title post__title">
												New Post
											</p>
											<p id="description-preview" class="post-page__subtitle">
												Please, enter any description
											</p>
										</div>
										<div id="post-page__photo" class="content__photo"></div>
									</div>
								</div>
								<div class="vertical-blur"></div>
								<div class="horizontal-blur"></div>
							</div>
						</div>
						<div class="preview__post-card">
							<p class="post-card__text mini-text">Post card preview</p>
							<div class="post-card__container">
								<div class="post-card__content">
									<div id="card-page__photo" class="content__photo-card"></div>
									<div class="content__card-description">
										<p class="card-description__title">New Post</p>
										<p class="card-description__subtitle">
											Please, enter any description
										</p>
									</div>
									<div class="card__subcontent">
										<div class="subcontent__author">
											<div id="author-photo__card" class="author__photo"></div>
											<p id="author-name-preview" class="author__name">
												Enter author name
											</p>
										</div>
										<div class="subcontent__date">
											<p id="date-preview" class="card-date">01/01/2000</p>
										</div>
									</div>
								</div>
								<div class="vertical-blur"></div>
								<div class="horizontal-blur"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main__subcontent">
				<h4 class="subcontent__title title__box">Content</h4>
				<div class="subcontent__input">
					<p class="subcontent__subtitle mini-text">
						Post content (plain text)
					</p>
					<textarea class="subcontent__block input-box" type="text" id="subcontent__text"
						placeholder="Type anything you want ..."></textarea>
					<p class="isRequired status_off">Post content is required.</p>
				</div>
			</div>
		</div>
	</main>
</body>

</html>