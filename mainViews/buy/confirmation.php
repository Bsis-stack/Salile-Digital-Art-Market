
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Confirmation - Salile Digital Art Market</title>

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="Styles/nav.css">
    <link rel="stylesheet" href="styles/confirmation.css">
</head>

<body>

    <?php include('partViews/header.php'); ?>

    <?php
    $nav_page = 'shopping';
    include('partViews/nav.php');
    ?>

    <main class="confirmation_main">

        <section class="confirmation_type">

            <h1>Salile Order Confirmation</h1>

            <h2>🎉 Order Confirmed!</h2>

            <p>
                Thank you for choosing Salile Digital Art Market.
            </p>

            <p>
                Your order has been successfully confirmed.
            </p>

            <p>
                Your shopping cart is now empty.
            </p>

            <a href="index.php?action=buy">
                Continue Shopping
            </a>

        </section>

    </main>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>

</body>
</html>
