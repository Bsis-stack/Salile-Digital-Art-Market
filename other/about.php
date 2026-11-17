
<?php
if (!isset($_SESSION['username'])) {
    header('Location: index.php?action=salile');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Salile</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="Styles/nav.css">
</head>
<body>

    <?php include('partViews/header.php'); ?>

    <?php include('partViews/nav.php'); ?>

    <main class="main">

        <section class="about">

            <h2>ABOUT SALILE</h2>

            <h3>1. What is Salile?</h3>
            <p>
                Salile is a digital art marketplace and streaming platform
                designed for art lovers who want to discover, explore, and
                enjoy digital entertainment. Salile gives customers the
                flexibility to subscribe and stream their favorite content
                or purchase individual digital products.
            </p>

            <h3>2. What makes Salile different?</h3>
            <p>
                Salile aims to make digital entertainment more flexible and
                affordable by offering streaming, renting, and purchasing
                options. Customers can choose how they want to enjoy their
                favorite digital art based on their interests and budgets.
                Our goal is to make entertainment accessible even in
                countries where subscription costs may be less affordable.
            </p>

            <h3>3. Where does the name Salile come from?</h3>
            <p>
                The name Salile comes from the name of the creator's parent.
                It was chosen to give the platform a meaningful and personal
                identity. Salile represents creativity, inspiration, and
                the desire to bring digital art to people around the world.
            </p>

            <h3>4. What services does Salile offer?</h3>
            <p>
                Salile brings together different categories of digital
                entertainment, including:
            </p>

            <ul>
                <li>Movies: Popular, new, exclusive, and selected movies.</li>
                <li>TV Shows: Television shows across different genres.</li>
                <li>Music: Different music genres and artists.</li>
                <li>Comedy: Entertaining comedy content.</li>
                <li>Podcasts: Stories, discussions, and informative content.</li>
                <li>Digital Books: Digital reading materials across different genres.</li>
            </ul>

            <h3>5. What is the purpose of Salile?</h3>
            <p>
                The main purpose of Salile is to make discovering and
                enjoying digital entertainment easier, faster, and more
                affordable. Customers can select categories, genres, and
                filters to find their preferred content without spending
                unnecessary time searching.
            </p>
            <p>
                Salile is designed to help customers spend less time
                searching and more time enjoying their favorite art.
            </p>

            <h3>6. Does Salile offer additional services?</h3>
            <p>
                Yes. Salile also provides links to independent learning
                and creative resources, including guitar lessons,
                music education, art training, vocal training, and
                drum lessons.
            </p>

            <h3>7. How does Salile select its digital content?</h3>
            <p>
                Salile aims to prioritize carefully selected, well-reviewed,
                and completed creative works. Our goal is to help customers
                discover high-quality entertainment while providing a
                convenient browsing experience.
            </p>

            <h3>8. What is Salile's vision?</h3>
            <p>
                Salile's vision is to create an affordable and accessible
                digital entertainment platform that connects people with
                the art they love. We believe art is food for the mind.
                Through music, movies, television, books, and other creative
                works, Salile aims to inspire, entertain, and enrich
                people's everyday lives.
            </p>

            <h3>Our Mission</h3>
            <p>
                Our mission is to make digital art and entertainment
                accessible, affordable, and enjoyable by giving customers
                the freedom to discover, stream, rent, or purchase
                the content they love.
            </p>

            <p>
                <strong>Salile - Your entertainment, your choice!</strong>
            </p>

            <p>
                <small>
                    Salile is a portfolio demonstration project.
                    Some services and features represent planned
                    functionality.
                </small>
            </p>

        </section>

    </main>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>

</body>
</html>
