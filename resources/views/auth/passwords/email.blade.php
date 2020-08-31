<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>www.MOWS.com</title>
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/email.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/w3.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/image/email.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/image/w3.css') }}">
      <script src="{{ asset('js/bootstrap.js')  }}"></script>
  </head>
<body>
    <div class="mainbody" style="height:950px;width:auto;">
        <div class="header">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
<div class="subbody">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="grid-container">
  <div class="grid-item"><a href="AboutUs.php">About Us</a></div>
  <div class="grid-item"><a href="www.Instagram.com/MOWS">Instagram</a></div>
  <div class="grid-item"><a href="News.php">News</a></div>  
  <div class="grid-item"><a href="ContactUs.php">Contact Us</a></div>
  <div class="grid-item"><a href="www.Facebook.com/MOWS">Facebook</a></div>
  <div class="grid-item"><a href="Gallery.php">Gallery</a></div>  
  <div class="grid-item"><a href="More.php">More</a></div>
  <div class="grid-item"><a href="www.twitter.com/MOWS">Twitter</a></div>
  <div class="grid-item"><a href="Tech.php">Tech</a></div>  
</div>
</body>
</html>
