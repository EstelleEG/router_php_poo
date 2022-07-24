<?php

require("./Entity/Personne.php");

Class PersonneRepository
{
    public function findAll()
    {
        $conn = Db::getConnection();
        $query = $conn->prepare("SELECT * FROM personne;");

        //we execute the query
        $query->execute();

        //fetch all the data and store the result in an associative array 
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $personnes = [];

        foreach($results as $result) {
            $personne = new Personne();
            $personne->setId($result["id"]);
            $personne->setFirstname($result["firstname"]);
            $personne->setName($result["name"]);
            $personne->setAge($result["age"]);
            
            array_push($personnes, $personne);
        }

        return $personnes;
    }

    public function edit()
    {
        
    }
}