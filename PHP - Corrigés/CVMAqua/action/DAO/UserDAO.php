<?php
    class UserDAO {
        public static function authenticate($username, $password) {
            $result = null;

            if ($username === "john" && $password === "qwerty") {
                $result = [];
                $result["VISIBILITY"] = 3;
            }

            return $result;
        }
    }