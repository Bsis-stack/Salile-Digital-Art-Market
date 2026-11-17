<nav class="movie_main_nav">
    <ul>

        <li>
            <form action="index.php" method="get">

                <input type="hidden" name="action" value="movie">
                <input type="hidden" name="branch" value="romantic">

                <select name="member" onchange="this.form.submit()">
                    <option value="" disabled selected style="display: none;">
                        Romantic
                    </option>

                    <option value="popular">Popular</option>
                    <option value="new">new</option>
                    <option value="exclusive">Exclusive</option>
                    <option value="usa">Usa</option>
                    <option value="international">International</option>
                </select>

            </form>
        </li>


        <li>
            <form action="index.php" method="get">

                <input type="hidden" name="action" value="movie">
                <input type="hidden" name="branch" value="comedy">

                <select name="member" onchange="this.form.submit()">
                    <option value="" disabled selected style="display: none;">
                        Comedy
                    </option>

                    <option value="popular">Popular</option>
                    <option value="new">new</option>
                    <option value="exclusive">Exclusive</option>
                    <option value="usa">Usa</option>
                    <option value="international">International</option>
                </select>

            </form>
        </li>
        
        <!-- DOCUMENTARY -->
<li>
    <form action="index.php" method="get">

        <input type="hidden" name="action" value="movie">
        <input type="hidden" name="branch" value="documentary">

        <select name="member" onchange="this.form.submit()">
            <option value="" disabled selected style="display: none;">
                Documentary
            </option>

            <option value="popular">Popular</option>
            <option value="new">New</option>
            <option value="exclusive">Exclusive</option>
            <option value="usa">USA</option>
            <option value="international">International</option>
        </select>

    </form>
</li>


<!-- ACTION -->
<li>
    <form action="index.php" method="get">

        <input type="hidden" name="action" value="movie">
        <input type="hidden" name="branch" value="action">

        <select name="member" onchange="this.form.submit()">
            <option value="" disabled selected style="display: none;">
                Action
            </option>

            <option value="popular">Popular</option>
            <option value="new">New</option>
            <option value="exclusive">Exclusive</option>
            <option value="usa">USA</option>
            <option value="international">International</option>
        </select>

    </form>
</li>


<!-- ANIMATION -->
<li>
    <form action="index.php" method="get">

        <input type="hidden" name="action" value="movie">
        <input type="hidden" name="branch" value="animation">

        <select name="member" onchange="this.form.submit()">
            <option value="" disabled selected style="display: none;">
                Animation
            </option>

            <option value="popular">Popular</option>
            <option value="new">New</option>
            <option value="exclusive">Exclusive</option>
            <option value="usa">USA</option>
            <option value="international">International</option>
        </select>

    </form>
</li>


<!-- HORROR -->
<li>
    <form action="index.php" method="get">

        <input type="hidden" name="action" value="movie">
        <input type="hidden" name="branch" value="horror">

        <select name="member" onchange="this.form.submit()">
            <option value="" disabled selected style="display: none;">
                Horror
            </option>

            <option value="popular">Popular</option>
            <option value="new">New</option>
            <option value="exclusive">Exclusive</option>
            <option value="usa">USA</option>
            <option value="international">International</option>
        </select>

    </form>
</li>

    </ul>
</nav>