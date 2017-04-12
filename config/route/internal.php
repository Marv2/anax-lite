<?php
/**
 * Internal Routes.
 */
 $app->router->addInternal("404", function () use ($app) {
     $app->view->add("take1/header", ["title" => "404"]);
     //$app->view->add("take1/navbar");
     $app->view->add("take1/404");
     $app->response->setBody([$app->view, "render"])
                   ->send(404);
 });

 /*
$app->router->addInternal("404", function () use ($app) {
    $currentRoute = $app->request->getRoute();
    $routes = "<ul>";
    foreach ($app->router->getAll() as $route) {
        $routes .= "<li>'" . $route->getRule() . "'</li>";
    }
    $routes .= "</ul>";

    $intRoutes = "<ul>";
    foreach ($app->router->getInternal() as $route) {
        $intRoutes .= "<li>'" . $route->getRule() . "'</li>";
    }
    $intRoutes .= "</ul>";

    $body = <<<EOD
<!doctype html>
<meta charset="utf-8">
<title>404</title>
<h1>404 Not Found</h1>
<p>The route '$currentRoute' could not be found!</p>
<h2>Routes loaded</h2>
<p>The following routes are loaded:</p>
$routes
<p>The following internal routes are loaded:</p>
$intRoutes
EOD;

    //Let the class response handle the print and response headers
    //echo $body;
    $app->response->setBody($body)
                    ->send(404); //statuscode
});

*/
