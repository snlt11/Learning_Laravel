<div class="container-fluid bg-dark">
    <nav class="container navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">
            <i class="material-icons me-2" >home</i>
            <span>
                BARMASO
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                    @auth
                        {{Auth::user()->name}}
                    @endauth

                    @unless (Auth::check())
                        <i class="material-icons">person</i>
                    @endunless

                </a>
                <ul class="dropdown-menu">

                    @auth
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    @endauth

                    @guest
                        <li><a class="dropdown-item" href="/user/login">Login</a></li>
                        <li><a class="dropdown-item" href="/user/register">Register</a></li>
                    @endguest

                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</div>
