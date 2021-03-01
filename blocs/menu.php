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
    </ul>
</nav>

