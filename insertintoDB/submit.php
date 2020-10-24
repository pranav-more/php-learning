<?php
if( isset($_POST['submit']) ) {
    //validations

    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userCity = $_POST['city'];
    // 
    $servername = 'localhost'; 
    $user = 'root';
    $password = 'advance18';
    $dbname = 'learning';
    //connection
    $conn = mysqli_connect($servername, $user, $password, $dbname);
    if ( $conn ){
        $query = "insert into customers (name, email, city) values ('$userName', '$userEmail', '$userCity')";
        $result = mysqli_query($conn, $query);
        if ($result){
            echo "added to records successfully";
        }else{
            echo 'some error while insterting';
        }
    }
    else{
        echo "not connected:<";
    }
}
else{
    echo "not allowed";
}

?>