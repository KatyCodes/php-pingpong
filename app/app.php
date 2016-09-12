<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGen.php";

    session_start();
    if (empty($_SESSION['numbersArray'])) {
        $_SESSION['numbersArray'] = array();
    }

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

  //loads actual twig file
    $app->get("/", function() use ($app) {
      return $app['twig']->render("home.html.twig");
    });

  //loads basic php
    $app->post("/final", function() use ($app) {
      //instantiate object
      $newNumber = new PingPongGen;
      //stores user input, runs listNumbers on it, runs pingfunction on that, stores as new variable
      $newNumber2 = $newNumber->pingFunction($newNumber->listNumbers($_POST['userInput']));
      $newNumber->save();
      return $app['twig']->render("final.html.twig", array('this_number' => $newNumber2));
    });

    return $app;
?>
