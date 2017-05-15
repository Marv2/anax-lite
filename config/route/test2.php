<?php
// Routen skapar en specifik vy för layouten och renderar endast den.
// Layout-vyn renderar sedan i sin tur innehåll i respektive region, om det finns.
$app->router->add("test2", function () use ($app) {
    // Create default data set to send to the layout
    $data = [
        "title" => "Test 2",
        "message" => "Testing regions"
    ];

    // Add the layout view to its own region
    $app->view->add("view/layout", $data, "layout");

    // Add views to a specific region
    $app->view->add("view/block", ["region" => "flash1"], "flash", 0);
    $app->view->add("view/block", ["region" => "flash2"], "flash", 1);
    $app->view->add("view/block-img", ["region" => "main1"], "main", 1);
    $app->view->add("view/block", ["region" => "main2"], "main", 0);
    $app->view->add("view/block", ["region" => "footer1"], "footer", 0);
    $app->view->add("view/block", ["region" => "footer2"], "footer", 1);

    // Render the layout view and send the response
    $body = $app->view->renderBuffered("layout");
    $app->response->setBody($body)
                  ->send();
});
