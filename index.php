<?php

//ROUTER

require("./Controller/PersonneController.php");
require("./Db.php");

//Definition des routes
//Clef = route appellee, valeur = method du controller associee
$routes = [
    "personnes" => "findAll",
    "personnes/edit" => "edit"
];

//Url recuperee dans le navigateur
$urlCalled = $_SERVER["REQUEST_URI"];

//Je coupe le resultat au niveau de /index.php/
//Explode() renvoi un tableau
$exploded = explode("/index.php/", $urlCalled);

//La route demandee est a la clef 1 
$askedRoute = $exploded[1];

$methodToCall = $routes[$askedRoute];
$personneController = new PersonneController();

if ($methodToCall === "findAll") {
    $personneRepo = new PersonneRepository();
    $personneController->findAll($personneRepo);
} elseif ($methodToCall === "edit") {
    $personneController->edit();
}