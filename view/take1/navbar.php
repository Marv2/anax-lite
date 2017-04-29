<?php
$urlHome  = $app->url->create("");
$urlAbout = $app->url->create("about");
$urlReport = $app->url->create("report");

?>
<nav>
    <a href="<?= $urlHome ?>">Start</a> |
    <a href="<?= $urlAbout ?>">About</a> |
    <a href="<?= $urlReport ?>">Report</a>
</nav>
