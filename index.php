<?php
// Include our configurations.
require 'libs/config.php';

// Get the user's ID.
$user_id = (int) clean_data($_SESSION['users'][1]['id']);

// Get all Posts.
$posts = get_posts();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Learing how to craete a like system</title>
    </head>
    <body>
        <main>
            <?php foreach ($posts as $post): ?>
                <article>
                    <div class="post-header">
                        <h2><?= $post['title'] ?></h2>
                        <p>Posted by <i><b><?= $post['author'] ?></b></i> - 8min age.</p>
                    </div>

                    <div class="post-body">
                        <p>
                            <?= $post['content'] ?>
                        </p>
                    </div>

                    <div class="post-footer" id="post_<?= $post['id'] ?>">
                        <span class="num_of_likes">(<?= get_post_likes($post['id']) ?>)</span>

                        <?php if (has_user_liked($user_id, $post['id'])): ?>
                            <a onclick="unlike_post(<?= $post['id'] ?>, '#post_'+ <?= $post['id'] ?>)" style="color: blue; cursor: pointer;">Unlike</a>

                        <?php else: ?>
                            <a onclick="like_post(<?= $post['id'] ?>, '#post_'+ <?= $post['id'] ?>)" style="color: blue; cursor: pointer;">like</a>

                        <?php endif ?> 
                    </div>
                </article>
            <?php endforeach ?>
        </main>
        <footer>
            <script src="assets/js/ajax.js"></script>
            <script src="assets/js/main.js"></script>
        </footer>
    </body>
</html>