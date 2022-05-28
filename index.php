<?php
include 'connection.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
 
   $sql = "INSERT INTO `cdata` ( `name`, `email`,`mobile`,`password`) VALUES ('$name', '$email','$mobile','$password')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
      header('location:display.php');
    }else{
      die(mysqli_error($conn));
    };
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body class="bg-dark text-light">
    <h1 class="text-center my-4">CRUD PROJECT</h1>
    <div class="container my-4">

  <form method = "POST">
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name = "name" required >
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name = "email" required >
  </div>
  <div class="mb-3">
    <label  class="form-label">Mobile</label>
    <input type="text" class="form-control" name = "mobile" required >
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name = "password" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
<footer class="main-footer">
  <p class="text-center">Design & Developed BY | <b>Himanshu Chaurasia</b></p>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>