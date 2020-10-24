<?php
if( isset($_POST['submit']) ) {
    //validations

    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userCity = $_POST['city'];
   
    //connection
    include "conn.php";
        $query = "insert into customers (name, email, city) values ('$userName', '$userEmail', '$userCity')";
        $result = mysqli_query($conn, $query);
        if ($result){
            echo "added to records successfully";
        }else{
            echo 'some error while insterting';
        }
    
   
    }
else{
    echo "not allowed";
}

?>