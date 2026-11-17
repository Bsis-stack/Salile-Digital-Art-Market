<nav class="tv_show_main_nav">
    <ul>


        <li>
            <form action="index.php" method="get">

                <input type="hidden" name="action" value="tv_show">
                <input type="hidden" name="branch" value="drama">

                <select name="member" onchange="this.form.submit()">
                    <option value="" disabled selected style="display: none;">
                        Drama
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

        <input type="hidden" name="action" value="tv_show">
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



<li>
    <form action="index.php" method="get">

        <input type="hidden" name="action" value="tv_show">
        <input type="hidden" name="branch" value="comedy">

        <select name="member" onchange="this.form.submit()">
            <option value="" disabled selected style="display: none;">
                Comedy
            </option>

            <option value="popular">Popular</option>
            <option value="new">New</option>
            <option value="exclusive">Exclusive</option>
            <option value="usa">USA</option>
            <option value="international">International</option>
        </select>

    </form>
</li>



<li>
    <form action="index.php" method="get">

        <input type="hidden" name="action" value="tv_show">
        <input type="hidden" name="branch" value="reality">

        <select name="member" onchange="this.form.submit()">
            <option value="" disabled selected style="display: none;">
                reality
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
