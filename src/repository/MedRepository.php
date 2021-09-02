<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Med.php';
require_once __DIR__.'/../../Database.php';

class MedRepository extends Repository
{
    public function getMed(int $id): ?Med
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM med WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $med = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($med == false) {
            return null;//TODO try catch w SC
        }

        return new Med (
            $med['name'],
            $med['description'],
            $med['group'],
            $med['image']
        );


    }

    public function addpill(Med $med): void
    {

            $date = new DateTime();
            $stmt = $this->database->connect()->prepare('
            INSERT INTO meds (name, description, image)
            VALUES (?, ?, ?)
        ');
        $stmt->execute([
            $med->getName(),
            $med->getDescription(),

            $med->getImage()

        ]);
    }
    public function getMeds(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM meds;
        ');
        $stmt->execute();
        $meds = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($meds as $med) {
            $result[] = new Med(
                $med['name'],
                $med['description'],
                $med['image'],
                $med['group'],
            );
        }

        return $result;
    }
    public function getMedstest(): array
    {

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM meds;
        ');
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);




        return $result;
    }

    public static function getMedforkrzysiek(string $name)
    {
        $database = new Database();
        $stmt = $database->connect()->prepare('
            SELECT * FROM public."meds" WHERE "name" = :name
        ');
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->execute();

        $med = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($med == false) {
            return null;//TODO try catch w SC
        }

        return $med;


    }
    public function getUserMeds(string $email) {

        $database = new Database();
        $stmt = $database->connect()->prepare('
        SELECT * FROM users u JOIN user_meds um on u.id = um.id_users join meds m on m.id = um.id_meds WHERE u.email = :email
   ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $usermed = $stmt->fetchall(PDO::FETCH_ASSOC);

        if($usermed==false){
            return null;//TODO try catch w SC
        }

        return $usermed;

    }
        public function addusermed(string $name) {
            $database = new Database();

            $stmt = $database->connect()->prepare('
            SELECT id FROM meds WHERE name=:name
   ');

            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->execute();

            $medid = $stmt->fetch(PDO::FETCH_ASSOC);
            $medid = $medid['id'];
            $stmt = $database->connect()->prepare('
            SELECT id FROM users WHERE email=:email'
            );

            $stmt->bindParam(':email', json_decode($_COOKIE["user"], true)["email"], PDO::PARAM_STR);
            $stmt->execute();

            $userid = $stmt->fetch(PDO::FETCH_ASSOC);
            $userid = $userid['id'];
            $stmt = $database->connect()->prepare('
            INSERT INTO user_meds(id_users, id_meds) values(:id_users,:id_meds)
   ');
            $stmt->bindParam(':id_meds', $medid, PDO::PARAM_INT);
            $stmt->bindParam(':id_users', $userid, PDO::PARAM_INT);
            $stmt->execute();
        }

}