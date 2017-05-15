<?php
/**
 * Routes
 */
 $app->router->add("100", function () use ($app) {

    $roll = isset($_GET["roll"]) ? htmlspecialchars($_GET["roll"]) : null;
    $save = isset($_GET["save"]) ? htmlspecialchars($_GET["save"]) : null;
    $new = isset($_GET["new"]) ? htmlspecialchars($_GET["new"]) : null;

    // Session
    $sessionName = "PLAY100";
    $app->session = new Marv\Dice\Session($sessionName);
    $app->session->start();

    // Initialize the Game and Round, save in session
    if (!$app->session->has("game")) {
        $app->session->set("game", new Marv\Dice\Game());
    }

    if (!$app->session->has("round")) {
        $app->session->set("round", new Marv\Dice\Round());
    }

    $app->game = $app->session->get("game");
    $app->round = $app->session->get("round");

    // What to do
    if ($roll !== null) {
        $app->game->play($app->round);
    }

    if ($new !== null) {
        $app->session->destroy();
        header('Location: '. $_SERVER['PHP_SELF']);
        exit;
    }

    if ($save !== null) {
        $total = $app->game->getTotal();
        $app->game->saveReset($total);

        $app->session->set("total", $total);
        $app->session->delete("round");

        header('Location: '. $_SERVER['PHP_SELF']);
        exit;
    }

    //Get info from game
    $app->game->getHTML();


    // Prepare and render view
    $app->view->add("take1/header", ["title" => "Spela 100"]);
    $app->view->add("navbar2/navbar");
    $app->view->add("dice100/play100");
    $app->view->add("take1/footer-plain");

    $app->response->setBody([$app->view, "render"])
                  ->send();
 });
