
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
    <title>Music List - Salile Digital Art Market</title>

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

            <a href="index.php?action=music">All Music</a>

            <section class="music_genre">

                <h3>
                    <?php
                    $j = [
                        'country' => 'Country',
                        'pop' => 'Pop',
                        'reggae' => 'Reggae',
                        'rock' => 'Rock'
                    ];

                    echo $j[$branch] ?? 'Music';
                    ?>
                </h3>

                <div class="music_albums">

                    <?php foreach ($music as $album): ?>

                        <div class="music_album">

                            <img
                                src="<?php echo htmlspecialchars($album['image']); ?>"
                                alt="<?php echo htmlspecialchars($album['title']); ?>"
                                width="150"
                            >

                            <p><?php echo htmlspecialchars($album['title']); ?></p>

                            <p>$<?php echo htmlspecialchars($album['price']); ?></p>

                        </div>

                    <?php endforeach; ?>

                </div>

            </section>

        </section>

    </main>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>

</body>
</html>
