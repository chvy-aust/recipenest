<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>RecipeNest</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">


    <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('recipes.index') }}" class="logo"><h1 class="sitename">RECIPEnest<i>!</i></h1></a>
      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('recipes.index') }}">Recipes</a></li>
            <li><a href="{{ route('chefs.index') }}">Chefs</a></li>

            @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a class="register-btn" href="{{ route('register') }}" >Sign Up</a></li>
            @endguest

            @auth
            <li><a>Dashboard</a></li>
            <li>
                <a href="{{ route('logout') }}"onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </li>
            @endauth
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

      </nav>
    </div>
  </header>

  <main class="main">

    {{ $slot }}

  </main>

  <footer id="footer" class="footer">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="logo mb-0 d-flex align-items-center">
                        <p class="mb-0"><b>RECIPEnest<i>!</i></b></p>
                    </div>
                    <div class="footer-contact pt-3">
                        <p>Share your recipes, discover new flavors,</p>
                        <p>and connect with food lovers worldwide.</p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Explore</h4>
                    <ul>
                        <li><a href="{{ route('recipes.index') }}">Recipes</a></li>
                        <li><a href="{{ route('chefs.index') }}">Chefs</a></li>
                        <li><a href="{{ route('chefs.index') }}">Dashboard</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to get recipes and updates!</p>
                    <form action="#" method="post" class="php-email-form">
                        <div class="newsletter-form">
                            <input type="email" name="email">
                            <input type="submit" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <b>RecipeNest<i>!</i></b> </I><span>All Rights Reserved</span></p>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <div id="preloader"></div>

</body>

</html>
