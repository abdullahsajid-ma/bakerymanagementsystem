<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <title>Login</title>
</head>
<body>
<section class="Nav-section pb-5">
      <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="{{url('/')}}"
            ><img class="logo" src="https://github.com/abdullahsajid-ma/bakery/blob/main/Super%20Sweet.png?raw=true" alt=""
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link text-dark nav-hov"
                  aria-current="page"
                  href="{{url('menu')}}"
                  >MENU</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark nav-hov" href="{{url('contact')}}">CONTACT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark nav-hov">ABOUT</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <i class="bi bi-geo-alt-fill icon"></i>
              <li class="nav-item">
                <a href="#" class="nav-link store">Find a store</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link sign-in">Log in</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link join-now">Join now</a>
              </li>
              @if(Route::has('login'))
                @auth
                <li class='nav-item'>
                  <a href="{{ route('logout')}}" class="nav-link sign-in logout">Logout</a>
                </li> 
                @endauth
              @endif
            </ul>
          </div>
        </div>
      </nav>
    </section>
@if(Session::has('error'))
    <p class="text-danger">{{ Session::get('error')}}</p>
@endif
@if(Session::has('success'))
    <p class="text-success">{{ Session::get('success')}}</p>
@endif
<div class="wrapper fadeInDown">
  <div id="formContent">
   
    <div class="fadeIn first">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8JyScJ3XAm0g9mNMQ1Ws7EI6LoVgs7_HDXg&usqp=CAU" id="icon" alt="User Icon" />
    </div>

    <form action="{{ route('login')}}" method="post">
        @csrf
        @method('post')
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="login">
      @if($errors->has('email'))
        <p class="text-danger">{{$errors->first('email')}}</p>
      @endif 
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      @if($errors->has('password'))
        <p class="text-danger">{{$errors->first('password')}}</p>
      @endif
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
<section class="login-footer">
  <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item">
              <a href="#" class="nav-link px-2 text-black font">Privacy Policy</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link px-2 text-black font">Terms of Use</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link px-2 text-black font"
                >Cookie Preferences</a
              >
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link px-2 text-black font"
                >CA Supply Chain Act</a
              >
            </li>
          </ul>
          <p class="text-center text-muted">
            &copy; 2022 Super Sweet & Bakers Company, Inc
          </p>
        </footer>
  </div>
</section>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"
  ></script>
</body>
</html>