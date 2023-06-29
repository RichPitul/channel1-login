<?php
    //php -S localhost:8000
    $allowed = [
        'http://localhost:5173'
    ];    
    /*
        'login.channel1media.com'
        redirect to here from any channel1 admin backend dashboard;
        //include referrer as query parameter
        //show login options
        //google auth
        //2fa/magic link
        //more to add after
        //redirect back to login.channel1media.com/redirect
        //redirect back to login.channel1media.com/email/code
        //use session and 2fa/magic link or sso authentication to get email address
        //if ends in @channel1media.com show page to redirect back to original site with alternate email than the one authenticated with
        //small table with designated admin@ accounts; include referrer in table; if user comes back and has access to admin@ accounts then show intermediate page with option to login as admin@   
    */
    if (in_array($_SERVER['HTTP_ORIGIN'], $allowed)) {
        header("Access-Control-Allow-Origin: " . $_SERVER['HTTP_ORIGIN']);
    }
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Methods: OPTIONS, GET, POST');
    header('Access-Control-Allow-Headers: Content-Type');

    require 'vendor/autoload.php';
    require 'Config.php';   
    require 'modules/FlightBase.php';    
    
    $flightBase = new FlightBase();    

    Flight::path('modules');    
    Flight::route('OPTIONS /*', array($flightBase, 'optionsResponse'));
    Flight::map('error', array($flightBase, 'apiError'));
    
    //Routes to tests    
    //Flight::route("GET /tests", array('Tests', 'test'));
    //Flight::route("GET /tests/create", array('GoogleAuth', 'createAuth'));

    //api routes    
    
    //Flight::route("GET /create", array('GoogleAuth', 'createAuth'));
    //Flight::route("GET /login", array('GoogleAuth', 'login'));
    //Flight::route("POST /logout", array('User', 'logout'));

    Flight::start();     
?>