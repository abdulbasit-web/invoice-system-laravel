<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token"
    content="{{ csrf_token() }}">

  <title>{{ __('Frontend/frontend.invoice_system') }}</title>



  <!-- Fonts -->
  <link rel="dns-prefetch"
    href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito"
    rel="stylesheet">
  <link href="{{ asset('frontend/css/fontawesome/all.min.css') }}"
    rel="stylesheet">


  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}"
    rel="stylesheet">
  @if (config('app.locale') == 'ar' || config('app.locale') == 'kr')
    <link href="{{ asset('frontend/css/bootstrap-rtl.css') }}"
      rel="stylesheet">
  @endif

  @yield('style')
</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand"
          href="{{ url('/') }}">
          {{ __('Frontend/frontend.invoice_system') }}
        </a>
        <button class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"
          id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item px-2">
              <a class=" btn btn-primary "
                href="{{ route('change-langauge', 'ar') }}">Ar</a>
            </li>

            <li class="nav-item">
              <a class=" btn btn-secondary"
                href="{{ route('change-langauge', 'en') }}">En</a>
            </li>
            <li class="nav-item px-2">
              <a class=" btn btn-success text-white "
                href="{{ route('change-langauge', 'kr') }}">Kr</a>
            </li>

            {{-- <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest --}}
          </ul>
        </div>
      </div>
    </nav>


    <main class="py-4">
      <div class="container">
        @include("partial.flash")
        @yield('content')
      </div>
    </main>
  </div>


  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('frontend/js/fontawesome/all.min.js') }}"></script>
  <script>
    $(function() {
      $('#session-alert').fadeTo(1500, 500).slideUp(500, function() {
        $('#session-alert').slideUp(500);
      })
    })

  </script>

  @yield('script')
</body>

</html>
