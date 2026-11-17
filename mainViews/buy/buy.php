
<?php
$deal = $_SESSION['deal'] ?? 'regular';

$deals = [
    'blue' => ['name' => 'Blue Deal', 'quantity' => 1, 'discount' => 5],
    'gold' => ['name' => 'Gold Deal', 'quantity' => 2, 'discount' => 10],
    'diamond' => ['name' => 'Diamond Deal', 'quantity' => 3, 'discount' => 20]
];

if (!isset($deals[$deal])) {
    $deal = 'regular';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Salile Buyout - Salile Digital Art Market</title>
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

            <h1>Welcome to Salile Buyout</h1>

            <?php if ($deal === 'regular') { ?>

                <h2>Buy Your Favorite Digital Products</h2>
                <p>Select any digital product using its Product ID.</p>

            <?php } else { ?>

                <h2><?php echo $deals[$deal]['name']; ?></h2>

                <p>
                    Select <?php echo $deals[$deal]['quantity']; ?>
                    Movie(s), TV Show(s), and Music Album(s)
                    to receive a $<?php echo $deals[$deal]['discount']; ?> discount.
                </p>

            <?php } ?>

            <h3>Enter Product ID</h3>

            <form action="index.php" method="get">

                <input type="hidden" name="action" value="buy">

                <input type="hidden" name="deal"
                       value="<?php echo htmlspecialchars($deal); ?>">

                <input type="number" name="product_id"
                       placeholder="Enter Product ID" min="1" required>

                <button type="submit">Select Product</button>

            </form>

            <?php if ($pro) { ?>

                <h2>Selected Product</h2>

                <p>
                    Product ID:
                    <?php echo htmlspecialchars($pro['product_id']); ?>
                </p>

                <p>
                    Title:
                    <?php echo htmlspecialchars($pro['title']); ?>
                </p>

                <p>
                    Artist:
                    <?php echo htmlspecialchars($pro['artist'] ?? 'N/A'); ?>
                </p>

                <p>
                    Price: $
                    <?php echo htmlspecialchars($pro['price']); ?>
                </p>

                <p>
                    Region:
                    <?php echo htmlspecialchars($pro['region']); ?>
                </p>

                <p>
                    Access:
                    <?php echo htmlspecialchars($pro['access']); ?>
                </p>

                <form action="index.php" method="post">

                    <input type="hidden" name="action" value="add_cart">

                    <input type="hidden" name="product_id"
                           value="<?php echo htmlspecialchars($pro['product_id']); ?>">

                    <input type="hidden" name="deal"
                           value="<?php echo htmlspecialchars($deal); ?>">

                    <button type="submit">Add to Cart</button>

                </form>

            <?php } elseif (isset($_GET['product_id'])) { ?>

                <p>Sorry, we couldn't find that Product ID.</p>

            <?php } ?>

            <hr>

            <h2>Your Shopping Cart</h2>

            <?php if (!empty($cart)) { ?>

                <?php foreach ($cart as $item) { ?>

                    <p>
                        Product ID:
                        <?php echo htmlspecialchars($item['product_id']); ?>
                    </p>

                    <p>
                        Title:
                        <?php echo htmlspecialchars($item['title']); ?>
                    </p>

                    <p>
                        Price: $
                        <?php echo number_format($item['price'], 2); ?>
                    </p>

                    <form action="index.php" method="post">

                        <input type="hidden" name="action" value="remove_cart">

                        <input type="hidden" name="product_id"
                               value="<?php echo htmlspecialchars($item['product_id']); ?>">

                        <button type="submit">Remove</button>

                    </form>

                    <hr>

                <?php } ?>

                <h3>
                    Subtotal: $
                    <?php echo number_format($total, 2); ?>
                </h3>

                <?php if ($deal !== 'regular') { ?>

                    <?php if ($discount > 0) { ?>

                        <p>Bundle Deal Applied!</p>

                    <?php } else { ?>

                        <p>
                            Your bundle requirements are not yet complete.
                            Add the required Movies, TV Shows, and Music Albums
                            to receive your discount.
                        </p>

                    <?php } ?>

                <?php } ?>

                <h3>
                    Discount: -$
                    <?php echo number_format($discount, 2); ?>
                </h3>

                <h2>
                    Final Total: $
                    <?php echo number_format($final_total, 2); ?>
                </h2>

                <form action="index.php" method="get">

                    <input type="hidden"
                           name="action"
                           value="checkout">

                    <input type="hidden"
                           name="deal"
                           value="<?php echo htmlspecialchars($deal); ?>">

                    <button type="submit">
                        Proceed to Checkout
                    </button>

                </form>

            <?php } else { ?>

                <p>Your shopping cart is empty.</p>

            <?php } ?>

        </section>

    </main>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>

</body>
</html>
