<div class="container">
    <nav class="navbar navbar-expand-lg navbar-backend">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars dark" style="color: #ffffff;"></i>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-backend" href="#">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link nav-link-backend dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Data Management
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item dropdown-item-backend" href=" {{ route('magang.index')}} ">Manage Data Magang & PKL</a>
                <a class="dropdown-item dropdown-item-backend" href="#">Manage Data Kelas Kursus Offline</a>
                <a class="dropdown-item dropdown-item-backend" href="#">Manage Data Jual Beli</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
</div>