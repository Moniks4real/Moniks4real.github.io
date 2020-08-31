<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="{{ asset('/css/register.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/image/register.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/image/w3.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/w3.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>
    <div class="header">WELCOME TO MY ONLINE WARE HOUSE USER STORE <br>
     REGISTER HERE
    </div>
 <div class="mainbody" style="height:950px;width:auto;">
<div class="subbody">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
</div>
</body>
</html>
  

    