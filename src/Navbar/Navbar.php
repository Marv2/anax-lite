<?php

namespace Marv\Navbar;

/**
 * Navbar to generate HTML för a navbar from a configuration array.
 */

class Navbar implements
    \Anax\Common\AppInjectableInterface,
    \Anax\Common\ConfigureInterface
{
    use \Anax\Common\AppInjectableTrait;
    use \Anax\Common\ConfigureTrait;
    /**
     * Get HTML for the navbar.
     *
     * @return string as HTML with the navbar.
     */


    public function getMHTML()
    {
        $items = $this->app->navbar->config;
        $html = "<ul>";
        foreach ($items["items"] as $key => $val) {
            $route = $val["route"];
            $selected = $this->app->request->getRoute() === $route ? "selected" : "";
            $url = $this->app->url->create($route);

            $html .= "<li class='$selected'><a href='$url'>$key</a></li>";
        }
        $html .= "</ul>";

        return $html;
    }
}
