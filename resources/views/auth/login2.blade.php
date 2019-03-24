<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Escalafon_UNPRG</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- Para Fuente Awesome 5.7.2-->
  <!-- <script defer src="{{ asset('js/all.js') }}"></script> -->
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>UNPRG</b>-Escalafon</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Iniciar sesión para acceder a Escalafon</p>

      <form action="{{ route('login') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
          <input type="email" name="email" class="form-control" placeholder="Ingresa tu email" value="{{ old('email') }}">
          <span class="fa fa-envelope form-control-feedback"></span>
          {!! $errors->first('email','<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
          <input type="password" class="form-control" placeholder="Password">
          <span class="fa fa-lock form-control-feedback"></span>
          {!! $errors->first('password','<span class="help-block">:message</span>') !!}
        </div>
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Recuérdame
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesión</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="#">Has olvidado la contraseña?</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Crear cuenta</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
