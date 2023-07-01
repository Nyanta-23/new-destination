<!-- Navbar -->

<nav class="navbar navbar-expand-lg bg-body-tertiary z-3 p-3 mr-2 position-fixed top-0 start-0 end-0 w-100 shadow-sm">

  <div class="container d-flex">

    <!-- For large size -->
    <div class="row ml-lg-2">

      <div class="col-3">
        <a class="navbar-brand fs-3" href="#"><span class="text-orange">Ambatu</span>trip</a>
      </div>

      <div class="col-5 mt-2 col-xl-6 d-none d-lg-block ms-xl-5 ms-lg-0">
        <form class="d-flex ms-lg-3 input-group" role="search">
          <input class="form-control custom-border" type="search" placeholder="Search" aria-label="Search">
          <button class="btn search pr-3 d-flex border-search-button">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>

      <div class="col-1 mt-1 d-none d-lg-block ms-xl-5 ms-lg-4">
        <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-4 d-flex ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/web-pariwisata/index.php#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="list-destinations.php">Destinations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="list-article.php">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/web-pariwisata/index.php#about">About</a>
          </li>
        </ul>
      </div>

      <div class="collapse navbar-collapse"></div>
    </div>
    <!-- For large size -->

    <!-- For small size -->
    <button class="navbar-toggler d-block d-sm-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse mt-3 mx-2" id="navbarSupportedContent">

      <form class="d-flex d-lg-none" role="search">
        <input class="form-control custom-border search-radius" type="search" placeholder="Search" aria-label="Search">
        <button class="btn search pr-3 d-flex border-search-button">
          <i class="bi bi-search"></i>
        </button>
      </form>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-2 text-center d-lg-none d-xl-none d-xxl-none">
        <li class="nav-item mt-1">
          <a class="nav-link custom-active" aria-current="page" href="http://localhost/web-pariwisata/index.php#home">Home</a>
        </li>
        <li class="nav-item mt-1">
          <a class="nav-link custom-link" href="list-destinations.php">Destinations</a>
        </li>
        <li class="nav-item mt-1">
          <a class="nav-link custom-link" href="list-article.php">Article</a>
        </li>
        <li class="nav-item mt-1">
          <a class="nav-link custom-link" href="http://localhost/web-pariwisata/index.php#about">About</a>
        </li>
      </ul>
    </div>
    <!-- For small size -->
  </div>
</nav>

<!-- Navbar -->