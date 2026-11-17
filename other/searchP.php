
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results - Salile Digital Art Market</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="Styles/nav.css">
</head>
<body>

    <?php include('partViews/header.php'); ?>

    <?php include('partViews/nav.php'); ?>

    <main class="main">

        <section>

            <h2>Search Results</h2>

            <h3>
                Results for:
                <?php echo htmlspecialchars($keyword); ?>
            </h3>

            <?php if (!empty($pro)) { ?>

                <?php foreach ($pro as $p) { ?>

                    <h3>
                        <?php echo htmlspecialchars($p['title']); ?>
                    </h3>

                    <p>
                        Artist:
                        <?php echo htmlspecialchars($p['artist'] ?? 'N/A'); ?>
                    </p>

                    <p>
                        Price: $
                        <?php echo htmlspecialchars($p['price']); ?>
                    </p>

                    <p>
                        Region:
                        <?php echo htmlspecialchars($p['region']); ?>
                    </p>

                    <p>
                        Access:
                        <?php echo htmlspecialchars($p['access']); ?>
                    </p>

                    <hr>

                <?php } ?>

            <?php } else { ?>

                <h3>
                    Sorry, we don't have this item available right now.
                </h3>

                <p>
                    Please try searching for another title or artist.
                </p>

            <?php } ?>

        </section>

    </main>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>

</body>
</html>
