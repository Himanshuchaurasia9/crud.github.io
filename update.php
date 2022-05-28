<?php
include 'connection.php';
$id = $_GET['uid'];
$sql= "SELECT * FROM `cdata` WHERE  sno=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
 
  $sql = "UPDATE `cdata` SET `sno`='$id',`name`='$name',`email`='$email',`mobile`='$mobile',`password`='$password' WHERE sno=$id";  
  $result = mysqli_query($conn,$sql);
    if ($result) {
      echo "Update added";
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
  <h1 class="text-center my-4">CRUD UPDATE DATA</h1>
    <div class="container my-4">

  <form method = "POST">
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" required name = "name" value =<?php echo $name; ?>>
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" required name = "email" value =<?php echo $email; ?>>
  </div>
  <div class="mb-3">
    <label  class="form-label">Mobile</label>
    <input type="text" class="form-control" required name = "mobile" value =<?php echo $mobile;?>>
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" required name = "password" value =<?php echo $password;?>>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>
<footer class="main-footer">
  <p class="text-center">Design & Developed BY | <b>Himanshu Chaurasia</b></p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>