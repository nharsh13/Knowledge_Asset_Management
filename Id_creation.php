<?php
session_start();
include 'Config.php';
if (isset($_SESSION['u_data'])) {
    $user = $_SESSION['u_data'];
}

// $per_page = 9       ;
// $start=0;
// $current_page=1;  

// if(isset($_GET['start'] )){
//     $start=$_GET['start'];
//     $current_page=$start;
//     $start--;
//     $start=$start*$per_page;
// }
// $record = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM document  "));
// $pagi = ceil($record / $per_page);                                                                      

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Reg.css">
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
            padding-bottom: 5.2rem;
            box-sizing: inherit;
            background-color: #FFFEF6;
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

        .pagination {
            margin-left: 45%;
            /* padding-bottom: 15px; */


        }

        .note {
            text-align: center;
            height: 100px;
            background: -webkit-linear-gradient(left, #0072ff, #8811c5);
            color: #fff;
            font-weight: bold;
            line-height: 10px;
        }

        body {
            /* padding-top: 50px;
            margin: 0;
            font-family: 'Lato', sans-serif;
            font-size: 12px;
            line-height: 1.8em;
            text-transform: none;
            letter-spacing: .075em;
            font-weight: bold;
            font-style: normal;
            text-decoration: none;
            color: #e7bd74;
            background-color: rgba(249 249 249);
            display: block; */
        }

        .title {
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .form-content {
            padding: 5%;
            border: 1px solid #ced4da;
            margin-bottom: 2%;
            /* padding-top: 50px;
            margin-top: 50px; */

        }

        .form-control {
            border-radius: 1.5rem;
            display: block;
            width: 100%;
            height: calc(2.25rem + 5px);
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #e7decc;
            ;
            background-clip: padding-box;
            border: 1px solid #ced4da;
        }

        .btnSubmit {
            border: none;
            border-radius: 1.5rem;
            padding: 1%;
            width: 20%;
            cursor: pointer;
            background: #0062cc;
            color: #fff;
        }

        h1 {
            /* font-family: sans-serif; */
            display: block;
            font-size: 1rem;
            font-weight: bold;
            text-align: center;
            letter-spacing: 3px;
            color: hotpink;
            text-transform: uppercase;
            padding-top: 35px;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            text-decoration: none;
            color: #496583;
        }

        input:invalid {
            background-color: white;
            border-color: red;
        }
        .form{
            margin-top: 10px;
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
                    <!-- <li class="nav-item">
                        <a class="nav-link mx-2 " href="welcome.php">Home</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link mx-2 " href="welcome_admin.php">Assets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" aria-current="page" href="Id_creation.php">Id Creation</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mx-2" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container register-form">
        <form class="form" action="Reg_Control.php" method="post">
            <div class="note">
                <h1> Asset Management Admin Registration Form. </h1>
            </div>
            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="name" class="form-control" placeholder="User Name *" value=""
                                name="Username" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="User Full Name*" value=""
                                name="fullname" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value=""
                                name="password" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password *" value=""
                                name="CPassword" />
                        </div>
                    </div>

                </div>

                <div class="row align-items-center mt-4">
                    <div class="col">
                        <input type="Email" class="form-control"
                            placeholder=" Email Id(Ex-ab123456.ttl@tatamotors.com)*" name="EmailId">
                    </div>
                </div>
                <div class="row align-items-center mt-4">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Phone Number *" name="PhoneNumber">
                    </div>
                </div>


                <div class="row justify-content-start mt-4">
                    <div class="col">

                        <button type="submit" class="btnSubmit" name="submit" id="submit"> Submit </button>
                    </div>
                </div>
            </div>
        </form>


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




</body>

</html>