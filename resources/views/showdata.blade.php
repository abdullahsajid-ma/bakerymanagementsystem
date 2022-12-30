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
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    
    <title>Document</title>
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
                  href=""
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
<section>
    
</section>
    <h3 class="container my-5">All Bakery items</h3>
    <div class="container" id="myTable">
        <div class="row" >
            @foreach($data as $items)
            <div class="col-xxl-3">
            <form action="Update" method="get" enctype="multipart/form-data">
                        <div class="card m-3">
                            <div class="card-body">
                            <input type="hidden" name="Id" value="{{$items['Id']}}">
                              <div class="item-img-div">
                                <img class="item-img" name="itemimage" src="{{ asset('gallery/'. $items->image) }}">
                              </div>
                                <button type="button" class="btn btn-dark my-3"><input type="hidden" name="itemcat" value="{{$items['itemcatgory']}}">{{$items['itemcatgory']}}</button>
                                    <h5 class="card-title my-3"><input type="hidden" name="itemname" value="{{$items['itemname']}}">Product Name: {{$items['itemname']}}</h5>
                                    <p class="card-text h5 my-3"><input type="hidden" name="itemdesc" value="{{$items['itemdescription']}}">Description: {{$items['itemdescription']}}</p>
                                    <a href="#" class="btn btn-primary me-5"><input type="hidden" name="itemprice" value="{{$items['itemprice']}}">Rs:{{$items['itemprice']}}</a>
                                    <!-- <button type="button" class="btn btn-danger" value="Update" name="update">update</button> -->
                                    <input type="submit" name="update" value="Update" class="btn btn-success my-3">
                                    <input type="submit" value="delete" class="btn btn-danger">
                            </div>
                        </div>
            </form>
            </div>
            @endforeach
        </div>
    </div>
  <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
  </script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"
  ></script>
  <script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
</body>
</html>
