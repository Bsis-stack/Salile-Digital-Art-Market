
<?php

$dsn = 'mysql:host=localhost;dbname=salile_art_shop';
$username = 'YOUR_DATABASE_USERNAME';
$password = 'YOUR_DATABASE_PASSWORD';

try {

    $db = new PDO($dsn, $username, $password);

} catch (PDOException $e) {

    error_log($e->getMessage());
    http_response_code(503);
    include('other/database_error.php');
    exit();

}

?>
