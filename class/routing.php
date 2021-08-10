<?php 

class MyRoute {
    function Get_my_route($route) {
        $routes = [
            '/'. 'routing/'     =>  "public/home.php",
            "/routing/about"     =>  "public/about.php",
            "/routing/contacts"  =>  "public/contacts.php",
            '/routing/post/' . $i   =>  "public/home.php?post=" . $i,
          ];
        
        if(array_key_exists($route, $routes)){
            include $routes[$route]; exit;
        }
        else {
            print(404) . '<br>';
        }
    }
}


?>