<?php   
    class Tests {        
        public function __construct() {}
        public static function getTestBaseUrl() {
            $dev = $_ENV['DEV'] ?? false ? '/dev' : '';
            if($_SERVER['SERVER_NAME'] === 'localhost') {
                return "http://localhost:8001$dev";
            } else {
                return $_ENV['SITE_URL'] . $dev;
            }            
        }
        //Generic Tests of API Functionality
        public static function test() {
            Flight::json(['status' => 'ok']);  
        }  
    }        
?>