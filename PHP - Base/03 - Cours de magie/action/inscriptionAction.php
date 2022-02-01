<?php
    
    function execute() {
        $counter = file_get_contents("counter.txt");

        return compact("counter");
    }