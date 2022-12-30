<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Cart</title>
</head>
<body>
<section class="Nav-section pb-5">
<nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="{{url('/')}}"
            ><img class="logo" src="https://github.com/abdullahsajid-ma/bakery/blob/main/Super%20Sweet.png?raw=true" alt="super sweet"
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
                  href="{{ url('menu')}}"
                  >MENU</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark nav-hov" href="#">REWARDS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark nav-hov">GIFT CARDS</a>
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

<section class="mt-5 container cart-item">
    <div>
        <div class="d-flex justify-content-around align-items-center">
            <div class="cart-img-div">
                <img class="cart-img" src="{{ asset('gallery/'. $image)}}" alt="">
            </div>
            <div>
                <h1 class="cart-head">{{$itemname}}</h1>
            </div>
        </div>
    </div>
</section>

<section class="container mt-5">
    <div class="container">
        <div class="d-flex justify-content-between">
        <input type="hidden" name="Id" value="{{$id}}">
            <div class="cart-desc">
                <div>
                    <h3>Description</h3>
                </div>
                <hr>
                <div>
                    <p>{{$itemdesc}}</p>
                </div>    
            </div>
            <div class="cart-procced">
                <div>
                    <div>
                        <h3>Price</h3>
                    </div>
                    <hr>
                    <div>
                       <h5>Rs: {{$itemprice}} pkr </h5>
                    </div>
                    <div class="cart-pro-btn mt-5">
                        <a href="{{route('login')}}"><button>Procced</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="mt-5 container login-footer">
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
</body>
</html>