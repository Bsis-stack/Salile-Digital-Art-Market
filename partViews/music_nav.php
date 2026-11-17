
<nav class="music_nav">

    <?php
    $j = [
        'country' => 'All Country',
        'pop' => 'All Pop Songs',
        'reggae' => 'All Reggae Songs',
        'rock' => 'All Rock Songs'
    ];
    ?>

    <?php foreach ($j as $ge => $name): ?>

        <form action="index.php" method="get">

            <input type="hidden" name="action" value="music">
            <input type="hidden" name="branch" value="<?php echo $ge; ?>">

            <select name="member" onchange="this.form.submit()">

                <option value="" disabled selected>
                    <?php echo $name; ?>
                </option>

                <option value="all">All</option>
                <option value="popular">Popular</option>
                <option value="new">New</option>
                <option value="exclusive">top-rated</option>
            </select>

        </form>

    <?php endforeach; ?>

</nav>
