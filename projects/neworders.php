<?php
    session_start();
    if( isset($_SESSION['email'])){
        if(isset($_POST['submit'])){
            $productName = $_POST['productName'];
            $productDescription = $_POST['productDescription'];
            $productDescription = $_POST['productDescription'];
            $productPrice = $_POST['productPrice'];
            $productQantity = $_POST['productQantity'];
            $payment_mode = $_POST['payment_mode'];

            include "connection.php";
        }

    

?>

<!doctype html>
<html lang="en">

<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4 p-4">
    <form action="neworders.php" method="POST">
        <h1 style="text-align: center;">Place order</h1>
        <div class="form-group p-1">
            <label for="formGroupExampleInput">Product Name</label>
            <input type="text" name='productName' class="form-control" id="formGroupExampleInput" placeholder="Product name">
        </div>
        <div class="form-group p-1">
            <label for="formGroupExampleInput">Product Description</label>
            <input type="text" name="productDescription" class="form-control" id="formGroupExampleInput" placeholder="Product Description">
        </div>
        <div class="form-group p-1">
            <label for="formGroupExampleInput">Product price</label>
            <input type="number" name="productPrice" class="form-control" id="formGroupExampleInput" placeholder="Product price">
        </div>
        <div class="form-group p-1">
            <label for="formGroupExampleInput">Product quantity</label>
            <input type="number" name="productQantity" class="form-control" id="formGroupExampleInput" placeholder="Product quantity">
        </div>
        <div class="form-group p-1">
        <label for="sel1">Select list:</label>
            <select class="form-control" name="payment_mode">
              <option value="">Select Payment Method</option>
              <option value="UPI">UPI</option>
              <option value="Debit Card">Debit Card</option>
              <option value="Credit Card">Credit Card</option>
            </select>
        </div>

        <button type="submit" name="submit" value="submit" class="btn btn-primary mt-4">Submit</button>
        <a id="" class="btn btn-info mt-4" href="orders.php" role="button">View orders</a>
    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<?php
    }
    else{
        // header('location: login.php');
    }
?>