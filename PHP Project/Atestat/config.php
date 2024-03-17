<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'GABRIEL');
define('DB_PASSWORD', 'parola');
define('DB_NAME', 'GABRIEL');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>