@include('login.components.header')
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Reservas</b> Gruva</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Iniciar sesión para acceder al sistema.</p>
      <form action="login" method="POST">
      @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="usuario" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="login-box-msg text-danger font-weight-bold">{{ $error }}</p>
            </div>
        </div>
        <div class="row"> 
            <div class="col-2">
            </div>
            <div class="col-8">
                <button type="submit" class="btn btn-primary btn-block ">Iniciar sesión</button>
            </div>
            <div class="col-2">
            </div>
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- SCRIPTS -->
@include('login.components.footer')

</body>
</html>
