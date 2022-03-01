<?php
    require_once("action/DAO/Connection.php");

    class UserDAO {

        public static function authenticate($username, $password) {
            $connection = Connection::getConnection();

            // ' or 1=1 or '1'='1
            $statement = $connection->prepare("SELECT * FROM users WHERE username = ?");
            $statement->bindParam(1, $username); // 1= premier ?
            // $statement->bindParam(2, $lastName);
            $statement->setFetchMode(PDO::FETCH_ASSOC); // Seulement lors de select = $row["first_name"], sinon $row[0]
            $statement->execute();

            $result = null;

            if ($row = $statement->fetch()) {
                // Il y a quelque chose!

                // $hash = password_hash($password, PASSWORD_DEFAULT);
                if (password_verify($password, $row["password"])) {
                    $result = [];
                    $result["username"] = $row["first_name"];
                    $result["visibility"] = $row["visibility"];
                }
            }

            // $rows = $statement->fetchAll();
            // foreach($rows as $row) {

            // }
            
            return $result;
        }

        public static function updateProfile($username, $newName, $newPassword) {
            $connection = Connection::getConnection();

            $statement = $connection->prepare("SELECT * FROM users WHERE username = '$username'");
            $statement->setFetchMode(PDO::FETCH_ASSOC); // Seulement lors de select = $row["first_name"], sinon $row[0]
            $statement->execute();
            // UPDATE users SET ...
        }
    }