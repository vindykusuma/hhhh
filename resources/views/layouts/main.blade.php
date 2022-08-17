<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('judul') | Phi Photo</title>
    @include('partials.atribut')


</head>

{{-- <div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="d-flex d-flex justify-content-around">
      {{-- <div class="logo">
        <h1 class="logo"><a href="/beranda">Phi Photo</a></h1> --}}
      {{-- </div> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="/" class="logo">
        <img src="{{ asset('admin/img/logo2.png')}}" alt="" class="img-fluid"></a>
      <div class="nav">
        @include('partials.navbar')
      </div>
      <div class="login">
        <ul class="navbar">
          <!-- Authentication Links -->
          @guest
              @if (Route::has('login'))
                  <li class="nav-item text-dark" >
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif

              {{-- @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif --}}
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-end" >
                      <a class="dropdown-item" href="#"
                         onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
        </ul>
      </div>
          <!-- .navbar -->
    </div>
  </header><!-- End Header -->
@yield('content')

  <!-- ======= Footer ======= -->
@include('partials.footer')


@include('partials.atribut')
</body>
</html>
