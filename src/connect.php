<?php

if (getenv('JAWSDB_URL') !== false) {
    $dbparts = parse_url(getenv('JAWSDB_URL'));
    $url = getenv('JAWSDB_URL');


    $hostname = $dbparts['host'];
    $username = $dbparts['user'];
    $passwords = $dbparts['pass'];
    $database = ltrim($dbparts['path'],'/');
    $role = $_POST['role']; 

} else {
    $username = 'k2ttqwi9grba4ovh';
    $passwords = 'c22qkd11aw9kk06u';
    $database = 'iv9l3u5ku3695br9';
    $hostname = 'ebh2y8tqym512wqs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';

} 


try {
    $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $passwords, $role);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    //$db = new PDO('mysql:host=localhost:3307;dbname=tarif-transports;charset=utf8', 'root', '');

?>