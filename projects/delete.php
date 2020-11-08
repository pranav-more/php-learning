<?php 
    session_start();
    if( isset($_SESSION['email'])){
        include "connection.php";
        $ID = $_GET['order_id'];
        $Deletequery = "DELETE from orders where order_id='$ID'";
        $result = mysqli_query($conn, $Deletequery);
        if ($result){
            header('location: orders.php');
        }else{
            echo "error";
        }

    
    }

?>