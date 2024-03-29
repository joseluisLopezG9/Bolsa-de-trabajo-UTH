<!DOCTYPE html>
<html>
<head>
  <title>BOLSA DE TRABAJO UTH/REGISTRARSE</title>

<style>

body{
  height: 100vh;
  background: #0062E6 !important;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.card{
  overflow: hidden;
  border: 0 !important;
  border-radius: 20px !important;
  /* box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1); */
  box-shadow: 12px 12px 22px black;
}

.img-left{
  width: 35%;
  background: url('vendor/adminlte/dist/img/img.jpg') center; 
  background-size: cover;
}

.card-body{
  padding: 2rem;
}

.title{
  margin-bottom: 2rem;
}

.form-input{
  position: relative;
}

.form-input input{
  width: 100%;
  height: 45px;
  padding-left: 40px;
  margin-bottom: 20px;
  box-sizing: border-box;
  box-shadow: none;
  border: 1px solid #00000020;
  border-radius: 50px;
  outline: none;
  background: transparent;
}

.form-input span{
  position: absolute;
  top: 10px;
  padding-left: 15px;
  color: #007bff;
}

.form-input input::placeholder{
  color: black;
  padding-left: 0px;
}

.form-input input:focus, .form-input input:valid{
  border: 2px solid #007bff;
}

.form-input input:focus::placeholder{
  color: #454b69;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before{
  background-color: #007bff !important;
  border: 0px;
}

.form-box button[type="submit"]{
  margin-top: 10px;
  border: none;
  cursor: pointer;
  border-radius: 50px;
  background: green;
  color: #fff;
  font-size: 90%;
  font-weight: bold;
  letter-spacing: .1rem;
  transition: 0.5s;
  padding: 12px;
}

.form-box button[type="submit"]:hover{
  background: #0069d9;
}

.forget-link, .register-link{
  color: #007bff;
  font-weight: bold;
}

.forget-link:hover, .register-link:hover{
  color: #0069d9;
  text-decoration: none;
}
</style>




  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>
        <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
        @csrf

        <center><h3 class="font-weight-bold py-3" style="color: green; font-size: 35px;">Bolsa de trabajo institucional</h3></center>
        <center><img src="vendor/adminlte/dist/img/logoUTH.png" class="img-fluid" alt=""></center>
        <br>
        <i align="justify">Registrar un nuevo usuario</i>
        <br>
        <br>
          <form class="form-box px-3">
            <div class="form-input ">
              <span><i class="fa fa-user-circle"></i></span>
              <input id="nombre" type="text" placeholder="Nombre completo" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('nombre')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
            @enderror
            </div>


            <div class="form-input">
              <span><i class="fa fa-envelope-o"></i></span>
              <input id="email" type="email" placeholder="Correo electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
              @error('email')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-input">
              <span><i class="fa fa-key"></i></span>
              <input id="password" type="password" placeholder=" Contraseña" lass="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-input">
              <span><i class="fa fa-key"></i></span>
              <input id="password-confirm" type="password" placeholder="Repite tu contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>


            <div class="mb-3">
            @if (Route::has('home'))
              <button type="submit" class="btn btn-block text-uppercase btn btn-success">
              {{ __('Registrarme') }}
              </button>
            @endif
            </div>


            <div class="text-right">
            @if (Route::has('login'))
              <a class="forget-link" href=" {{ route('login') }} ">
               {{ __('Ya tengo una cuenta') }}
              </a>
            @endif
            </div>
            
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>