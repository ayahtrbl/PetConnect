<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PetConnect</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="{{asset('css/landing_page_darkmode.css')}}">
    </head>
    <body>
      <form id="logout" method="post" action="{{ route('logout') }}" class="search-form">
        @csrf
      </form>
        <header>
          <nav class="navbar">
            <a href="/" class="logo">
              <img src="{{asset('images/logo.png')}}" alt="Pet Connect" class = "w-auto h-12">
            </a>
            <ul class="menu-links">
              @auth
              <li><a href="{{route('dashboard')}}" >Home</a></li>
              <li><a href="#">Adopt</a></li>
              <li><a href="#">Donate</a></li>
              <li >
                <button form="logout" class = "hover:bg-green-500 hover:border-white/0 text-white px-3 py-2 rounded-md border-2 ease-in-out duration-100 border-white">Log Out</button>
              </li>
              @else
              <li><a href="{{route('login')}}">Sign In</a></li>
              <li class="join-btn"><a href="{{route('register')}}">Register</a></li>
              @endauth
              <span id="close-menu-btn" class="material-symbols-outlined">close</span>
            </ul>
            <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
          </nav>    
        </header>
      
        <section class="hero-section">
          <div class="content">
            <h1>Connect with pet and be their Friend</h1>
            <form action="#" class="search-form">
              <input type="text" placeholder="Search for any service..." required>
              <button class="material-symbols-outlined" type="sumbit">search</button>
            </form>
            <div class="popular-tags">
              VISIT US
              <ul class="tags">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="#">Instagram</a></li>
              </ul>
            </div>
          </div>
        </section>
      
          <script>
          const header = document.querySelector("header");
          const hamburgerBtn = document.querySelector("#hamburger-btn");
          const closeMenuBtn = document.querySelector("#close-menu-btn");
      
          // Toggle mobile menu on hamburger button click
          hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));
      
          // Close mobile menu on close button click
          closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());
        </script>
      </body>
</html>
