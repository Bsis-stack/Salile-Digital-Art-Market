
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="Styles/nav.css">
    <link rel="stylesheet" href="styles/login.css">
</head>

<body>

    <?php include('partViews/header.php'); ?>

    <?php include('partViews/nav.php'); ?>

    <main class="log">

        <form id="logF" class="form">

            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <br>

            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <br>

            <button type="submit">Log In</button>

        </form>

        <div id="res" class="err"></div>

    </main>

    <script src="Scripts/login.js"></script>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>

</body>
</html>
