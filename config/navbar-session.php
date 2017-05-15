<?php
/**
 * Config navbar and create navbar content.
 */
return [
    "config" => [
        "navbar-class" => "navbar"
    ],
    "items" => [
        "session" => [
            "text" => "Session",
            "route" => "session",
        ],
        "increment" => [
            "text" => "Öka siffrans värde",
            "route" => "session/increment",
        ],
        "decrement" => [
            "text" => "Minska siffrans värde",
            "route" => "session/decrement",
        ],
        "status" => [
            "text" => "Status",
            "route" => "session/status",
        ],
        "dump" => [
            "text" => "Dump",
            "route" => "session/dump",
        ],
        "destroy" => [
            "text" => "Destroy",
            "route" => "session/destroy",
        ],
    ]
];
