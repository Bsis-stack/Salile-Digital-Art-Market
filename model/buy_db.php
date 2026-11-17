
<?php

function get_buyout_product($product_id) {

    global $db;

    $query = 'SELECT * FROM products
              WHERE product_id = :product_id';

    $statement = $db->prepare($query);

    $statement->bindValue(':product_id', $product_id, PDO::PARAM_INT);

    $statement->execute();

    $pro = $statement->fetch(PDO::FETCH_ASSOC);

    $statement->closeCursor();

    return $pro;
}

?>
