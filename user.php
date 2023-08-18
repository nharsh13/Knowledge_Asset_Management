<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userlogin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</head>

<body>

    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://i.pinimg.com/564x/44/2d/00/442d001d35e56f543ccc09f84154e2f0.jpg"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="database_connection.php" method="post">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0 ">Asset Management</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3 text-danger" style="letter-spacing: 1px;">User login</h5>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form2Example17" class="form-control form-control-lg"
                                                name="user" />
                                            <label class="form-label" for="form2Example17">username</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27"
                                                class="form-control form-control-lg" name="pass" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                            <br>
                                            <?php
                                            if (isset($_SESSION['error'])) {
                                                $msg = $_SESSION['error'];
                                                echo "<p class='text-warning' >" . $msg . "</p";
                                                unset($_SESSION['error']);
                                            }
                                            ?>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <input class="btn btn-primary btn-lg btn-block" type="submit"                   
                                                value="Login" 
                                            />
                                            <br>
                                            <br><br>
            
                                            <!-- <a href="admin.php"><button   class="btn btn-success btn-lg btn-block" href="upload.php" type="button">Login as Admin
                                            </button></a> -->
                                            <a href="admin.php">Click here for admin login.</a>
                                            
                                            


                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>