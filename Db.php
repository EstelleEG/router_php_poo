<?php
//CONNECTION DB
class Db 
{
    public static function getConnection()
    {
        $user = 'root';
        $pass ='root';

        try {
            //CREATE PDO OBJECT & CONNECTION DB
            return new PDO('mysql:host=localhost:3306;dbname=yogasymfonyproject;charset=utf8', $user, $pass);
        } catch(Exception $e) {
            die('Erreur : Sorry, You are not connected' . $e->getMessage());
        }
    }
}