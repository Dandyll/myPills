<?php
require_once __DIR__.'/../../Database.php';

class newMedRepository
{
    public static function addmed ($name, $description, $group, $image){
        $database = new Database();

        $stmt = $database->connect()->prepare('
            INSERT INTO public."users_details"("name", "surname") VALUES(:name, :surname)
        ');
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':surname', $surname, PDO::PARAM_STR);
        $stmt->execute();








    }
}