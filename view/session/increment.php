<?php
/*
* Increment session number and redirect back to the route session
*/

$sessionName = "ANAXSESSION";
$app->session = new Marv\Session\Session($sessionName);
$app->session->start();

$num = $app->session->get("number");

if ($num === false) {
    $app->session->set("number", 0);
}

$app->session->increment("number");

header("Location: ../session/");
exit;
