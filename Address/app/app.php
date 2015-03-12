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

        return $app['twig']->render('booklet.twig', array('contacts' => Contact::getAll()));
    });

    $app->post("/new_contact", function() use($app) {
        $new_contact = new Contact($_POST['new_name'], $_POST['new_phone'], $_POST['new_address'], $_POST['gender']);

// No Duplicates
        if (!in_array($new_contact, Contact::getAll())){
            $new_contact->save();
        }

        return $app['twig']->render('create_contact.twig', array('newPerson' => $new_contact));
    });

    $app->post("/delete_contact", function() use($app){
        Contact::deleteAll();

        return $app['twig']->render('delete_contact.twig');
    });

// Delete Single contact option (PLEASE GOD TELL ME WHY THIS WONT WORK)
    // $app->post("/delete_single_contact", function() use($app){
    //     Contact::deleteSingle($_POST['single_delete']);
    //
    //     return $app['twig']->render('delete_contacts.twig');
    // });




    return $app;

?>
