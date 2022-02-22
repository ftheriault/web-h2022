<?php
    class StatsDAO {
        public static function save($name, $roomType) {
            file_put_contents("data/data.txt", "\n" . $name . ";" . $roomType . ";", FILE_APPEND);
        }

        public static function count() {
            $data = file_get_contents("data/data.txt");
            $lines = explode("\n", $data);
            $count = 0;

            foreach ($lines as $line) {
                if (!empty($line)) {
                    $count++;
                }
            }

            return $count;
        }

        public static function countPerRoomType() {
            $data = file_get_contents("data/data.txt");
            $lines = explode("\n", $data);
            $result = [];
            $result["Simple"] = 0;
            $result["Double"] = 0;
            $result["Suite"] = 0;

            foreach ($lines as $line) {
                if (!empty($line)) {
                    $cols = explode(";", $line);
                    $result[trim($cols[1])]++;
                }
            }

            return $result;
        }
    }