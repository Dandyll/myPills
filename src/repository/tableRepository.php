<?php

require_once __DIR__.'/../../Database.php';

class tableRepository
{
        public static function  saveTable($arlist, $med_name) {

            $arlist=json_encode($arlist);


            $database = new Database();
            //SELECT id FROM users where email=:email
            $stmt = $database->connect()->prepare('
            SELECT id FROM users where email=:email
        ');
            $stmt->bindParam(':email',  json_decode($_COOKIE["user"],true)["email"], PDO::PARAM_STR);
            $stmt->execute();

            $respond = $stmt->fetch(PDO::FETCH_ASSOC);
            $user_id = $respond['id'];

            $stmt = $database->connect()->prepare('
            SELECT * FROM public.users u join schelude s ON u.id = s.user_id WHERE u.email = :email AND s.med =:med
        ');
            $stmt->bindParam(':email',  json_decode($_COOKIE["user"],true)["email"], PDO::PARAM_STR);
            $stmt->bindParam(':med', $med_name, PDO::PARAM_STR);
            $stmt->execute();
            $respond = $stmt->fetch(PDO::FETCH_ASSOC);
            if(!$respond){
                $query = 'INSERT INTO schelude(user_id, med, table_id) values(:user_id,:med,:table_id)';

            }
            else {
                $query = 'UPDATE schelude SET table_id=:table_id WHERE user_id=:user_id AND med=:med';
            }

            $stmt = $database->connect()->prepare($query);
            $stmt->bindParam(':user_id',  $user_id, PDO::PARAM_INT);
            $stmt->bindParam(':table_id', $arlist, PDO::PARAM_STR);
            $stmt->bindParam(':med', $med_name, PDO::PARAM_STR);
            $stmt->execute();

    }

    public static function  readTable($medname)
    {


        $database = new Database();
        //SELECT id FROM users where email=:email
        $stmt = $database->connect()->prepare('
            SELECT id FROM users where email=:email
        ');
        $stmt->bindParam(':email', json_decode($_COOKIE["user"], true)["email"], PDO::PARAM_STR);
        $stmt->execute();

        $respond = $stmt->fetch(PDO::FETCH_ASSOC);
        $user_id = $respond['id'];

        $stmt = $database->connect()->prepare('
            SELECT * FROM public.users u join schelude s ON u.id = s.user_id WHERE u.email = :email AND s.med =:med
        ');
        $stmt->bindParam(':email', json_decode($_COOKIE["user"], true)["email"], PDO::PARAM_STR);
        $stmt->bindParam(':med', $medname, PDO::PARAM_STR);
        $stmt->execute();
        $respond = $stmt->fetch(PDO::FETCH_ASSOC);

        echo($respond['table_id']);
    }

}