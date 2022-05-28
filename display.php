<?php
include "connection.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Crud Data</title>
</head>
<body class="bg-dark text-light">
  <h1 class="text-center my-4">CRUD DATA</h1>
    <div class="container my-4">
        <button class = "btn btn-primary"><a href="index.php" class ="text-light text-decoration-none">ADD USER</a></button>

        <table class="table table-dark table-striped my-4">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
 $sql = "SELECT * FROM `cdata`";
 $result = mysqli_query($conn,$sql);
 if ($result) {
   while($row = mysqli_fetch_assoc($result)){
       $id = $row['sno'];
       $name = $row['name'];
       $email = $row['email'];
       $mobile = $row['mobile'];
       $password = $row['password'];
       echo '<tr>
       <th scope="row">'.$id.'</th>
       <td>'.$name.'</td>
       <td>'.$email.'</td>
       <td>'.$mobile.'</td>
       <td>'.$password.'</td>
       <td>
         <button class= "btn btn-primary"><a href="update.php?uid='.$id.'" class = "text-light text-decoration-none">Update</a></button>
        <button class= "btn btn-danger"><a href="delete.php?did='.$id.'" class = "text-light text-decoration-none">Delete</a></button>
        </td>
     </tr>';
   };

 };

?>


  </tbody>
</table>
    </div>
    <footer class="main-footer">
  <p class="text-center">Design & Developed BY | <b>Himanshu Chaurasia</b></p>
</footer>
</body>
</html>