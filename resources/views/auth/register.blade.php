
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- favicon -->
      <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('assets2/css/bootstrap.min.css') }}" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/all.min.css') }}">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/style.css') }}">
      <title>Smart Tour Guide | Register </title>
</head>
<body>
    <div class="login-page" style="background-image: url({{ asset('assets2/images/bg.jpg') }});">
        <div class="login-from-wrap">

            <form method="POST" action="{{ route('register') }}" class="login-from">
                    @csrf
                <h1 class="site-title">
                    <a href="#">
                        <img src="{{ asset('assets2/images/logo.png') }}" alt="">
                    </a>
                </h1>
                <div class="form-group">
                    <label for="first_name1">Name</label>
                    <input type="text" name="name" class="validate @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="first_name1">Email</label>
                    <input type="text" name="email" class="validate @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="last_name">Password</label>
                    <input id="last_name" name="password" type="password" class="validate @error('password') is-invalid @enderror" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="last_name">Confirm Password</label>
                    <input id="last_name" name="password_confirmation" type="password" class="validate @error('password_confirmation') is-invalid @enderror" required autocomplete="new-password">
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <button class="btn button-primary" type="submit" >Login</button>
                </div>
                <a href="forgot.html" class="for-pass">Forgot Password?</a>
            </form>
        </div>
    </div>

    <!-- *Scripts* -->
    <script src="{{ asset('assets2/js/jquery-3.2.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="{{ asset('assets2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets2/js/canvasjs.min.js') }}"></script>
    <script src="{{ asset('assets2/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets2/js/dashboard-custom.js') }}"></script>
</body>
</html>
