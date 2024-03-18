<div class="small_cards__card">
    <img src="static/Photos/<?= $post['img_modifier'] ?>.png" alt="<?= $post['img_modifier'] ?>">
    <div class="small__cards-borders">
        <p class="cards_naming"><?= $post['title'] ?></p>
        <p class="cards_description"><?= $post['subtitle'] ?></p>
    </div>
    <div class="cards__block_author">
        <div class="avatar-name">
            <img src="static/Photos/<?= $post['avatar'] ?>_face.png" alt="<?= $post['date'] ?> face">
            <p class="card__avatar__description"><?= $post['author'] ?></p>
        </div>
        <p class="cards__date-description"><?= $post['date'] ?></p>
    </div>
</div>