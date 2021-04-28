

<nav id="navbar" class="navbar navbar-expand-md fixed-top bg-transparent">
    <a class="navbar-brand" href="{{route('welcome')}}"><i class="fas fa-leaf"></i></a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon nav-btn"> <i class="fas fa-bars"></i> </span>
    </button>
  
    <div class="collapse navbar-collapse nvb-collapse" id="navbarsExample04">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link mx-1" href="{{route('welcome')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
          <div class="dropdown-menu" aria-labelledby="dropdown04">
            <a class="dropdown-item nav-link" href="{{route('articles.index')}}">Leggi il Blog</a>
            <a class="dropdown-item nav-link" href="{{route('articles.create')}}">Crea il tuo articolo</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-1" href="{{route('chiSiamo')}}">Chi siamo</a>
        </li>
      </ul>


      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
            
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
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
  </nav>