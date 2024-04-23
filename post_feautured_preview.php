<?php
    if ($post['id'] > 2) {
        exit;
    }
?>
<div class="content__block-<?= $post['queue'] ?>">
    <a class="link__content" href='/post.php?id=<?= $post['id'] ?>'></a>
    <a class="content__block-<?= $post['queue'] ?>-action"><?= $post['action'] ?></a>
    <p class="content__block_naming"><?= $post['title'] ?></p>
    <p class="content__block_description"><?= $post['subtitle'] ?></p>
    <div class=content__block_author>
        <div class="avatar-name">
            <img class="faces" src="http://localhost:8001/static/Photos/<?= explode(" ", $post['author'])[0] ?>_face.png" alt="<?= $post['author'] ?>">
            <p class="avatar__description"><?= $post['author'] ?></p>
        </div>
        <p class="date__description"><?= DateTime::createFromFormat('Y-m-d H:i:s', $post['publish_date'])->format('d F, Y') ?></p>
    </div>
</div>