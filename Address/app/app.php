<?php
    require_once __DIR__."/../vendor/autoload.php";
//    require_once __DIR__."/../src/book_object";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "hello";
    });




    return $app;

?>
