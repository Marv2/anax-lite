<?php
/**
 * Routes.
 */
 $app->router->add("", function () use ($app) {
     $app->view->add("take1/header", ["title" => "Startsida"]);
     $app->view->add("navbar2/navbar");
     $app->view->add("take1/home");
     $app->view->add("take1/footer");

     $app->response->setBody([$app->view, "render"])
                   ->send();
 });
