<div class="content__block-<?= $post['id'] ?>">
    <a class="content__block-<?= $post['id'] ?>-action"><?= $post['action'] ?></a>
    <p class="content__block_naming"><?= $post['title'] ?></p>
    <p class="content__block_description"><?= $post['subtitle'] ?></p>
    <div class=content__block_author>
        <div class="avatar-name">
            <img class="faces" src="static/Photos/<?= $post['avatar'] ?>_face.png" alt="<?= $post['avatar'] ?> face">
            <p class="avatar__description"><?= $post['author'] ?></p>
        </div>
        <p class="date__description"><?= $post['date'] ?></p>
    </div>
</div>
