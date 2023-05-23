<nav class="navbar navbar-light bg-light">
  <div class="container-fluid px-5">
    <h1>Ciao   <small>{{ Auth::user()->name }}</small> ! </h1>

    
      <div>

        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
  
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-block">
            @csrf
        </form>
      </div>
    
  </div>
</nav>