<?php

$route = $_SERVER['REQUEST_URI'];

$routes = [
  '/' . 'routing/'     =>  "/public/home.php",
  "/routing/about"     =>  "/public/about.php",
  "/routing/contacts"  =>  "/public/contacts.php"
];

var_dump($routes[$route]); print('<br>');
var_dump($route);

if(array_key_exists($route, $routes)){
  include($routes[$route]); exit;
}
else {
  print(404) . '<br>';
}