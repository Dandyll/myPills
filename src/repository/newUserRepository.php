<?php
require_once __DIR__.'/../../Database.php';

class newUserRepository
{
    public static function register ($name, $surname, $email, $password){
        $database = new Database();
        $password = md5($password);
        $stmt = $database->connect()->prepare('
            INSERT INTO public."users_details"("name", "surname") VALUES(:name, :surname)
        ');
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':surname', $surname, PDO::PARAM_STR);
        $stmt->execute();


        $stmt = $database->connect()->prepare('
            INSERT INTO public."users"("password", "email") VALUES(:password, :email)
        ');
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();


    }

    public static function EditUser($age, $phone, $sex, $blood,$weight,$birth_date)
    {
        $database = new Database();
        $stmt = $database->connect()->prepare('
            SELECT * FROM public.users u join users_details ud on u.id_users_details = ud.id WHERE email=:email;
        ');
        $stmt->bindParam(':email',  json_decode($_COOKIE["user"],true)["email"], PDO::PARAM_STR);
        $stmt->execute();
        $stmt = $database->connect()->prepare('
            INSERT INTO public."users_details"("age", "phone", "sex","blood","weight","birth_date") VALUES(:age, :phone,:sex,"blood",:wieght,:birth_date)
        ');
        $stmt->bindParam(':age', $age, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':sex', $sex, PDO::PARAM_STR);
        $stmt->bindParam(':blood', $blood, PDO::PARAM_STR);
        $stmt->bindParam(':weight', $weight, PDO::PARAM_STR);
        $stmt->bindParam(':birth_date', $birth_date, PDO::PARAM_STR);
        $stmt->execute();

    }


}