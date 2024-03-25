<?php
require 'function.php';


//cek login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //cocokan dengan database
    $cekdatabase = mysqli_query($conn, "SELECT * FROM user where username='$username' and password='$password'");

    //hitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);


    if ($hitung > 0) {
        $ambildatarole = mysqli_fetch_array($cekdatabase);
        $role = $ambildatarole['role'];
        if ($role == 'admin') {
            $_SESSION['username'] = $username;
            $_SESSION['admin'] = 'admin';
            header('location:index.php');
        } else if ($role == 'waiter') {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = 'waiter';
            header('location:waiter/dashboardWaiter.php');
        } else if ($role == 'kasir') {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = 'kasir';
            header('location:kasir/kasir.php');
        } else if ($role == 'owner') {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = 'owner';
            header('location:owner/owner.php');
        } 
    } else {
        echo "Username atau Password Salah";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary ">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center mt-5">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center"    >
                                        <h1 class="h4 text-gray-900 mb-4">L O G I N</h1>
                                    </div>
                                    <form class="user" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="username" aria-describedby="emailHelp" placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Enter Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">

                                            </div>
                                        </div>
                                        <button name="login" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>

                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>