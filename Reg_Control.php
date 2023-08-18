<?php
include 'Config.php';
function test_input($data) {	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
if ($_SERVER["REQUEST_METHOD"]== "POST") {
$serialNo=5;	
$username=$_POST['Username'];
$fullname=$_POST['fullname'];
$password=$_POST['password'];
$Cpassword=$_POST['CPassword'];

if ($password != $Cpassword){
    echo "<script type='text/javascript'>alert('Password Mismatch!!')
	document.location.href = 'registration.php' </script>";
}
$EmailId=$_POST['EmailId'];
$PhoneNo=$_POST['PhoneNumber'];

if($username !=''&& $fullname !=''){
    //Insert Query of SQL
$query = "insert into login(userName,fullname,password, Conf_Password,EmailId,Phone_No) values ('$username','$fullname', '$password', '$Cpassword', '$EmailId','$PhoneNo')";
mysqli_query($conn,$query);
//Mailtest.php run 
    //$query = mysql_query("Select * from userdetailstable")
    echo "<script type='text/javascript'>alert('Data Inserted successfully...!!')
	document.location.href = 'admin.php' </script>";
    //goto a;
    }
    else{    
    echo "<script type='text/javascript'>alert('Some Fields are Blank....!! Please Try again..')
	document.location.href = 'registration.php' </script>";
    }
}
else{
    echo "<script type='text/javascript'>alert('User ID or Username can't be Blank')
	document.location.href = 'admin.php' </script>";
}


?>
