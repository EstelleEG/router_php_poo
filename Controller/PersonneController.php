<?php

require("./Repository/PersonneRepository.php");

Class PersonneController
{
    public function findAll(PersonneRepository $repository)
    {
        $personnes = $repository->findAll();

        //Appel de la vue
        require("./Template/Personne/findAll.php");
    }

    public function edit()
    {
        echo "Edit one personne";
    }
}