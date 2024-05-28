<div class="featured-content__item<?= $post['id'] ?> featured__item">
	<a title='<?= $post['title'] ?>' href='/post?id=<?= $post['id'] ?>' class="link_content">
		<a class="feautered-item<?= $post['id'] ?>__link">
			<?= $post['action'] ?>
		</a>
		<div class="feautered-item__content">
			<p class="feautered-item__naming">
				<?= $post['title'] ?>
			</p>
			<p class="feautered-item__description">
				<?= $post['subtitle'] ?>
			</p>
			<div class="feautered-item__information">
				<div class="feautered-item__autor">
					<img class="feautered-autor__icon" src="http://localhost:8080/static/images/<?= $post['author_url'] ?>"
						alt="author_photo">
					<p class="feautered-autor__name">
						<?= $post['author'] ?>
					</p>
				</div>
				<p class="feautered-item__date">
					<?= DateTime::createFromFormat('Y-m-d H:i:s', $post['publish_date'])->format('d F, Y') ?>
				</p>
			</div>
		</div>
	</a>
</div>