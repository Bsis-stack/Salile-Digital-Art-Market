
<?php
if (!isset($_SESSION['username'])) {
    header('Location: index.php?action=salile');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Salile Digital Art Market</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="Styles/nav.css">
</head>
<body>

    <?php include('partViews/header.php'); ?>

    <?php include('partViews/nav.php'); ?>

    <main class="main">

        <?php include('partViews/aside.php'); ?>

        <section>
            <p>Welcome, <?php echo htmlspecialchars($_SESSION['username'] ?? 'User'); ?>!</p>

            <h2>Welcome to Salile Digital Art Market</h2>

            <p>
                Thank you for subscribing to Salile Digital Art Market!
                Welcome to your home page, where you can explore and
                enjoy a wide variety of digital art and entertainment.
                As a subscriber, you have entered a world of movies,
                TV shows, music, comedy, podcasts, digital books,
                and many other exciting products.
            </p>

            <p>
                Subscribing to Salile is one of the best choices
                for anyone who loves art and entertainment.
                Salile brings different worlds of digital art
                together in one place, making it easier for you
                to discover and enjoy the products you love.
                With a single search, you can explore our
                collection without unnecessary difficulty.
            </p>

            <p>
                Salile focuses on bringing highly rated,
                well-reviewed, and carefully organized digital
                products to its subscribers. We believe that
                quality entertainment should be easy to find
                and enjoyable to experience. That is why Salile
                values customer satisfaction and works to bring
                you the best possible digital entertainment.
            </p>

            <p>
                Whether you enjoy watching movies, listening
                to music, exploring digital books, or discovering
                something new, Salile has something for you.
                If you love art and entertainment, you are
                in the right place. Explore your favorite
                categories and enjoy your Salile experience!
            </p>
        </section>

    </main>

    <script src="Scripts/date.js"></script>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>

</body>
</html>
