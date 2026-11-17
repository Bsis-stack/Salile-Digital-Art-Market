
<?php

function tv_genre_collections($branch) {

    $genre_collection = [
        'drama'   => 6,
        'horror'  => 7,
        'comedy'  => 8,
        'reality' => 9
    ];

    return $genre_collection[$branch] ?? null;
}


/* POPULAR TV SHOWS */
function popular_tv_show($branch) {
    global $db;

    $genre_call = tv_genre_collections($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 2
              AND genre_id = :genre_call
              AND view >= 1000000';

    $statement = $db->prepare($query);
    $statement->bindValue(':genre_call', $genre_call);
    $statement->execute();

    $show = $statement->fetchAll();
    $statement->closeCursor();

    return $show;
}


/* NEW TV SHOWS */
function new_tv_show($branch) {
    global $db;

    $genre_call = tv_genre_collections($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 2
              AND genre_id = :genre_call
              AND year >=2020';

    $statement = $db->prepare($query);
    $statement->bindValue(':genre_call', $genre_call);
    $statement->execute();

    $show = $statement->fetchAll();
    $statement->closeCursor();

    return $show;
}


/* INTERNATIONAL TV SHOWS */
function international_tv_show($branch) {
    global $db;

    $genre_call = tv_genre_collections($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 2
              AND genre_id = :genre_call
              AND region = "International"';

    $statement = $db->prepare($query);
    $statement->bindValue(':genre_call', $genre_call);
    $statement->execute();

    $show = $statement->fetchAll();
    $statement->closeCursor();

    return $show;
}


/* USA TV SHOWS */
function usa_tv_show($branch) {
    global $db;

    $genre_call = tv_genre_collections($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 2
              AND genre_id = :genre_call
              AND region = "USA"';

    $statement = $db->prepare($query);
    $statement->bindValue(':genre_call', $genre_call);
    $statement->execute();

    $show = $statement->fetchAll();
    $statement->closeCursor();

    return $show;
}


/* EXCLUSIVE TV SHOWS */
function exclusive_tv_show($branch) {
    global $db;

    $genre_call = tv_genre_collections($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 2
              AND genre_id = :genre_call
              AND access = "Exclusive"';

    $statement = $db->prepare($query);
    $statement->bindValue(':genre_call', $genre_call);
    $statement->execute();

    $show = $statement->fetchAll();
    $statement->closeCursor();

    return $show;
}


/* ALL TV SHOWS */
function all_tv_show($branch) {
    global $db;

    $genre_call = tv_genre_collections($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 2';

    if ($genre_call !== null) {
        $query .= ' AND genre_id = :genre_call';
    }

    $statement = $db->prepare($query);

    if ($genre_call !== null) {
        $statement->bindValue(':genre_call', $genre_call);
    }

    $statement->execute();

    $show = $statement->fetchAll();
    $statement->closeCursor();

    return $show;
}

?>
