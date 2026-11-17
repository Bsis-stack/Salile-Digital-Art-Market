
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
    <title>Music - Salile Digital Art Market</title>

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="Styles/nav.css">
    <link rel="stylesheet" href="styles/music.css">
</head>

<body>

    <?php include('partViews/header.php'); ?>

    <?php include('partViews/nav.php'); ?>

    <main class="music_main">

        <?php include('partViews/aside.php'); ?>

        <section class="music_type">

            <h2>Music</h2>

            <?php include('partViews/music_nav.php'); ?>

            <?php
            $j = [
                'country' => 'Country',
                'pop' => 'Pop',
                'reggae' => 'Reggae',
                'rock' => 'Rock'
            ];
            ?>

            <?php foreach ($j as $ge => $name): ?>

                <section class="music_genre">

                    <h3>Recommended <?php echo $name; ?> Music</h3>

                    <a href="index.php?action=music&branch=<?php echo $ge; ?>">
                        See All
                    </a>

                    <div class="music_albums">

                        <?php foreach (($recommendations[$ge] ?? []) as $album): ?>

                            <div class="music_album">

                                <img
                                    src="<?php echo htmlspecialchars($album['image']); ?>"
                                    alt="<?php echo htmlspecialchars($album['title']); ?>"
                                    width="150"
                                >

                                <p><?php echo htmlspecialchars($album['title']); ?></p>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </section>

            <?php endforeach; ?>

        </section>

    </main>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>

</body>
</html>
