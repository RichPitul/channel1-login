<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    date_default_timezone_set('UTC');

    $_ENV['user'] = 'adminC1MS';
    $_ENV['password'] = 'zQAFS4hS5DBSxUVs';    

    $_ENV['CLIENT_ID'] = '';
    $_ENV['CLIENT_SECRET'] = '';    
    
    $_ENV['REDIRECT_URI'] = 'https://login.channel1media.com/redirect';
    if($_SERVER['HTTP_ORIGIN'] ?? '' === 'http://localhost:5173') {
        $_ENV['REDIRECT_URI'] = 'http://localhost:5173/redirect';
    }


    $_ENV['SITE_URL'] = 'https://login.channel1media.com/api';
    $_ENV['dbname'] = 'channel1media_com_-_login';
    $_ENV['timezone'] = 'UTC';    
    $_ENV['host'] = 'localhost';
?>