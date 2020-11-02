<?php
    $servername = 'localhost';
    $user = 'root';
    $password = 'advance18';
    $dbname = 'projects';
    //connection
    $conn = mysqli_connect($servername, $user, $password, $dbname);

    if (!$conn){
        die('not connected to mysql');
    }
?>