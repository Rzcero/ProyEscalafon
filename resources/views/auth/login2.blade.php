@extends('layouts.app')

@section('content')

<div class="login-box">
  <div class="login-logo">
    <a href="{{ url('/') }}"><b>UNPRG</b>-Escalafon</a>
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
          <input type="password" name="password" class="form-control" placeholder="Password">
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
@endsection