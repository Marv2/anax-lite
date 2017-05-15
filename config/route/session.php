<?php
/**
 * Session Routes
 */
$app->router->add("session", function () use ($app) {
    $app->view->add("take1/header", ["title" => "Session"]);
    $app->view->add("navbar2/navbar");
    $app->view->add("session/navbar");
    $app->view->add("session/session");
    $app->view->add("take1/footer-plain");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});

$app->router->add("session/increment", function () use ($app) {
    $app->view->add("take1/header", ["title" => "Increment"]);
    $app->view->add("navbar2/navbar");
    $app->view->add("session/navbar");
    $app->view->add("session/increment");
    $app->view->add("take1/footer-plain");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});

$app->router->add("session/decrement", function () use ($app) {
    $app->view->add("take1/header", ["title" => "Decrement"]);
    $app->view->add("navbar2/navbar");
    $app->view->add("session/navbar");
    $app->view->add("session/decrement");
    $app->view->add("take1/footer-plain");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});


//Send serverinfo as Json response
$app->router->add("session/status", function () use ($app) {
    $app->session = new Marv\Session\Session("ANAXSESSION");
    $app->session->start();
    $data = [
        "Session name" => session_name(),
        "Session id" => session_id(),
        "Session status" => session_status()
    ];
    $app->response->sendJson($data);
});


$app->router->add("session/dump", function () use ($app) {
    $app->view->add("take1/header", ["title" => "Dump"]);
    $app->view->add("navbar2/navbar");
    $app->view->add("session/navbar");
    $app->view->add("session/dump");
    $app->view->add("take1/footer-plain");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});


$app->router->add("session/destroy", function () use ($app) {
    $app->view->add("take1/header", ["title" => "Destroy"]);
    $app->view->add("session/destroy");
    $app->view->add("take1/footer-plain");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});
