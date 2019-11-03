<?php
/**
 *
 * Routes to ease development and debugging.
 * The ip controller
 *
 */

return [
    "routes" => [
        [
            "info" => "Development and debugging information.",
            "mount" => "ipC",
            "handler" => "\Anax\IpController\IpController",
        ],
    ]
];
