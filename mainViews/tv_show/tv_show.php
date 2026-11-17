
<?php
if (!isset($_SESSION['username'])) {
    header('Location: index.php?action=salile');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>TV Shows - Salile Digital Art Market</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="Styles/nav.css">
    <link rel="stylesheet" href="styles/tv_show.css">
</head>

<body>

    <?php include('partViews/header.php'); ?>

    <?php include('partViews/nav.php'); ?>

    <main class="tv_show_main">

        <?php include('partViews/aside.php'); ?>

        <section class="tv_show_type">

            <h2>TV Shows</h2>
            <h3>Choose the TV show you want</h3>

            <?php include('partViews/tv_show_nav.php'); ?>

            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Cover</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($tv_shows as $show): ?>
                        <tr>
                            <td>
                                <?= htmlspecialchars($show['title']) ?>
                            </td>

                            <td>
                                <img
                                    src="<?= htmlspecialchars($show['image']) ?>"
                                    width="100"
                                    alt="<?= htmlspecialchars($show['title']) ?>"
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
