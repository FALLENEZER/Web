<div class="small__cards__card">
    <img src="<?= $post['image_url'] ?>" alt="<?= $post['alt'] ?>">
    <div class="small__cards-borders">
        <p class="cards_naming"><?= $post['title'] ?></p>
        <p class="cards_description"><?= $post['subtitle'] ?></p>
    </div>
    <div class="cards__block_author">
        <div class="avatar-name">
            <img src="<?= $post['author_url'] ?>" alt="<?= $post['author'] ?>">
            <p class="card__avatar__description"><?= $post['author'] ?></p>
        </div>
        <p class="cards__date-description"><?= DateTime::createFromFormat('Y-m-d H:i:s', $post['publish_date'])->format('d F, Y') ?></p>
    </div>
</div>