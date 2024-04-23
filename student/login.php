<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HEAL ME | User Login</title>
  
  <link href="assets/img/HEALME-LOGO-MAIN.png" rel="icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/adminlte.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="userLogin.php" class="h1"><b>HEAL ME</b> User</a>
    </div>
    <div class="card-body">

      <form action="code.php" method="POST">

        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-6">
            <p class="mt-1 ml-2">
                <a href="#">I forgot my password</a>
            </p>
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-12 mb-2">
            <button type="submit" class="btn btn-primary btn-block" name="userLoginBtn" id="userLoginBtn">LOGIN</button>
          </div>
        </div>
        
      </form>

        <div class="row">
          <div class="col-12 text-center">
            <a href="../admin/adminLogin.php">or sign in as an Admin</a>
          </div>
        </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->


<script src="assets/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/adminlte.min.js"></script>

<!-- SweetAlert -->
<script src="assets/sweetalert.min.js"></script>


<?php
  if(isset($_SESSION['status']) && $_SESSION['status'] !='')
  {
    ?>
      <script>
        // script for adding users
        swal({
          title: "<?php echo $_SESSION['status']; ?>",
          icon: "<?php echo $_SESSION['status_code']; ?>",
        });
      </script>
    <?php
    unset($_SESSION['status']);
  }
?>

</body>
</html>
