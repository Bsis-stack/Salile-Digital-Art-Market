
<?php
if (!isset($_SESSION['username'])) {
    header('Location: index.php?action=salile');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Comedy Type - Salile Digital Art Market</title>
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

            <h2>
                <?php echo htmlspecialchars(ucfirst(str_replace('_', '-', $branch))); ?> Comedy
            </h2>

            <?php include('partViews/comedy_aside.php'); ?>

            <div style="clear: both;"></div>

            <?php
            if ($branch === 'stand_up') {
                $artists = [
                    'Kevin Hart',
                    'Chris Rock',
                    'Dave Chappelle',
                    'Trevor Noah',
                    'Ricky Gervais',
                    'Russell Peters'
                ];
            }
            elseif ($branch === 'roast') {
                $artists = [
                    'Jeff Ross',
                    'Don Rickles',
                    'Lisa Lampanelli',
                    'Jimmy Carr',
                    'Ricky Gervais',
                    'Frankie Boyle'
                ];
            }
            elseif ($branch === 'satire') {
                $artists = [
                    'George Carlin',
                    'Jon Stewart',
                    'Stephen Colbert',
                    'John Oliver',
                    'Trevor Noah',
                    'Armando Iannucci'
                ];
            }
            elseif ($branch === 'slapstick') {
                $artists = [
                    'Buster Keaton',
                    'Harold Lloyd',
                    'Lucille Ball',
                    'Charlie Chaplin',
                    'Rowan Atkinson',
                    'Jacques Tati'
                ];
            }
            else {
                $artists = [];
            }
            ?>

            <?php foreach ($artists as $artist): ?>

                <h3><?php echo htmlspecialchars($artist); ?></h3>

                <?php $comedies = get_comedy_by_artist($branch, $artist); ?>

                <table border="1">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Cover</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($comedies as $comedy): ?>
                            <tr>
                                <td>
                                    <?php echo htmlspecialchars($comedy['title']); ?>
                                </td>

                                <td>
                                    <?php if (!empty($comedy['image'])): ?>
                                        <img
                                            src="<?php echo htmlspecialchars($comedy['image']); ?>"
                                            width="100"
                                            alt="Comedy cover"
                                        >
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            <?php endforeach; ?>

        </section>

    </main>

    <?php include('partViews/footer.php'); ?>

    <script src="Scripts/date.js"></script>

</body>
</html>
