<?php
include "connection.php";
if (isset($_GET['did'])) {
    $id = $_GET['did'];

    $sql = "DELETE FROM `cdata` WHERE sno='$id'";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location:display.php");  
    }else{
        die(mysqli_error($conn));
    };
}


?>