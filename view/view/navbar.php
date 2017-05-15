<?php
    $app->navbar = new Marv\Navbar\Navbar();
    $app->navbar->setApp($app);
    $app->navbar->configure("navbar-session.php");
?>

<nav class="navbar">
    <?= $app->navbar->getMHTML(); ?>
</nav>
