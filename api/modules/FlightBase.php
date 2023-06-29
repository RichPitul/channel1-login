<?php
    class FlightBase {
        public function __construct() {       
            try {
                $dbConfig = array("mysql:host=" . $_ENV['host'] . ";dbname=" . $_ENV['dbname'], $_ENV['user'], $_ENV['password']);
                Flight::register('db', 'PDO', $dbConfig, function($db){ $this->setDatabaseMode($db); });                
            }
            catch(Exception $e) {
                Flight::error($e);
            }                            
        }        
        public function apiError($error) {                    
            $request = Flight::request();       
            $type = gettype($error);
            if($type === 'string') {
                $message = $error;
            } else {
                $message = [  
                    "message"=> $error->getMessage() ?? "no-message", 
                    "file" => $error->getFile() ?? 'no-file', 
                    "line" => $error->getLine() ?? 'no-line',
                    "url" => $request->url ?? 'no-url', 
                ];
            }
            Flight::json(['message' => $message], 500);
        }
        public function setDatabaseMode($db) {
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        public function optionsResponse() {
            $accessControlHeaders = $_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'];
            header('Access-Control-Allow-Methods: GET, POST, OPTIONS'); 
            header("Access-Control-Allow-Headers: $accessControlHeaders");
        }
    }
