<?php

namespace src\Labs\PDODB;

class Database {

    private const GET_ID_USER = "SELECT id FROM users WHERE user = :email";

    public function __construct() {
        $host = 'localhost'; 
        $db_name = 'users';
        $db_username = 'd4t4b4s3!4us3r';
        $db_password = 'd4t4b4s3!p4ssw0rd'; 

        try {
            $this->pdo = new \PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);
        }
        catch (\PDOException $e) {
            exit("Error Connecting To DataBase: $e");
        }
    }

    public function setUser(string $user) :void {
        $this->user = $user;
    }

    public function findUser(string $user) :int {
        $query = $this->pdo->prepare(Database::GET_ID_USER);
        $query->execute([":user" => $user]);
        return $query->fetch()['id'];
    }

}

