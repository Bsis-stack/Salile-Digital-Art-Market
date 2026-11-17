
<?php

function comedy_genre($branch) {

    $genres = [
        'stand_up' => 16,
        'roast' => 17,
        'satire' => 15,
        'slapstick' => 18
    ];

    return $genres[$branch] ?? null;
}

function get_comedy_by_artist($branch, $artist) {

    global $db;

    $ge = comedy_genre($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 4
              AND genre_id = :ge
              AND artist = :artist';

    $statement = $db->prepare($query);
    $statement->bindValue(':ge', $ge);
    $statement->bindValue(':artist', $artist);
    $statement->execute();

    $comedies = $statement->fetchAll();
    $statement->closeCursor();

    return $comedies;
}

?>
