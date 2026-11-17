
<nav class="nav">
    <ul>
        <?php if (($nav_page ?? '') === 'shopping') { ?>

    <li><a href="index.php?action=salile">BACK TO MAIN</a></li>

<?php } else { ?>

    <li><a href="index.php?action=home">HOME</a></li>

<?php } ?>

        <li class="contact_menu">
            <a href="index.php?action=contact">CONTACT US</a>
            <ul class="contact_dropdown">
                <li><a href="index.php?action=contact&method=email">Email</a></li>
                <li><a href="index.php?action=contact&method=phone">Phone</a></li>
                <li><a href="index.php?action=contact&method=fax">Fax</a></li>
                <li><a href="index.php?action=contact&method=telegram">Telegram</a></li>
                <li><a href="index.php?action=contact&method=facebook">Facebook</a></li>
                <li><a href="index.php?action=contact&method=instagram">Instagram</a></li>
            </ul>
        </li>

        <li><a href="index.php?action=support">SUPPORT</a></li>
        
<li><a href="index.php?action=services">OTHER SERVICES</a></li>

        <li><a href="index.php?action=about">ABOUT</a></li>
    </ul>
</nav>
