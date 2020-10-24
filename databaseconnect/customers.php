<?php

    include "conn.php";

    $query = "select * from customers";

    $result = mysqli_query($conn, $query);

    while ( $row = mysqli_fetch_assoc($result)){
        echo 'ID: ' . $row['ID'] . "<br>";
        echo 'name: ' . $row['name'] . "<br>";
        echo 'email: ' . $row['email'] . "<br>";
        echo 'city: ' . $row['city'] . "<br>";
        echo "<hr>";
    }

?>