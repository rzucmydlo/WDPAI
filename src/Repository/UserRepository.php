<?php

require_once "Repository.php";
require_once __DIR__.'//..//Models//User.php';

class UserRepository extends Repository {

    public function getUser(string $email): ?User 
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['name'],
            $user['admin'],
            //$user['id']
        );
    }

    public function getUsers(): array {
        // $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users WHERE email != :email;
        ');
        $stmt->bindParam(':email', $_SESSION['id'], PDO::PARAM_STR);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // foreach ($users as $user) {
        //     $result[] = new User(
        //         $user['email'],
        //         $user['password'],
        //         $user['name'],
        //         $user['surname'],
        //         $user['id']
        //     );
        // }

        return $users;
    }
}