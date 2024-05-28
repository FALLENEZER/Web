<div class="recent-content__item<?= $post['id'] ?> recent__item">
	<div class="recent-item__image recent_image<?= $post['id'] ?>">
		<img class="item__image" src="../static/images/<?= $post['image_url'] ?>" alt="photo">
	</div>
	<div class="recent-item__description">
		<p class="recent-item__title">
			<?= $post['title'] ?>
		</p>
		<p class="recent-item__subtitle">
			<?= $post['subtitle'] ?>
		</p>
	</div>
	<div class="recent-item__information">
		<div class="recent-item__autor">
			<img class="item-autor__avatar" src="http://localhost:8080/static/images/<?= $post['author_url'] ?>"
				alt="author_photo" />
			<p class="recent-autor_name">
				<?= $post['author'] ?>
			</p>
		</div>
		<p class="recent-autor_date">
			<?= DateTime::createFromFormat('Y-m-d H:i:s', $post['publish_date'])->format('d F, Y') ?>
		</p>
	</div>
</div>