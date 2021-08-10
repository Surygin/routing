<?php

include('class/routing.php');

$route = new MyRoute();
$route->Get_my_route($_SERVER['REQUEST_URI']);

#var_dump($routes[$route]); print('<br>');
#var_dump($route);