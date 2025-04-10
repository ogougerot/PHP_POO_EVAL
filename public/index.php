<?php

    // Autoloader des classes de composer
    require __DIR__ . "/../vendor/autoload.php";


    $nom = new App\Classes\Personne("Olivier");
    echo $nom->sePresenter();
