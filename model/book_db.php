
<?php

function book_genre($branch) {
    $j = [
        'comics' => 35,
        'mystery' => 36,
        'fantasy' => 37,
        'romance' => 38,
        'science_fiction' => 39
    ];

    return $j[$branch] ?? null;
}

function popular_book($branch) {
    global $db;
    $ge = book_genre($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 6 AND genre_id = :ge
              AND view >= 1000000';

    $statement = $db->prepare($query);
    $statement->bindValue(':ge', $ge);
    $statement->execute();
    $books = $statement->fetchAll();
    $statement->closeCursor();

    return $books;
}

function recent_book($branch) {
    global $db;
    $ge = book_genre($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 6 AND genre_id = :ge
              AND year >= 2021';

    $statement = $db->prepare($query);
    $statement->bindValue(':ge', $ge);
    $statement->execute();
    $books = $statement->fetchAll();
    $statement->closeCursor();

    return $books;
}

function hot_book($branch) {
    global $db;
    $ge = book_genre($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 6 AND genre_id = :ge
              AND view >= 1000000 AND year >= 2021';

    $statement = $db->prepare($query);
    $statement->bindValue(':ge', $ge);
    $statement->execute();
    $books = $statement->fetchAll();
    $statement->closeCursor();

    return $books;
}

function exclusive_book($branch) {
    global $db;
    $ge = book_genre($branch);

    $query = 'SELECT * FROM products
              WHERE category_id = 6 AND genre_id = :ge
              AND access = "Exclusive"';

    $statement = $db->prepare($query);
    $statement->bindValue(':ge', $ge);
    $statement->execute();
    $books = $statement->fetchAll();
    $statement->closeCursor();

    return $books;
}

?>
