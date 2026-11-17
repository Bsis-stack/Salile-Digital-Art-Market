
<?php
if (!isset($_SESSION['username'])) {
    header('Location: index.php?action=salile');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Salile Support</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="Styles/nav.css">
    <link rel="stylesheet" href="Styles/support.css">
</head>
<body>

    <?php include('partViews/header.php'); ?>

    <?php include('partViews/nav.php'); ?>

    <main class="main">
        <section>
            <h2>Frequently Asked Questions</h2>

            <div id="faqs">

                <h3>How do I subscribe to Salile?</h3>
                <div>
                    <p>Salile offers subscription options for accessing digital entertainment.</p>
                </div>

                <h3>Can I buy digital products without subscribing?</h3>
                <div>
                    <p>Yes. You can purchase individual movies, music, TV shows, and other digital products without a subscription.</p>
                </div>

                <h3>What types of digital art does Salile offer?</h3>
                <div>
                    <p>Salile offers music, movies, TV shows, comedy, podcasts, digital books, and more.</p>
                </div>

                <h3>Does Salile offer discounts?</h3>
                <div>
                    <p>Yes. Salile offers Blue, Gold, and Diamond deals with discounts on eligible purchases.</p>
                </div>

                <h3>How can I contact Salile?</h3>
                <div>
                    <p>Visit CONTACT US to find email, phone, and social media contact information.</p>
                </div>

            </div>
        </section>
    </main>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>
    <script src="scripts/support.js"></script>

</body>
</html>
