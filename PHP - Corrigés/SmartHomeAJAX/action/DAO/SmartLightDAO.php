<?php
    require_once("action/DAO/Connection.php");

    class SmartLightDAO {

        public static function getLightsStatus() {
            $connection = Connection::getConnection();

            $statement = $connection->prepare("SELECT * FROM lights");

            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $statement->execute();

            return $statement->fetchAll();
        }

    }