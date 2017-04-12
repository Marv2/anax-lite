<?php
/**
 * Routes.
 */
 $app->router->add("about", function () use ($app) {
     $app->view->add("take1/header", ["title" => "About"]);
     $app->view->add("take1/navbar");
     $app->view->add("take1/about"); //add view about.php

     $app->response->setBody([$app->view, "render"])
                   ->send();
 });

/*
$app->router->add("about", function () use ($app) {
    $urlHome  = $app->url->create("");
    $urlAbout = $app->url->create("about");
    $navbar = <<<EOD
<navbar>
    <a href="$urlHome">Home</a> |
    <a href="$urlAbout">About</a>
</navbar>
EOD;

    $body = <<<EOD
<!doctype html>
<meta charset="utf-8">
<title>Home</title>
$navbar
<h1>About</h1>
<p>This is the aboutpage.</p>
EOD;

    //Let the class response handle the print and response headers
    //echo $body;
    $app->response->setBody($body)
                    ->send(); //statuscode
});
*/
