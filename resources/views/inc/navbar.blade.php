<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  <div class="container">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/welcome">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/about">About</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/manage">Manage Reservation</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/status">Reservation Status</a>
        </li>
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right" >
          <!-- Authentication Links -->
          @if (Auth::guest())
              <li><a href="{{ route('login') }}" style="padding-right:10px;color:white">Login</a></li>|
              <li><a href="{{ route('register') }}" style="padding-left:10px;color:white">Register</a></li>
          @else
              <li class="dropdown">
                  <a href="#" style="color:white" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu" style="text-align:center">
                      <li >
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();" style="color:black">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif
      </ul>
    </div>
  </div>
</nav>
