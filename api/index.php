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

    //going to expand create to return all the different login methods
    //magic email link used when not a google account
    //database to add special sso options associated to specific urls passed to the login
    //database table to check if email is allowed to access admin@ 
    //if email is an @channel1media.com account; include a custom input box on the redirect page to allow login as any active account

    //HOW IT WORKS
    //On any backend add a Login with C1
    //Link to login.channel1media.com?r={SITE_URL} //https://fsu.vipfanportal.com/booking/admin
    //Successful login via login.channel1media.com will return to //https://fsu.vipfanportal.com/booking/admin/verify.php
    //header will include 
    //Add file; verify.php
    //verify.php confirms authenticated request somehow? JWT?
    //verify.php checks if the header login-channel1-email is a rep in the system and then proceeds to login them in
    //time limit from login.channel1media.com should be really really small
    //developer may need to customize verify.php for their custom site
    //will create some templates for epitch; epitchlite; bookingsystem; (renewal/new sales reports maybe)
    Flight::start();     
?>