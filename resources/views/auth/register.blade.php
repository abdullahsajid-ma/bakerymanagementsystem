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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
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
    <title>Register</title>
    <style>
      .register-bg{
        border-radius: 1.2em;
        aspect-ratio: 1/0;
      }
    </style>
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
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" action="{{ route('register') }}" method="post">
                  @csrf
                  @method('post')
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" placeholder="Your Name" name="name" />
                      @if ($errors->has('name'))
                          <p class="text-danger">{{ $errors->first('name') }}</p>
                      @endif
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control"  placeholder="Your Email" name="email"/>
                      @if ($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                      @endif
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control"  placeholder="Your Password" name="password"/>
                      @if ($errors->has('password'))
                          <p class="text-danger">{{ $errors->first('password') }}</p>
                      @endif
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" class="form-control" name="password_confirmation" placeholder="Repeat your password" />
                      @if ($errors->has('password'))
                          <p class="text-danger">{{ $errors->first('password') }}</p>
                      @endif
                    </div>
                  </div>

                  <!-- <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div> -->

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://img.freepik.com/free-vector/hand-drawn-bakery-background_23-2148136973.jpg"
                  class="img-fluid register-bg" alt="bakery img">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"
  ></script>
</body>
</html>