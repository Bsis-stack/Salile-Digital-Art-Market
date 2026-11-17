
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
    <title>USA Movies - Salile Digital Art Market</title>

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="Styles/nav.css">
    <link rel="stylesheet" href="styles/movie.css">
</head>

<body>

    <?php include('partViews/header.php'); ?>

    <?php include('partViews/nav.php'); ?>

    <main class="movie_main">

        <?php include('partViews/aside.php'); ?>

        <section class="movie_type">

            <h2>USA</h2>

            <h3>Choose the movie you want</h3>

            <?php include('partViews/movie_nav.php'); ?>

            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Cover</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($mov as $mo): ?>
                        <tr>
                            <td>
                                <?php echo htmlspecialchars($mo['title']); ?>
                            </td>

                            <td>
                                <img
                                    src="<?php echo htmlspecialchars($mo['image_path']); ?>"
                                    width="100"
                                    alt="Movie cover"
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
