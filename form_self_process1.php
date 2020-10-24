<?php
$errors = array();
if (isset($_GET['submit'])) {
  $name = $_GET['name'];
  $email = $_GET['email'];
  $password = $_GET['password'];

  if (empty($name)) {
    array_push($errors, 'name');
  }
  if (empty($email)) {
    array_push($errors, 'email');
  }
  if (empty($password)) {
    array_push($errors, 'password');
  }

  if (count($errors) == 0) {
    echo "Hello " . $name . "<br>";
    echo "Your email is " . $email. "<br>";
    }
}

if (!(isset($_GET['submit'])) || count($errors) > 0) {
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="font-family: sans-serif;">
    <div class="container mt-5">
      <div class="col-md-4">
      <h4>FORM USING <b>GET</b> METHOD</h4>
        <form action="moreform.php" method="GET">
          <div class="form-group">
              <label for="Name"></label>
              <span style="color: red;"><?php if( in_array('name' , $errors) ){ echo "name is required";} ?></span>
              <input type="text"
              class="form-control" name="name" value="<?php if(isset($_GET['name'])) {echo $_GET['name'];} ?>" id="name" aria-describedby="helpId" placeholder="">
              <small id="" class="form-text text-muted">Name</small>
          </div>
          <div class="form-group">
              <label for="email"></label>
              <span style="color: red;"><?php if( in_array('email' , $errors) ){ echo "email is required";} ?></span>
              <input type="text"
              class="form-control" name="email" value="<?php if(isset($_GET['email'])) {echo $_GET['email'];} ?>"  id="email" aria-describedby="helpId" placeholder="">
              <small id="" class="form-text text-muted">Email</small>
          </div>
          <div class="form-group">
              <label for="password"></label>
              <span style="color: red;"><?php if( in_array('password' , $errors) ){ echo "password is required";} ?></span>
              <input type="password"
              class="form-control" name="password" value="<?php if(isset($_GET['password'])) {echo $_GET['password'];} ?>"  id="password" aria-describedby="helpId" placeholder="">
              <small id="" class="form-text text-muted">Password</small>
          </div>
          <input class="btn btn-dark" type="submit" name="submit" value="submit">
      </form>
      </div>
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
?>