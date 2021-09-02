<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Disease.php';
require_once __DIR__.'/../../Database.php';

class DiseaseRepository extends Repository
{
    public function getDisease(int $id): ?Dis
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM chronic_diseases WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $disease = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($disease == false) {
            return null;//TODO try catch w SC
        }

        return new Disease (
            $disease['disease'],

        );


    }

    public function adddisease(Disease $disease): void
    {

        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO chronic_diseases (name)
            VALUES (?)
        ');
        $stmt->execute([
            $disease->getName(),

        ]);
    }

    public function getDiseases(): array
    {

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM chronic_diseases;
        ');
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);




        return $result;
    }

}