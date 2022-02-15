<?php

    class ContentDAO {

        public static function getIndexText() {
            return file_get_contents("data/index.txt");
        }

        public static function setIndexText($text) {
            file_put_contents("data/index.txt", $text);
        }

    }