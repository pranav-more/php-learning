<?php

    include "conn.php";
    $ID = $_GET['ID'];
    $query = "DELETE from customers where ID='$ID'";
    
    $result = mysqli_query($conn, $query);

    if ( $result ){
        
        header('location: customers.php');
    }
    else{
        echo "Some problem occured try again";
    }

?>