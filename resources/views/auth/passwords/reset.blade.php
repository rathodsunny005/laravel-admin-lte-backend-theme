<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  @include('Backend.layout.Header.css')
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
  {{ env('APP_NAME') }}
    <a href=""><b>Admin</b>Reset Password</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">New membership</p>

      <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        
        <div class="input-group mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
          

         <div class="input-group-append">
            <div class="input-group-text">
              @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
               @enderror 
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password">

            <div class="input-group-append">
            <div class="input-group-text">
              @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror 
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="new-confirm password">
          <div class="input-group-append">
            <div class="input-group-text">
              @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror 
            </div>
          </div>
        </div>

          <!-- /.col -->
          <div class="col-4">
          <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

      
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
@include('Backend.layout.Footer.js')
</body>
</html>
