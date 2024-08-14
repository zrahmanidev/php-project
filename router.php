<?php

$url = CurrentUrl();

$routes = [
    "/" => "./Controllers/index.php",
    "/about-us" =>  "./Controllers/about.php",
    "/contact" =>   "./Controllers/contact.php",
    "/post" =>   "./Controllers/post.php",


];

maproute($url, $routes);
function maproute($url, $routes)
{

    if (array_key_exists($url, $routes)) {
        require($routes[$url]);
    } else {
        redirecTo(PROJECT_URL);
    }
}
