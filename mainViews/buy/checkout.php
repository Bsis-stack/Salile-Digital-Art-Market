
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Salile Checkout - Salile Digital Art Market</title>

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="Styles/nav.css">
    <link rel="stylesheet" href="styles/buy.css">
</head>

<body>

    <?php include('partViews/header.php'); ?>

    <?php
    $nav_page = 'shopping';
    include('partViews/nav.php');
    ?>

    <main class="buy_main">

        <section class="buy_type">

            <h1>Salile Checkout</h1>

            <h2>Review Your Order</h2>

            <?php if (!empty($ca)) { ?>

                <?php foreach ($ca as $i) { ?>

                    <p>
                        Product ID:
                        <?php echo htmlspecialchars($i['product_id']); ?>
                    </p>

                    <p>
                        Title:
                        <?php echo htmlspecialchars($i['title']); ?>
                    </p>

                    <p>
                        Price: $
                        <?php echo number_format($i['price'], 2); ?>
                    </p>

                    <hr>

                <?php } ?>

                <h3>
                    Subtotal: $
                    <?php echo number_format($to, 2); ?>
                </h3>

                <h3>
                    Discount: -$
                    <?php echo number_format($d, 2); ?>
                </h3>

                <h2>
                    Final Total: $
                    <?php echo number_format($final_total, 2); ?>
                </h2>

                <form action="index.php" method="post">

                    <input type="hidden"
                           name="action"
                           value="confirm_order">

                    <input type="hidden"
                           name="deal"
                           value="<?php echo htmlspecialchars($deal); ?>">

                    <button type="submit">
                        Confirm Order
                    </button>

                </form>

            <?php } else { ?>

                <p>Your shopping cart is empty.</p>

            <?php } ?>

            <p>
                <a href="index.php?action=buy&deal=<?php echo urlencode($deal); ?>">
                    Back to Shopping Cart
                </a>
            </p>

        </section>

    </main>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>

</body>
</html>
