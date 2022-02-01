<?php
    
    function execute() {
        $version = "1.0.0";
        $username = "John";
        $hasConnectionError = false;

        if (!empty($_POST["champCourriel"])) {
            if ($_POST["champCourriel"] == "a@a.com" &&
                $_POST["champMotDePasse"] == "test") {
                header("location:prive.php");
                exit;
            }
            else {
                $hasConnectionError = true;
            }
        }

        // compact = permet de créer un dictionnaire
        // à partir de variables simples
        return compact("version", "username", "hasConnectionError"); 
    }