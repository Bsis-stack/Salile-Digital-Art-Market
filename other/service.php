
<?php
if (!isset($_SESSION['username'])) {
    header('Location: index.php?action=salile');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Other Services - Salile</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="Styles/nav.css">
</head>
<body>

    <?php include('partViews/header.php'); ?>

    <?php include('partViews/nav.php'); ?>

    <main class="main">

        <section class="services">

            <h2>SALILE OTHER SERVICES</h2>

            <p>Explore additional learning opportunities and creative resources.</p>

            <h3>Guitar Learning</h3>
            <p><a href="https://www.justinguitar.com/" target="_blank" rel="noopener noreferrer">Learn Guitar</a></p>

            <h3>Music Learning</h3>
            <p><a href="https://www.musictheory.net/" target="_blank" rel="noopener noreferrer">Learn Music Theory</a></p>

            <h3>Art Training</h3>
            <p><a href="https://www.proko.com/" target="_blank" rel="noopener noreferrer">Explore Art Lessons</a></p>

            <h3>Vocal Training</h3>
            <p><a href="https://www.youtube.com/results?search_query=vocal+training+lessons" target="_blank" rel="noopener noreferrer">Explore Vocal Lessons</a></p>

            <h3>Drum Training</h3>
            <p><a href="https://www.drumeo.com/" target="_blank" rel="noopener noreferrer">Learn Drums</a></p>

            <h3>Gifts & Creative Resources</h3>
            <p><a href="https://www.etsy.com/" target="_blank" rel="noopener noreferrer">Explore Creative Gifts</a></p>

        </section>

    </main>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>

</body>
</html>
