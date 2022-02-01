<?php
    
    function execute() {
        $spyList = [];

        $spyList[] = "Ethan Hunt";
        $spyList[] = "Austin Powers";
        $spyList[] = "James Bond";
        
        return compact("spyList");
    }