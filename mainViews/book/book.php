
<?php
if (!isset($_SESSION['username'])) {
    header('Location: index.php?action=salile');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Digital Books - Salile Digital Art Market</title>

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="Styles/nav.css">
    <link rel="stylesheet" href="styles/book.css">
</head>

<body>

    <?php include('partViews/header.php'); ?>

    <?php include('partViews/nav.php'); ?>

    <main class="book_main">

        <?php include('partViews/aside.php'); ?>

        <section class="book_type">

            <h2>Digital Books</h2>

            <h3>Welcome to Digital Books Page</h3>

            <?php include('partViews/book_nav.php'); ?>

        </section>

    </main>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>

</body>
</html>
