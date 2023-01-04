<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <title>Super Sweet & Bakers</title>
  </head>
  <body>
    <section class="Nav-section pb-5">
      <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"
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
                <a class="nav-link text-dark nav-hov" href="{{url('about')}}">ABOUT</a>
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
    <section class="first-container mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg" style="padding-right: 0; padding-left: 0">
            <img
              class="first-img"
              src="https://images.unsplash.com/photo-1523294587484-bae6cc870010?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1302&q=80"
              alt=""
            />
          </div>
          <div class="col-lg first-area text-center">
            <div class="first-area-content">
              <h1>Fall at your fingertips</h1>
              <p>
                Ordering your fall favorites is a snap with the app. Join
                SuperSweet&Bakers®
              </p>
              <div class="join">Join now</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="second-container container">
      <div class="container">
        <div class="row">
          <div class="col-lg second-area">
            <h1 style="color: #1e3932; font-weight: 700 !important">
              Buy Cake, Come Experience The Taste Of Joy.
            </h1>
            <p class="second-para">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Doloribus dolorum dicta aliquam iure quisquam dolore aut, optio
              natus similique ipsa?
            </p>
            <div class="learn">Learn more</div>
          </div>
          <div class="col-lg img-area">
            <img
              class="second-img"
              src="https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=936&q=80"
              alt=""
            />
            <img
              class="second-imgs"
              src="https://images.unsplash.com/photo-1602351447937-745cb720612f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=386&q=80"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <section class="third-container">
      <div class="container">
        <div class="row">
          <div class="col-lg third-area">
            <h1>A taste of paradise.</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Repudiandae dolores tenetur praesentium dolore, saepe nobis
              cupiditate explicabo. Quidem, ut. Ratione!
            </p>
            <div class="order">Order now</div>
          </div>
          <div class="col-lg" style="padding-left: 0; padding-right: 0">
            <img
              class="third-img"
              src="https://images.unsplash.com/photo-1579697096985-41fe1430e5df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1172&q=80"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <hr class="container" />
    <div class="container login-footer">
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
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"
  ></script>
</html>
