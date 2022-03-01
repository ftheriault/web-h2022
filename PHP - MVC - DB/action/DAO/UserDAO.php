<?php

    class UserDAO {

        public static function authenticate($username, $password) {
            $result = null;

            if($username == "john" && $password == "qwerty") {
                $result = [];
                $result["username"] = "Jonathan";
                $result["visibility"] = 1;
            }

            return $result;
        }

        public static function updateProfile($username, $newName, $newPassword) {
            // UPDATE users SET ...
        }
    }