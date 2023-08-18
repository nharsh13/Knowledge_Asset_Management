<?php/*
$conn = mysqli_connect("localhost", "root", "", "knowledgemanagement") or die("Connection Failed");
include 'welcome_admin.php';
echo $_GET['deleteid'];
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
echo $id;
die();
    $sql="delete from login where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Deleted Successfully";
    }
    else{
        die(mysqli_error($conn));
    }
}*/
?>
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "knowledgemanagement") or die("Connection Failed");

if (isset($_POST['delete_button'])) {
    $document_id = $_POST['document_id'];
    
    // Delete the document from the database
    $query = "DELETE FROM document WHERE `Slno.` = '$document_id'";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        // Deletion successful
        header("Location: welcome_admin.php"); // Redirect back to the main page
        exit();
    } else {
        // Deletion failed
        echo "Error deleting document: " . mysqli_error($conn);
    }
}
?>


