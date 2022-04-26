<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= DASH; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= DASH; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= DASH; ?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= DASH; ?>index2.html" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
        <div class="message">
            <?php
                if(!empty($_GET['success'])){
                    switch($_GET['success']){
                        case 'false':
                            echo 'Error Email';
                            break;
                        default:
                            echo 'Error';
                            break;
                    }
                }
            ?>
        </div>
      <form action="<?= URL; ?>login/run" method="post" id="form">
        <div class="input-group mb-3">
          <input type="text" name="email" class="form-control" placeholder="Email" id="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= DASH; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= DASH; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= DASH; ?>dist/js/adminlte.min.js"></script>
<script>
    $(document).ready(function(){
        $('#form').submit(function(){       
            var bodyFormData = new FormData();
            bodyFormData.append('email', $('#email').val());
            bodyFormData.append('password', $('#password').val()); 

            axios({
            method: "post",
            url: "/login/run",
            data: bodyFormData,
            headers: { "Content-Type": "application/json" },
            })
            .then(function (response) {
                //handle success
                if(response.data.success == true){
                    $('.message').html('<div class="alert alert-success" role="alert">'+response.data.message+'</div>')
                    setTimeout(function(){
                        window.location.href = response.data.url;
                    }, 2000)
                }
                else{
                    $('.message').html('<div class="alert alert-danger" role="alert">'+response.data.message+'</div>')
                }
            })
            .catch(function (response) {
                //handle error
                console.log(response);
            });
            return false;
        });
    });
</script>
</body>
</html>
