<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
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
	<style type="text/css">
		/* Add some style to the page */
		.header {
			background-color: #ddd;
			color: white;
			padding: 60px;
			text-align: center;
      margin-top: 30px;
		}
		.content {
			margin: 20px;
		}
		h1 {
			font-size: 28px;
			margin-bottom: 20px;
		}
		p {
			font-size: 16px;
			line-height: 1.5;
		}
		.logo {
			display: block;
			margin: 0 auto;
			width: 200px;
			height: 200px;
			border-radius: 100px;
			background-color: #ccc;
		}
    .marg{
      margin-top: 150px;
    }
	</style>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
<section class="Nav-section pb-5">
      <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/"
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

	<div class="header">
		<!-- Add a logo -->
		<div class="logo"></div>
		<!-- Add the page title -->
		<h1>About Us</h1>
	</div>
	<div class="content mb-5">
		<!-- Add some information about your company -->
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a purus non enim finibus condimentum. Suspendisse potenti. Aliquam dignissim tortor auctor massa congue, a eleifend enim finibus. Suspendisse potenti. Aliquam erat volutpat. Donec auctor lorem ac elit efficitur, in sollicitudin ante dictum. Aliquam erat volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
		<p>Sed vel dictum urna. Ut sollicitudin erat sit amet neque auctor, in suscipit nisl feugiat. Aliquam erat volutpat. Nunc tincidunt, nisl id viverra fermentum, felis nibh convallis nunc, in interdum diam nisl a ipsum. Integer id dictum ligula, eu ultricies ipsum. Integer hendrerit dui dui, ac pharetra metus egestas id. In hac habitasse platea dictumst. Maecenas volutpat porttitor tortor, at luctus nulla euismod a. Suspendisse potenti. Mauris vestibulum dignissim felis, non malesuada ipsum dignissim at.</p>
	</div>

  <div class="marg">
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
