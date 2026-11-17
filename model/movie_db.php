<?php

function genre_collections($branch) {

    $genre_collection = [
        'romantic'    => 24,
        'comedy'      => 25,
        'documentary' => 26,
        'action'      => 27,
        'animation'   => 28,
        'horror'      => 29
    ];

    return isset($genre_collection[$branch])
        ? $genre_collection[$branch]
        : null;
}


/* POPULAR MOVIES */
function popular_movie($branch) {
    global $db;

    $genre_call = genre_collections($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 3
              AND genre_id = :genre_call
              AND view >= 1000000';

    $statement = $db->prepare($query);
    $statement->bindValue(':genre_call', $genre_call);
    $statement->execute();

    $mov = $statement->fetchAll();

    $statement->closeCursor();

    return $mov;
}


/* NEW MOVIES */
function new_movie($branch) {
    global $db;

    $genre_call = genre_collections($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 3
              AND genre_id = :genre_call
              AND year = 2026';

    $statement = $db->prepare($query);
    $statement->bindValue(':genre_call', $genre_call);
    $statement->execute();

    $mov = $statement->fetchAll();

    $statement->closeCursor();

    return $mov;
}


/* INTERNATIONAL MOVIES */
function international_movie($branch) {
    global $db;

    $genre_call = genre_collections($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 3
              AND genre_id = :genre_call
              AND region = "International"';

    $statement = $db->prepare($query);
    $statement->bindValue(':genre_call', $genre_call);
    $statement->execute();

    $mov = $statement->fetchAll();

    $statement->closeCursor();

    return $mov;
}


/* USA MOVIES */
function usa_movie($branch) {
    global $db;

    $genre_call = genre_collections($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 3
              AND genre_id = :genre_call
              AND region = "USA"';

    $statement = $db->prepare($query);
    $statement->bindValue(':genre_call', $genre_call);
    $statement->execute();

    $mov = $statement->fetchAll();

    $statement->closeCursor();

    return $mov;
}


/* EXCLUSIVE MOVIES */
function exclusive_movie($branch) {
    global $db;

    $genre_call = genre_collections($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 3
              AND genre_id = :genre_call
              AND access = "Exclusive"';

    $statement = $db->prepare($query);
    $statement->bindValue(':genre_call', $genre_call);
    $statement->execute();

    $mov = $statement->fetchAll();

    $statement->closeCursor();

    return $mov;
}


/* ALL MOVIES FOR ONE GENRE */
function all_movie($branch) {
    global $db;

    $genre_call = genre_collections($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 3
              AND genre_id = :genre_call';

    $statement = $db->prepare($query);
    $statement->bindValue(':genre_call', $genre_call);
    $statement->execute();

    $mov = $statement->fetchAll();

    $statement->closeCursor();

    return $mov;
}

?>