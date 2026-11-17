
<?php

function search_products($keyword) {

    global $db;

    $query = 'SELECT * FROM products
              WHERE title LIKE :title
              OR artist LIKE :artist
              ORDER BY title';

    $statement = $db->prepare($query);

    $statement->bindValue(':title', '%' . $keyword . '%');
    $statement->bindValue(':artist', '%' . $keyword . '%');

    $statement->execute();

    $pro = $statement->fetchAll();
    $statement->closeCursor();

    return $pro;
}

?>
