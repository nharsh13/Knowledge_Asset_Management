<?php
session_start();
include 'Config.php';      
if (isset($_SESSION['u_data'])) {
    $user = $_SESSION['u_data'];
}

$per_page = 10;
$start=0;
$current_page=1;  

if(isset($_GET['start'] )){
    $start=$_GET['start'];
    $current_page=$start;
    $start--;
    $start=$start*$per_page;
}
$record = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM document WHERE username = '$user[0]'  "));
$pagi = ceil($record / $per_page);

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="homestyle.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
    <style>
        html {
            height: 100%;
            box-sizing: border-box;
        }

        body {
            position: relative;
            margin: 0;
            min-height: 100%;
            padding-bottom: 6.74rem;
            box-sizing: inherit;
        }

        .gradient-background {

            background: linear-gradient(300deg, #00bfff, #ff4c68, #ef8172);
            animation: gradient-animation 18s ease infinite;
        }



        footer {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100px;
            margin-top: auto;
        }

        .pagination{
        margin-left: 45%;


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
                        <a class="nav-link mx-2 active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="upload.php">Upload</a>
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

    <h1 class="text text-center mb-3 mt-2 text-success">My Assets:</h1>

    <table class="table table-striped table-warning">
        <thead>
            <tr>
                <th scope="col">Document Name</th>
                <th scope="col">Category</th>
                <th scope="col">Date</th>

            </tr>
        </thead>
        <tbody>
            <?php
            error_reporting(0);
            $query = "SELECT * FROM document WHERE username = '$user[0]' limit $start ,$per_page ";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);

            if ($total > 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "
                    <tr>
                        <td>" . $result['DocumentName'] . "</td>
                        <td>" . $result['Category'] . "</td>
                        <td>" . $result['UploadDate'] . "</td>   
                                                                         

                    </tr>
                    ";
                }
            }
            ?>
        </tbody>
    </table>

    <ul class="pagination   ">

        <?php   
        for($i=1;$i<=$pagi;$i++){ 
            $class='';
            if($current_page==$i){
                $class='active';
            }
            
            ?>
        <li class="page-item ml-100 <?php echo $class?> "><a class="page-link" href="?start=<?php echo $i ?>"><?php echo $i ?></a> </li>
        <?php } ?>


    </ul>







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

</body>

</html>