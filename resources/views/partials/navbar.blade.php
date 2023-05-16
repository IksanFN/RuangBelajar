<nav class="navbar navbar-expand-lg bg-white shadow-smooth py-3 sticky-top">
    <div class="container">
      <a class="navbar-brand fw-semibold text-primary" href="{{ route('home') }}">SanCamp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Bootcamp</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.html">About Us</a>
          </li>
        </ul>
        @auth
        <div class="flex-shrink-0 dropdown">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
            <img src="{{ Auth::user()->avatar }}" alt="mdo" width="40" height="40" class="ms-2 rounded-circle">
          </a>
          <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">My Dashboard</a></li>
            <li><a class="dropdown-item" href="#">My Bootcamp</a></li>
            <li><a class="dropdown-item" href="#">Transaction</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        </div>
        @else
        <div class="d-flex">
          <a href="{{ route('auth') }}" class="btn btn-light btn-rounded py-2 px-4 me-3">Login</a>
          <a href="{{ route('auth') }}" class="btn btn-primary btn-rounded py-2 px-4">Sign Up</a>
        </div>
        @endauth
      </div>
    </div>
</nav>