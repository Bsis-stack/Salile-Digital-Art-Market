
<?php

$DE = [
    [
        'tit' => 'Blue Deal',
        'des' => 'If you buy 1 Movie, 1 TV Show, 1 Music album you get $5 discount',
        'T' => 'blue'
    ],
    [
        'tit' => 'Gold Deal',
        'des' => 'If you buy 2 Movies, 2 TV Shows, 2 Music albums you get $10 discount',
        'T' => 'gold'
    ],
    [
        'tit' => 'Diamond Deal',
        'des' => 'If you buy 3 Movies, 3 TV Shows, 3 Music albums you get $20 discount',
        'T' => 'diamond'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Salile Digital Art Market</title>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/salile.css">
</head>

<body>

    <header class="header">

        <a href="index.php?action=login">
            <img src="Images/home/customers.ico"
                 alt="CustomerIcon"
                 style="width: 80px; float: right; filter: brightness(1.5) contrast(1.2) drop-shadow(0 0 8px white);">
        </a>

    </header>

    <main class="main">

        <div class="container">

            <div class="welcome">

                <h1>Welcome to Salile Digital Art Market</h1>

                <p>
                    Already subscribed with us?
                    Please log in by clicking the
                    person icon above to enjoy our
                    digital entertainment services.
                </p>

                <p>
                    Not a subscriber? Don't worry!
                    You can buy your favorite movies,
                    TV shows, music albums, and other
                    digital products without subscribing.
                </p>

                <a href="index.php?action=buy"
                   class="btn-select">
                    Buy Now
                </a>

            </div>

            <h1>Special Bundle Deals</h1>

            <p>
                Want to save more?
                Check out our special bundle deals below.
            </p>

            <div class="carW">

                <?php foreach ($DE as $D): ?>

                    <div class="card">

                        <div>

                            <h2>
                                <?php echo $D['tit']; ?>
                            </h2>

                            <p>
                                <?php echo $D['des']; ?>
                            </p>

                        </div>

                        <div>

                            <a href="index.php?action=buy&amp;deal=<?php echo $D['T']; ?>"
                               class="btn-select">
                                Claim Deal
                            </a>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </main>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>

</body>
</html>
