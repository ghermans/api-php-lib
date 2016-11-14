<?php
include("../../vendor/autoload.php");

use PleskX\API\Client as PleskApiClient;

/**
 * Plesk Authentication credentials.
 * Change the host, login, password below with your own.
 */

 $host     = "";
 $login    = "";
 $password = "";

 $client = new PleskApiClient($host);
 $client->setCredentials($login, $password);

 try {
     $packages = $client->serviceplan()->getAll();
    // Show result
     echo "<pre>";
     print_r($packages);
     echo "</pre>";
 } catch (\PleskX\API\Client\Exception $e) {
     echo 'Please check your credentials. Make sure to change the $host, $login, and $password variables in this file.';
 }
