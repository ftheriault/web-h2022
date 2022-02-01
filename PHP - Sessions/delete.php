<?php
    session_start();

    session_unset(); // Supprime mes données
    session_destroy(); // Détruit le cookie et son identifiant est maintenant invalide

    session_start(); // Optionnel