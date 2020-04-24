function like_post(post_id, post_e) {
    ajax('POST', 'like.php', post_e, 'id=' + post_id + '&action=like_post')
}

function unlike_post(post_id, post_e) {
    ajax('POST', 'like.php', post_e, 'id=' + post_id + '&action=unlike_post')
}