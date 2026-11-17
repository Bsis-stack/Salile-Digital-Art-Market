<header class="header">


    <?php if (isset($_SESSION['username'])) { ?>
        <a href="logout.php" class="logout">Log Out</a>
    <?php } ?>

    <?php include('partViews/search.php'); ?>

</header>