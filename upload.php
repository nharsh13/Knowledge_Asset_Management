<?php
// include("database_connection.php");
include 'Config.php';
session_start();
if (isset($_SESSION['u_data'])) {
    $user = $_SESSION['u_data'];
    // echo $user[0];
    // die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
    <style>
        body {
            background-color: #E5E5E5;
        }

        .upload-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .upload-icon {
            font-size: 48px;
            color: #007bff;
        }

        .upload-title {
            margin-top: 10px;
            font-size: 24px;
            color: #333333;
        }

        .custom-file-input {
            cursor: pointer;
        }

        .custom-file-label {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    </style>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3">
        <div class="container-fluid">
            <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/user--v1.png" alt="user--v1" />
            <a class="navbar-brand" href="#">
                <?php echo $user['0'] ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2 " href="welcome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" aria-current="page" href="">Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="asset.php">Assets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="logout.php">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-center font-weigh-bold text-uppercase mt-3 mb-10 ">Upload Asset</h1>

    <div class="container mt-5">
        <div class="upload-container">
            <div class="upload-icon">
                <i class="fas fa-cloud-upload-alt"></i>
            </div>
            <div class="upload-title">
                Upload Your File
            </div>
            <br>




            <form action="#" class="mt-3" enctype="multipart/form-data" method="post">
                <!-- <div class="dropdown text-center "  >
                    <button class="btn btn-secondary dropdown-toggle" type="button" name="category" aria-placeholder=""
                        data-bs-toggle="dropdown" aria-expanded="false" name="category" >
                        --Select Document Category--
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">On Job Knowledge</a></li>
                        <li><a class="dropdown-item" href="#">Self Study</a></li>
                        <li><a class="dropdown-item" href="#">Individual Development</a></li>
                        <li><a class="dropdown-item" href="#">Future Requirement</a></li>
                        <li><a class="dropdown-item" href="#">Miscellaneous</a></li>
                    </ul>
                </div> -->

                <select class="form-select" aria-label="Default select example" name="category" id="category">
                    <option selected>--Select Document category--</option>
                    <option value="On Job Knowledge">On Job Knowledge</option>
                    <option value="Self Study">Self Study</option>
                    <option value="Individual Development">Individual Development</option>
                    <option value="Future Requirement">Future Requirement</option>
                    <option value="Miscellaneous">Miscellaneous</option>
                </select>

                <!-- <input type="text" name="category" placeholder="category"> -->
                <br>


                <div class="custom-file">
                    <input type="file" name="file" class="custom-file-input" id="customFile"
                        aria-describedby="fileHelp">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                    <br>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mt-3">Upload<span class="ms-2"><img
                            width="50" height="50" src="https://img.icons8.com/ios/50/upload-to-cloud--v1.png"
                            alt="upload-to-cloud--v1" /></span>
                </button>
                <br>
                
                
                


            </form>



        </div>
    </div>

    

    </div>
    <footer class="bg-light text-center text-lg-start  gradient-background border-top">
        <div class="asset">
            <h1 class="text-center font-weigh-bold gradient-background">Asset Management</h1>

            <p class="text-center gradient-background">
                One stop portal to the present and future knowledge


            </p>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-dark" href="https://www.tatamotors.com/">Tata Motors.</a>
            </div>
        </div>

    </footer>

    <!-- Copyright -->

    <!-- Copyright -->

    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->





</body>

</html>

<?php
$date = date("Y/m/d");
if (isset($_POST["submit"])) {
    $maxsize = 10737418240;
    if (isset($_FILES['file']['name']) && $_FILES['file']['name'] != '') {
        $name = $_FILES['file']['name'];
        $category = $_POST["category"];
        $target_dir = "docs/";
        $target_file = $target_dir . $_FILES["file"]["name"];
        //echo $target_file;

        // Select file type
        $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        //Valid File Extensions
        $extensions_arr = array("pdf", "pptx", "docx", "xlsx","txt");

        // Check extension
        if (in_array($extension, $extensions_arr)) {

            // check file size
            if (($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                $_SESSION['message'] = "File too large. File must be less than 5MB";
            } else {
                // Upload


                if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
                    $query = "INSERT INTO document(DocumentName,Category,UserName,UploadDate, File_Loc) VALUES('" . $name . "','" . $category . "','" . $user[0] . "','" . $date . "','" . $target_file . "')";
                    mysqli_query($conn, $query);
                    $_SESSION['message'] = "Upload Successful";



                }
            }
        } else {
            $_SESSION['message'] = "Invalid file extension";
        }
    } else {
        $_SESSION['mesaage'] = "Please select a file";
    }

    exit;


}

//header('location:welcome.php');
// echo "<script type='text/javascript'>aler('Upload Successfull')
//  document.location.href='welcome.php'</script>";
// echo "hello boss";
?>