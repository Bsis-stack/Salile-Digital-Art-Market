
<?php
if (!isset($_SESSION['username'])) {
    header('Location: index.php?action=salile');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Comedy - Salile Digital Art Market</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="Styles/nav.css">
    <link rel="stylesheet" href="styles/comedy.css">
</head>

<body>

    <?php include('partViews/header.php'); ?>

    <?php include('partViews/nav.php'); ?>

    <main class="comedy_main">

        <?php include('partViews/aside.php'); ?>

        <section class="comedy_type">

            <h2>Comedy Page</h2>

            <h3>Welcome to Our Comedy Section!</h3>

            <h4>
                Select the comedy type you want and the artist you enjoy the most.
                Navigate around and enjoy the comedy!
            </h4>

            <?php include('partViews/comedy_aside.php'); ?>

        </section>

    </main>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>

</body>
</html>
