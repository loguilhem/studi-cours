<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php echo isCurrentUrl("/index.php"); ?>">
            <a class="nav-link " href="/index.php">Home

            </a>
        </li>
        <li class="nav-item <?php echo isCurrentUrl("/pages/team.php"); ?>">
            <a class="nav-link" href="/pages/team.php">Team</a>
        </li>
        <li class="nav-item <?php echo isCurrentUrl("/pages/about.php"); ?>">
            <a class="nav-link" href="/pages/about.php">About </a>
        </li>
        <li class="nav-item <?php echo isCurrentUrl("/pages/contact.php"); ?>">
            <a class="nav-link" href="/pages/contact.php">Contact</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="get" action="/pages/results.php">
        <input name="items" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
</nav>

