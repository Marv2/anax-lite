<?php
$app->router->add("test1", function () use ($app) {

    //$app->view->add("view/header", ["title" => "Test1"]);

    // Add view and variable
    $app->view->add("test1/test1", [
        "title" => "Test 1",
        "copyright" => "Hello Inc",
        "message" => "Hej världen!",
        "answer" => 42
    ]);

    //$app->view->add("view/footer");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});
