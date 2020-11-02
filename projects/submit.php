<?php
if( isset($_POST['submit']) ) {
    //validations

    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

   
    //connection
    include "connection.php";
        $query = "insert into customers (name, email, password) values ('$userName', '$userEmail', '$userPassword')";
        $result = mysqli_query($conn, $query);
        if ($result){
            // echo "added to records successfully";
            header("location: login.php");
        }else{
            echo 'some error while insterting';
        }
    
   
    }
else{
    echo "not allowed";
}

?>
