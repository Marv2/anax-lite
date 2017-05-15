<?php

$navbar = [

    "config" => [
        "navbar-class" => "navbar"
    ],
    "items" => [
        "start" => [
            "text" => "Start",
            "route" => "",
        ],
        "about" => [
            "text" => "About",
            "route" => "about",
        ],
        "report" => [
            "text" => "Report",
            "route" => "report",
        ],
    ]
];

$navHtml = "";
$navClass = $navbar["config"]["navbar-class"];

// Create url using $app->url->create();
foreach ($navbar["items"] as $items => $item) {
    $nav = $item["route"];
    $url = $app->url->create("$nav");

    $navHtml .= '<li><a href="' . $url . '">' . $item["text"] . '</a></li>';
}
?>

<nav class="<?= $navClass ?>">
    <ul>
        <?= $navHtml ?>
    </ul>
</nav>
