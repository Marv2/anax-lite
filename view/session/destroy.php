<?php

$sessionName = "ANAXSESSION";
$app->session = new Marv\Session\Session($sessionName);
$app->session->start();

$app->session->destroy();

header("Location: ../session/dump");
exit;
