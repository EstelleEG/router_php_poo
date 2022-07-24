<?php

echo '<div style="display:flex; flex-wrap:wrap;">';

foreach($personnes as $personne) {

    if ($personne->isValid()) {
        echo '<div style="width:200px; border:1px grey solid;">';
    } else {
        echo '<div style="width:200px; border:3px red solid;">';
    }
    
    echo "<p>Id = " . $personne->getId() . "</p>";
    echo "<p>Nom = " . $personne->getName() . "</p>";
    echo "<p>Prenom = " . $personne->getFirstname() . "</p>";
    echo "<p>Age = " . $personne->getAge() . "</p>";
    echo "</div>";
}

echo "</div>";