
<?php
if (!isset($_SESSION['username'])) {
    header('Location: index.php?action=salile');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Popular TV Shows - Salile</title>
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

            <h2>Popular</h2>
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
                    <?php foreach ($show as $s): ?>
                        <tr>
                            <td>
                                <?= htmlspecialchars($s['title']) ?>
                            </td>

                            <td>
                                <img
                                    src="<?= htmlspecialchars($s['image_path']) ?>"
                                    width="100"
                                    alt="<?= htmlspecialchars($s['title']) ?>"
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
