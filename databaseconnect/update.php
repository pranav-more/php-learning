<?php
if( isset($_POST['submit']) ) {
    //validations

    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userCity = $_POST['city'];
    $userID = $_POST['ID'];
   
    //connection
    include "conn.php";
        $query = "UPDATE customers SET email='$userEmail' where ID= '$userID'";
        $result = mysqli_query($conn, $query);

        if ($result){
            echo "Updated successfully";
            header("location:customers.php");
        }else{
            echo 'some error while insterting';
        }
    
   
    }
else{
    echo "Error";
}

?>