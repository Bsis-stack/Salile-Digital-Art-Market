
<?php

function podcast_genre($branch) {
    $j = [
        'art' => 31,
        'sport' => 32,
        'everyday' => 33,
        'economics' => 34
    ];

    return $j[$branch] ?? null;
}

function popular_podcast($branch) {
    global $db;
    $ge = podcast_genre($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 5 AND genre_id = :ge
              AND view >= 1000000';

    $statement = $db->prepare($query);
    $statement->bindValue(':ge', $ge);
    $statement->execute();
    $podcasts = $statement->fetchAll();
    $statement->closeCursor();

    return $podcasts;
}

function recent_podcast($branch) {
    global $db;
    $ge = podcast_genre($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 5 AND genre_id = :ge
              AND year >= 2021';

    $statement = $db->prepare($query);
    $statement->bindValue(':ge', $ge);
    $statement->execute();
    $podcasts = $statement->fetchAll();
    $statement->closeCursor();

    return $podcasts;
}

function hot_podcast($branch) {
    global $db;
    $ge = podcast_genre($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 5 AND genre_id = :ge
              AND view >= 1000000 AND year >= 2021';

    $statement = $db->prepare($query);
    $statement->bindValue(':ge', $ge);
    $statement->execute();
    $podcasts = $statement->fetchAll();
    $statement->closeCursor();

    return $podcasts;
}

function exclusive_podcast($branch) {
    global $db;
    $ge = podcast_genre($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 5 AND genre_id = :ge
              AND access = "Exclusive"';

    $statement = $db->prepare($query);
    $statement->bindValue(':ge', $ge);
    $statement->execute();
    $podcasts = $statement->fetchAll();
    $statement->closeCursor();

    return $podcasts;
}

?>
