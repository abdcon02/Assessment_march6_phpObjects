<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/book_object.php";

    session_start();
    if (empty($_SESSION['list_of_contacts'])){
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(),
        array('twig.path' => __DIR__.'/../views')
    );

    $app->get("/", function() use($app){

        return $app['twig']->render('booklet.php', array('contacts' => Contact::getAll()));
    });

    $app->post("/new_contact", function() use($app) {
        $new_contact = new Contact($_POST['new_name'], $_POST['new_phone'], $_POST['new_address']);
        $new_contact->save();

        return $app['twig']->render('enter_contact.php', array('newPerson' => $new_contact));
    });


    return $app;

?>
