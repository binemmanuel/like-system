<?php
// Include our configurations.
require 'libs/config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['action']) && !empty($_POST['id'])) {
    // Collect and sanitize data.
    $post_id = (int) clean_data($_POST['id']);
    $action = (string) clean_data($_POST['action']);
    $user_id = (int) clean_data($_SESSION['users'][1]['id']);

    switch ($action) {
        case 'like_post':
            // Check if the user has already liked the post
            if (!has_user_liked($user_id, $post_id)) {
                // Like the post
                like_post($user_id, $post_id);
            }

            break;
        
        case 'unlike_post':
            if (has_user_liked($user_id, $post_id)) {
                // Deslike the post
                unlike_post($user_id, $post_id);
            }
            
            break;
    
        default:
            echo 'Unknown action.';

            break;
    }

    // Get the post.
    $post = get_post($post_id);
}

?>


<span class="num_of_likes">(<?= get_post_likes($post['id']) ?>)</span>

<?php if (has_user_liked($user_id, $post_id)): ?>
    <a onclick="unlike_post(<?= $post['id'] ?>, '#post_'+ <?= $post['id'] ?>)" style="color: blue; cursor: pointer;">Unlike</a>

<?php else: ?>
    <a onclick="like_post(<?= $post['id'] ?>, '#post_'+ <?= $post['id'] ?>)" style="color: blue; cursor: pointer;">like</a>

<?php endif ?> 