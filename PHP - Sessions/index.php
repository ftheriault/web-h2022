<?php
    session_start(); // Si PHPSESSID est présent, va chercher les variables permanentes
                     // Sinon, créer un PHPSESSID unique

    //$isConnected = "oui";
    //$_SESSION["isConnected"] = "oui"; // <- permanente

    echo $_SESSION["isConnected"];
    