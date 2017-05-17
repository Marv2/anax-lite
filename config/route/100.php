<?php
/**
 * Routes
 */
 $app->router->add("100", function () use ($app) {

    // Session
    $sessionName = "PLAY100";
    $app->session = new Marv\Dice100\Session($sessionName);
    $app->session->start();

    // Initialize the Game and Round, save in session
    if (!$app->session->has("game")) {
        $app->session->set("game", new Marv\Dice100\Game());
    }

    $app->game = $app->session->get("game");
    $app->game->play($app->session);


    // Prepare and render view
    $app->view->add("take1/header", ["title" => "Spela 100"]);
    $app->view->add("navbar2/navbar");
    $app->view->add("dice100/play100");
    $app->view->add("take1/footer-plain");

    $app->response->setBody([$app->view, "render"])
                  ->send();
 });
