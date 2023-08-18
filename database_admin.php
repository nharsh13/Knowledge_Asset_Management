<?php

session_start();

include 'Config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['user'];


    $pass = $_POST['pass'];


    $sql = "SELECT * FROM admin  WHERE username = '$name' AND password = '$pass'";
    $result = $conn->query($sql);

    $query=mysqli_query($conn,$sql);
    $rows=mysqli_num_rows($query);

    if ($result->num_rows == 1) {
      $record=mysqli_fetch_assoc($query);
      $u_data=array($record['fullname']);
      $_SESSION['u_data']=$u_data;


       
    
      

      header("Location: welcome_admin.php");
      
      exit();
    }
     else {
       $_SESSION['error']=" Invalid username or password.";
       header("Location:admin.php");
    }
  }
  
  $conn->close();



?>

