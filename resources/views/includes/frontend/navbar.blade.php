<div class="container">
    <nav class="navbar navbar-expand-lg">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars dark" style="color: #ffffff;"></i>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Our Services
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Servis Laptop & CPU</a>
                <a class="dropdown-item" href=" {{ route('magang.index')}} ">Program Magang & PKL</a>
                <a class="dropdown-item" href="#">Kelas Kursus Offline</a>
                <a class="dropdown-item" href="#">Jual Beli</a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
</div>