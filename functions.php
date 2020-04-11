<?php
function like_post(int $user_id, int $post_id)
{
    // Include our database connection file.
    include 'libs/conn.php';

    // Prepare an sql statement.
    $stmt = $conn->prepare('INSERT INTO post_likes(user, post) VALUES(?, ?)');

    // Bind parameters
    $stmt->bind_param('ii', $user_id, $post_id);

    // Execute the sql query.
    $stmt->execute();

    // Close connection.
    $stmt->close();
    $conn->close();
}

function unlike_post(int $user_id, int $post_id)
{
    // Include our database connection file.
    include 'libs/conn.php';

    // Prepare an sql statement.
    $stmt = $conn->prepare('DELETE FROM post_likes WHERE user = ? AND post = ?');

    // Bind parameters
    $stmt->bind_param('ii', $user_id, $post_id);

    // Execute the sql query.
    $stmt->execute();

    // Close connection.
    $stmt->close();
    $conn->close();
}

function get_post_likes(int $post_id): int
{
    // Include our database connection file.
    include 'libs/conn.php';

    // Prepare an sql statement.
    $stmt = $conn->prepare('SELECT * FROM post_likes WHERE post = ?');

    // Bind parameters
    $stmt->bind_param('i', $post_id);

    // Execute the sql query.
    $stmt->execute();

    // Store return values.
    $stmt->store_result();

    // Store the number of rows.
    $num_of_likes = $stmt->num_rows();

    // Close connection.
    $stmt->close();
    $conn->close();

    return (int) $num_of_likes;
}

function get_posts(): array
{
    // Include our database connection file.
    include 'libs/conn.php';

    // Prepare an sql statement.
    $stmt = $conn->prepare('SELECT * FROM post ORDER BY id DESC');

    // Execute the sql query.
    $stmt->execute();

    // Bind results.
    $stmt->bind_result($id, $title, $author, $content, $created_on);

    // Create an empty array.
    $posts = [];

    // Fetch all posts
    while ($stmt->fetch()) {
        $post = [
            'id' => $id,
            'tite' => $title,
            'author' => $author,
            'content' => $content,
            'created_on' => $created_on,
        ];
        array_push($posts, $post);
    }

    // Close connection.
    $stmt->close();
    $conn->close();

    return $posts;
}

function get_post(int $post_id): array
{
    // Include our database connection file.
    include 'libs/conn.php';

    // Prepare an sql statement.
    $stmt = $conn->prepare('SELECT * FROM post WHERE id = ?');

    // Bind parameter.
    $stmt->bind_param('i', $post_id);

    // Execute the sql query.
    $stmt->execute();
    
    // Create an empty array.
    $post = [];

    // Bind results.
    $stmt->bind_result($post['id'], $post['title'], $post['author'], $post['content'], $post['created_on']);


    // Fetch all posts
    $stmt->fetch();

    // Close connection.
    $stmt->close();
    $conn->close();

    return $post;
}

function has_user_liked(int $user_id, int $post_id): bool
{
    // Include our database connection file.
    include 'libs/conn.php';

    // Prepare an sql statement.
    $stmt = $conn->prepare('SELECT * FROM post_likes WHERE user = ? AND post = ?');

    // Bind parameter.
    $stmt->bind_param('ii', $user_id, $post_id);

    // Execute the sql query.
    $stmt->execute();

    // Store return values.
    $stmt->store_result();

    // Store the number of rows.
    $num_rows = $stmt->num_rows();

    // Close connection.
    $stmt->close();
    $conn->close();

    return (bool) $num_rows;
}

/**
 * Sanitize data.
 */
function clean_data($data)
{
    return htmlspecialchars(trim($data));
}