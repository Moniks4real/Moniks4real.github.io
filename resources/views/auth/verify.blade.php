<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>www.MOWS.com</title>
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/verify.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/w3.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/image/verify.css') }}">
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
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
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

