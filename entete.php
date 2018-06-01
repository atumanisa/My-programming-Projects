<div class="container">
    <nav class="navbar navbar-dark bg-primary fixed-top spacer">
        <a class="navbar-brand mr-auto" href="articles.php">Articles</a>
        <a class="navbar-brand mr-auto" href="client.php">Clients</a>
        <a class="navbar-brand mr-auto" href="ajout_client.php">New-Client</a>
        <a class="navbar-brand mr-auto" href="logout.php">LogOut [<?php echo((isset($_SESSION['PROFILE'])) ? ($_SESSION['PROFILE']['nom']):"") ?>]</a>
    </nav>
</div>


