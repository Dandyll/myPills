<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{
    public function getUser(string $email): ?User {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users u join users_details ud ON ud.id = u.id_users_details WHERE u.email = :email
        ');

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user==false){
            return null;//TODO try catch w SC
        }

        return new User (
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname']
        );



    }


    public function getUsertest(): array
    {

        $stmt = $this->database->connect()->prepare('
             SELECT * FROM public.users u join users_details ud ON ud.id = u.id_users_details WHERE "email"=:email ;
        ');

        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);




        return $result;
    }
    public function getUserdet(string $email) {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users u join users_details ud ON ud.id = u.id_users_details WHERE u.email = :email
        ');

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user==false){
            return null;//TODO try catch w SC
        }

        return $user;



    }

    public function getUserMeds(string $email) {
        $stmt = $this->database->connect()->prepare('
        SELECT * FROM users u JOIN user_meds um on u.id = um.id_users join meds m on m.id = um.id_meds WHERE u.email = :email
   ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $usermed = $stmt->fetch(PDO::FETCH_ASSOC);

        if($usermed==false){
            return null;//TODO try catch w SC
        }

        return $usermed;
    }


}
