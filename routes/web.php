<?php

$router->get('/', function () {
    require __DIR__ . '/../views/welcome.php';
});

$router->get('/about', function () {
    require __DIR__ . '/../views/about.php';
});

/*
Explicație: Definim două rute simple — una pentru / și una pentru /about.
Explanation: We define two simple routes — one for / and one for /about.
*/