<?php
$sessionName = "ANAXSESSION";
$app->session = new Marv\Session\Session($sessionName);
$app->session->start();


$num = $app->session->get("number");

if ($num === false) {
    $app->session->set("number", 0);
    $num = $app->session->get("number");
}

?>
<article>
    <h1>Testa sessionen välj en väg</h1>
    <h2>Current nuber: <?= $num ?></h2>
</article>
