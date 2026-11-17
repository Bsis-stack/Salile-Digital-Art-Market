
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
    <title>Podcast Type - Salile Digital Art Market</title>

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="Styles/nav.css">
    <link rel="stylesheet" href="styles/podcast.css">
</head>

<body>

    <?php include('partViews/header.php'); ?>

    <?php include('partViews/nav.php'); ?>

    <main class="podcast_main">

        <?php include('partViews/aside.php'); ?>

        <section class="podcast_type">

            <h2>Podcasts</h2>

            <h3>
                <?php echo htmlspecialchars(ucfirst($branch)); ?> -
                <?php echo htmlspecialchars(ucfirst($member)); ?> Podcasts
            </h3>

            <?php include('partViews/podcast_aside.php'); ?>

            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Cover</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($podcasts as $podcast): ?>
                        <tr>
                            <td>
                                <?php echo htmlspecialchars($podcast['title']); ?>
                            </td>

                            <td>
                                <img
                                    src="<?php echo htmlspecialchars($podcast['image']); ?>"
                                    width="100"
                                    alt="Podcast cover"
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
