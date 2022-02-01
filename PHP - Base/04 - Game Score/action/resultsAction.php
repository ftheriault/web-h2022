<?php
    function execute() {
        $data = file_get_contents("results.txt");
        $results = explode("\n", $data); // tableau de lignes
        
        return compact("results");
    }