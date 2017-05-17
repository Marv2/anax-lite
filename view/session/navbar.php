<?php
    $app->navbar = new Marv\Navbar\Navbar();
    $app->navbar->setApp($app);
    $app->navbar->configure("navbar-session.php");
?>

<navbar class="navbar">
    <?= $app->navbar->getMHTML(); ?>
</navbar>
