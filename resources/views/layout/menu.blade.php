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
    <title>Menu</title>
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

<section class="mt-5">
  <div class="container">
    <div>
      <h2 class="pt-3">Menu</h2>
    </div> 
    <div class="mt-5 container">
      <div>
        <h4>Cakes</h4>
      </div>
      <div>
        <hr>
      </div>
      <div>
        <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-3 row-cols-md-2">
          @foreach($itemdata as $item)
          @if('cake' == $item['itemcatgory'])
          <form action="menu" method="get" enctype="multipart/form-data">
            <div class="col d-flex py-3  cursor">
                <button class="col d-flex align-items-center py-3 cursor main-item-btn" type="submit" name="contents" value="Contents">
                  <div class="cake-div">
                    <img src="{{ asset('gallery/'. $item->image) }}" class="cakes-img">
                  </div>
                  <div class="d-flex align-items-center px-3">
                    <h5 name="itemname">{{$item['itemname']}}</h5>
                  </div>
              
                  <input type="hidden" name="Id" value="{{$item['Id']}}">
                  <input type="hidden" name="itemname" value="{{$item['itemname']}}">
                  <input type="hidden" name="itemdesc" value="{{$item['itemdescription']}}">
                  <input type="hidden" name="itemprice" value="{{$item['itemprice']}}">
                  <input type="hidden" name="itemimage" value="{{$item['image']}}">
                </button>    
            </div>
          </form> 
          @endif
          @endforeach
        </div>
      </div>

      <div class="biscuit-wrapper mt-3">
        <div>
          <h4>Biscuit</h4>
        </div>
        <div>
          <hr>
        </div>
        <div>
          <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-3 row-cols-md-2">
            @foreach($itemdata as $item)
            @if('biscuit' == $item['itemcatgory'])
            <form action="menu" method="get" enctype="multipart/form-data">
              <div class="col d-flex py-3 cursor">
                <button class="col d-flex align-items-center py-3 cursor main-item-btn" type="submit" name="contents" value="Contents">
                  <div class="cake-div">
                    <img src="{{ asset('gallery/'. $item->image) }}" alt="" class="cakes-img">
                  </div>
                  <div class="d-flex align-items-center px-3">
                    <h5>{{$item['itemname']}}</h5>
                  </div>
                  <input type="hidden" name="Id" value="{{$item['Id']}}">
                  <input type="hidden" name="itemname" value="{{$item['itemname']}}">
                  <input type="hidden" name="itemdesc" value="{{$item['itemdescription']}}">
                  <input type="hidden" name="itemprice" value="{{$item['itemprice']}}">
                  <input type="hidden" name="itemimage" value="{{$item['image']}}">
                </button>
              </div>
            </form>
            @endif
            @endforeach
          </div>
        </div>
      </div>

      <div class="bread-wrapper mt-3">
        <div>
          <h4>Bread</h4>
        </div>
        <div>
          <hr>
        </div>
        <div>
          <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-3 row-cols-md-2">
            @foreach($itemdata as $item)
            @if('bread' == $item['itemcatgory'])
            <form action="menu" method="get" enctype="multipart/form-data">
              <div class="col d-flex py-3 cursor">
                <button class="col d-flex align-items-center py-3 cursor main-item-btn" type="submit" name="contents" value="Contents">
                  <div class="cake-div">
                    <img src="{{ asset('gallery/'. $item->image)}}" alt="" class="cakes-img">
                  </div>
                  <div class="d-flex align-items-center px-3">
                    <h5>{{$item['itemname']}}</h5>
                  </div>
                  <input type="hidden" name="Id" value="{{$item['Id']}}">
                  <input type="hidden" name="itemname" value="{{$item['itemname']}}">
                  <input type="hidden" name="itemdesc" value="{{$item['itemdescription']}}">
                  <input type="hidden" name="itemprice" value="{{$item['itemprice']}}">
                  <input type="hidden" name="itemimage" value="{{$item['image']}}">
                </button>
              </div>
            </form>
            @endif
            @endforeach
          </div>
        </div>
      </div>

      <div class="pastry-wrapper mt-3">
        <div>
          <h4>Pastry</h4>
        </div>
        <div>
          <hr>
        </div>
        <div>
          <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-3 row-cols-md-2">
            @foreach($itemdata as $item)
            @if('pastry' == $item['itemcatgory'])
            <form action="menu" method="get" enctype="multipart/form-data">
              <div class="col d-flex py-3 cursor">
                <button class="col d-flex align-items-center py-3 cursor main-item-btn" type="submit" name="contents" value="Contents">
                  <div class="cake-div">
                    <img src="{{ asset('gallery/'. $item->image)}}" alt="" class="cakes-img">
                  </div>
                  <div class="d-flex align-items-center px-3">
                    <h5>{{$item['itemname']}}</h5>
                  </div>
                  <input type="hidden" name="Id" value="{{$item['Id']}}">
                    <input type="hidden" name="itemname" value="{{$item['itemname']}}">
                    <input type="hidden" name="itemdesc" value="{{$item['itemdescription']}}">
                    <input type="hidden" name="itemprice" value="{{$item['itemprice']}}">
                    <input type="hidden" name="itemimage" value="{{$item['image']}}">
                </button>
              </div>
            </form>
            @endif
            @endforeach
          </div>
        </div>
      </div>

      <div class="pizza-wrapper mt-3">
        <div>
          <h4>Pizaa</h4>
        </div>
        <div>
          <hr>
        </div>
        <div>
        <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-3 row-cols-md-2">
          @foreach($itemdata as $item)
          @if('pizza' == $item['itemcatgory'])
          <form action="menu" method="get" enctype="multipart/form-data">
            <div class="col d-flex py-3 cursor">
              <button class="col d-flex align-items-center py-3 cursor main-item-btn" type="submit" name="contents" value="Contents">
                <div class="cake-div">
                  <img src="{{ asset('gallery/'. $item->image)}}" alt="" class="cakes-img">
                </div>
                <div class="d-flex align-items-center px-3">
                  <h5>{{$item['itemname']}}</h5>
                </div>
                <input type="hidden" name="Id" value="{{$item['Id']}}">
                <input type="hidden" name="itemname" value="{{$item['itemname']}}">
                <input type="hidden" name="itemdesc" value="{{$item['itemdescription']}}">
                <input type="hidden" name="itemprice" value="{{$item['itemprice']}}">
                <input type="hidden" name="itemimage" value="{{$item['image']}}">
              </button>
            </div>
          </form>
          @endif
          @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="mt-5 container">
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