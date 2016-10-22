<?php
return [
    //"layout" => "entrust-gui::app",
    "layout" => "layouts.app",
    "route-prefix" => "admin",
    "pagination" => [
        "users" => 5,
        "roles" => 5,
        "permissions" => 5,
    ],
    "middleware" => ['web', 'entrust-gui.admin'],
    "unauthorized-url" => '/login',
    //"middleware-role" => 'admin',
    "middleware-role" => 'maker',
    "confirmable" => false,
];
