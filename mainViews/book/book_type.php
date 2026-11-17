
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
    <title>Digital Books Type - Salile Digital Art Market</title>

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

            <?php include('partViews/book_nav.php'); ?>

            <h2>Digital Books</h2>

            <h3>
                <?php echo htmlspecialchars(ucfirst(str_replace('_', ' ', $branch))); ?> -
                <?php echo htmlspecialchars(ucfirst($member)); ?> Books
            </h3>

            <table border="1">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Cover</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($books as $book): ?>
                        <tr>
                            <td>
                                <?php echo htmlspecialchars($book['title']); ?>
                            </td>

                            <td>
                                <img
                                    src="<?php echo htmlspecialchars($book['image']); ?>"
                                    width="100"
                                    alt="Book cover"
                                >
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </section>

    </main>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>

</body>
</html>
