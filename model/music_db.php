
<?php


function music_genre_collections($branch) {
    $j = [
        'country' => 5,
        'pop' => 3,
        'reggae' => 2,
        'rock' => 4,
        'rap' => 1
    ];

    return $j[$branch] ?? null;
}

function all_music($branch) {
    global $db;

    $ge = music_genre_collections($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 1';

    if ($ge !== null) {
        $query .= ' AND genre_id = :ge';
    }

    $statement = $db->prepare($query);

    if ($ge !== null) {
        $statement->bindValue(':ge', $ge);
    }

    $statement->execute();
    $music = $statement->fetchAll();
    $statement->closeCursor();

    return $music;
}

function popular_music($branch) {
    global $db;

    $ge = music_genre_collections($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 1
              AND genre_id = :ge
              AND view >= 1000000';

    $statement = $db->prepare($query);
    $statement->bindValue(':ge', $ge);
    $statement->execute();

    $music = $statement->fetchAll();
    $statement->closeCursor();

    return $music;
}

function new_music($branch) {
    global $db;

    $ge = music_genre_collections($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 1
              AND genre_id = :ge
              AND year >= 2025';

    $statement = $db->prepare($query);
    $statement->bindValue(':ge', $ge);
    $statement->execute();

    $music = $statement->fetchAll();
    $statement->closeCursor();

    return $music;
}

function exclusive_music($branch) {
    global $db;

    $ge = music_genre_collections($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 1
              AND genre_id = :ge
              AND access = "Exclusive"
              AND view >= 1000000';

    $statement = $db->prepare($query);
    $statement->bindValue(':ge', $ge);
    $statement->execute();

    $music = $statement->fetchAll();
    $statement->closeCursor();

    return $music;
}

?>
