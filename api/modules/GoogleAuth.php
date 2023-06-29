<?php   
    class GoogleAuth {        
        public function __construct() {}        
        public static function createAuth() {
            $client = self::getClient();          
            Flight::json([$client->createAuthUrl()]);  
        }
        public static function login() {
            $code = $_GET['code'];
            try {
                $client = self::getClient();
                $token = $client->fetchAccessTokenWithAuthCode($code);
                $client->setAccessToken($token['access_token']);

                $google_oauth = new Google_Service_Oauth2($client);
                $google_account_info = $google_oauth->userinfo->get();
                $email =  $google_account_info->email;
                User::userLoggedIn($email);            
            } catch (Exception $e) {
                Flight::error($e);
            }            
        }
        public static function getClient() {
            $client = new Google_Client();
            $client->setClientId($_ENV['CLIENT_ID']);
            $client->setClientSecret($_ENV['CLIENT_SECRET']);
            $client->setRedirectUri($_ENV['REDIRECT_URI']);
            $client->addScope("email");
            return $client;
        }
    }        
?>