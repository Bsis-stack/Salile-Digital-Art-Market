
<?php
if (!isset($_SESSION['username'])) {
    header('Location: index.php?action=salile');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us - Salile</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="Styles/nav.css">
</head>
<body>

    <?php include('partViews/header.php'); ?>

    <?php include('partViews/nav.php'); ?>

    <main class="main">

        <section class="conP">

            <h2>CONTACT SALILE</h2>

            <p>Thank you for contacting Salile!</p>

            <p>If you need further assistance, you can reach us using the contact information below.</p>

            <h3 id="conT"></h3>
            <div id="conI"></div>

        </section>

    </main>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>
    <script src="scripts/contact.js"></script>

</body>
</html>
