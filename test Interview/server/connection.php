<?php 
    $host= 'localhost';
    $port=3306;
    $db = 'bincomphptest';
    $user = 'root';
    $password = '';


    $conn = new mysqli($host, $user, $password, $db) or die("Connect failed: %s\n". $conn -> error);



    
?>