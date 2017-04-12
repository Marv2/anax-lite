<?php
/**
 * Routes.
 */
 $app->router->add("", function () use ($app) {
     $app->view->add("take1/header", ["title" => "Home"]);
     $app->view->add("take1/navbar");
     $app->view->add("take1/home");

     $app->response->setBody([$app->view, "render"])
                   ->send();
 });
/*
$app->router->add("", function () use ($app) {
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
<h1>Home</h1>
<p>This is the homepage.</p>
EOD;

    //Let the class response handle the print and response headers
    //echo $body;
    $app->response->setBody($body)
                    ->send(); //statuscode
});
*/
