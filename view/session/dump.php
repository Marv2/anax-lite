<?php
/*
* Dump session variable
*/

$sessionName = "ANAXSESSION";
$app->session = new Marv\Session\Session($sessionName);
$app->session->start();

?>
<article>
    <h1>En dump av sessionsvariablerna</h1>
    <pre><?= $app->session->dump(); ?></pre>
</article>
