<?php
error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>LOGIN ADMIN ORGANISASI</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

  <body class="bg-gradient-dark">
    <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">MENU LOGIN</h1>
                      <?php
                    $msg = $_GET['msg'];
                    if ($_GET['msg']=="success"){
                  echo '
                  <div class="alert alert-success" role="alert">
                        Akun Berhasil di Buat
                        </div>';}
                else if ($_GET['msg']=="error"){
                        echo '
                  <div class="alert alert-danger" role="alert">
                          Username atau Password Salah
                          </div>';}
                    ?>
                    </div>
                    <form action="perintah_login.php" method="post" class="user">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="Username" aria-describedby="UsernameHelp" placeholder="Username..." name="Username" required autofocus/>
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="Password" placeholder="Password" name="Password" required />
                      </div>
                      <button type="submit" name="login" class="btn btn-info btn-user btn-block"> Login </button>
                    </form>
                    <hr />
                    <div class="text-center">
                      <a class="small" href="register.php">Buat Akun</a>
                    </div>
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
