<?php
/**
 * Bootstrap the framework.
 */
// Where are all the files? Booth are needed by Anax.
define("ANAX_INSTALL_PATH", realpath(__DIR__ . "/.."));
define("ANAX_APP_PATH", ANAX_INSTALL_PATH);

// Include essentials
require ANAX_INSTALL_PATH . "/config/error_reporting.php";

// Get the autoloader by using composers version.
require ANAX_INSTALL_PATH . "/vendor/autoload.php";

// Create and use an object of the request class.
// Dump the whole Request object
$request = new \Anax\Request\Request();
$request->init();
// var_dump($request);
//echo "Done";


// Create and init an instance of url.
$url = new \Anax\Url\Url();

// Set default values from the request object.
$url->setSiteUrl($request->getSiteUrl());
$url->setBaseUrl($request->getBaseUrl());
$url->setStaticSiteUrl($request->getSiteUrl());
$url->setStaticBaseUrl($request->getBaseUrl());
$url->setScriptName($request->getScriptName());

// Update url configuration with values from config file.
$url->configure("url.php");
$url->setDefaultsFromConfiguration();

// Create some urls for testing.
// Resource urls are created using $url->asset()
/*
$aUrl = $url->create("");
echo "<p><a href='$aUrl'>The index url, home</a> ($aUrl)";

$aUrl = $url->create("some/route");
echo "<p><a href='$aUrl'>Url to some/route</a> ($aUrl)";

$aUrl = $url->create("some/where/some/route");
echo "<p><a href='$aUrl'>Another url to some/where/some/route</a> ($aUrl)";
*/

// Create the router
$router = new \Anax\Route\RouterInjectable();

// Load the routes
require ANAX_INSTALL_PATH . "/config/route.php";

// Leave to router to match incoming request to routes
$router->handle($request->getRoute(), $request->getMethod());


// Add all resources to $app
$app = new \Marv\App\App();
$app->request = $request;
$app->url     = $url;
$app->router  = $router;
