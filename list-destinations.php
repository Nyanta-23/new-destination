<<<<<<< HEAD
=======
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include("config.php");

?>

<!-- <a href="admin/login.php">Login</a> -->

>>>>>>> 0ed5f645728f291fda6db622fc5204784e5e6ccd
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <link rel="stylesheet" href="frontend-assets/styles/styles.css">
  <link rel="stylesheet" href="frontend-assets/styles/responsiveStyle.css">
  <title>Web Pariwisata | Destinations</title>
</head>

<body class="overflow-x-hidden">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary z-3 p-3 mr-2 position-fixed top-0 start-0 end-0 w-100 shadow-sm">

    <div class="container d-flex">

      <!-- For large size -->
      <div class="row ml-lg-2">

        <div class="col-3">
          <a class="navbar-brand fs-3" href="#"><span class="text-orange">Ambatu</span>trip</a>
        </div>
<<<<<<< HEAD
        <?php
        include "config.php";
        $query = mysqli_query($koneksi, "SELECT * FROM district");
        while ($data = mysqli_fetch_array($query))
        ?>

        <div class="col-5 mt-2 col-xl-6 d-none d-lg-block ms-xl-5">
          <form class="d-flex ms-lg-5 input-group" role="search">
=======

        <div class="col-5 mt-2 col-xl-6 d-none d-lg-block ms-xl-5 ms-lg-0">
          <form class="d-flex ms-lg-3 input-group" role="search">
>>>>>>> 0ed5f645728f291fda6db622fc5204784e5e6ccd
            <input class="form-control custom-border" type="search" placeholder="Search" aria-label="Search">
            <button class="btn search pr-3 d-flex border-search-button">
              <i class="bi bi-search"></i>
            </button>
          </form>
        </div>

<<<<<<< HEAD
        <div class="col-1 mt-1 d-none d-lg-block ms-xl-5 ms-lg-3">
          <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-5 d-flex ">
=======
        <div class="col-1 mt-1 d-none d-lg-block ms-xl-5 ms-lg-4">
          <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-4 d-flex ">
>>>>>>> 0ed5f645728f291fda6db622fc5204784e5e6ccd
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Destinations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
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
            <a class="nav-link custom-active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item mt-1">
            <a class="nav-link custom-link" href="#">Destinations</a>
          </li>
          <li class="nav-item mt-1">
            <a class="nav-link custom-link" href="#">Article</a>
          </li>
          <li class="nav-item mt-1">
            <a class="nav-link custom-link" href="#">About</a>
          </li>
        </ul>
      </div>
      <!-- For small size -->
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Header -->
  <section id="page-article" class="bg-destinations header-margin py-4">
    <div class="container">
      <div class="row">
        <div class="col p-5">
          <h1 class="text-black">Destinations</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- Header -->

  <!-- List Content -->
  <section id="list-article">
    <div class="container">
      <div class="row mt-5 mb-5 d-flex justify-content-center mx-sm-3 mx-xl-5 mx-lg-4">

<<<<<<< HEAD
        <div class="col-11 col-sm-8 col-md-5 col-lg-4 col-xl-3  d-inline-block d-flex justify-content-center">

          <div class="custom-cards-dest my-3 text-center position-relative overflow-hidden card-width card-hover" style="background-image: url('frontend-assets/images/destinations/destinationsImg.png');">

            <div class="card-window z-0"></div>
            <h5 class="card-title fw-bold text-white text-uppercase p-text-card position-relative z-1">bali</h5>
            <h3 class="card-text text-white pt-2 text-capitalize position-relative z-1">pulu watu</h3>

            <a href="#" class="btn margin-btn-cards mb-4 text-white btn-orange z-1 position-relative">Lihat Detail</a>
          </div>
        </div>

        <div class="col-11 col-sm-8 col-md-5 col-lg-4 col-xl-3  d-inline-block d-flex justify-content-center">
          <div class="custom-cards-dest my-3 text-center position-relative overflow-hidden card-width card-hover" style="background-image: url('frontend-assets/images/destinations/destinationsImg.png');">
            <div class="card-window z-0"></div>
            <h5 class="card-title fw-bold text-white text-uppercase p-text-card position-relative z-1">bali</h5>
            <h3 class="card-text text-white pt-2 text-capitalize position-relative z-1">pulu watu</h3>

            <a href="#" class="btn margin-btn-cards mb-4 text-white btn-orange z-1 position-relative">Lihat Detail</a>
          </div>
        </div>

        <div class="col-11 col-sm-8 col-md-5 col-lg-4 col-xl-3  d-inline-block d-flex justify-content-center">
          <div class="custom-cards-dest my-3 text-center position-relative overflow-hidden card-width card-hover" style="background-image: url('frontend-assets/images/destinations/destinationsImg.png');">
            <div class="card-window z-0"></div>
            <h5 class="card-title fw-bold text-white text-uppercase p-text-card position-relative z-1">bali</h5>
            <h3 class="card-text text-white pt-2 text-capitalize position-relative z-1">pulu watu</h3>

            <a href="#" class="btn margin-btn-cards mb-4 text-white btn-orange z-1 position-relative">Lihat Detail</a>
          </div>
        </div>

        <div class="col-11 col-sm-8 col-md-5 col-lg-4 col-xl-3  d-inline-block d-flex justify-content-center">
          <div class="custom-cards-dest my-3 text-center position-relative overflow-hidden card-width card-hover" style="background-image: url('frontend-assets/images/destinations/destinationsImg.png');">
            <div class="card-window z-0"></div>
            <h5 class="card-title fw-bold text-white text-uppercase p-text-card position-relative z-1">bali</h5>
            <h3 class="card-text text-white pt-2 text-capitalize position-relative z-1">pulu watu</h3>

            <a href="#" class="btn margin-btn-cards mb-4 text-white btn-orange z-1 position-relative">Lihat Detail</a>
          </div>
        </div>

        <div class="col-11 col-sm-8 col-md-5 col-lg-4 col-xl-3  d-inline-block d-flex justify-content-center">
          <div class="custom-cards-dest my-3 text-center position-relative overflow-hidden card-width card-hover" style="background-image: url('frontend-assets/images/destinations/destinationsImg.png');">
            <div class="card-window z-0"></div>
            <h5 class="card-title fw-bold text-white text-uppercase p-text-card position-relative z-1">bali</h5>
            <h3 class="card-text text-white pt-2 text-capitalize position-relative z-1">pulu watu</h3>

            <a href="#" class="btn margin-btn-cards mb-4 text-white btn-orange z-1 position-relative">Lihat Detail</a>
          </div>
        </div>

        <div class="col-11 col-sm-8 col-md-5 col-lg-4 col-xl-3  d-inline-block d-flex justify-content-center">
          <div class="custom-cards-dest my-3 text-center position-relative overflow-hidden card-width card-hover" style="background-image: url('frontend-assets/images/destinations/destinationsImg.png');">
            <div class="card-window z-0"></div>
            <h5 class="card-title fw-bold text-white text-uppercase p-text-card position-relative z-1">bali</h5>
            <h3 class="card-text text-white pt-2 text-capitalize position-relative z-1">pulu watu</h3>

            <a href="#" class="btn margin-btn-cards mb-4 text-white btn-orange z-1 position-relative">Lihat Detail</a>
          </div>
        </div>

        <div class="col-11 col-sm-8 col-md-5 col-lg-4 col-xl-3  d-inline-block d-flex justify-content-center">
          <div class="custom-cards-dest my-3 text-center position-relative overflow-hidden card-width card-hover" style="background-image: url('frontend-assets/images/destinations/destinationsImg.png');">
            <div class="card-window z-0"></div>
            <h5 class="card-title fw-bold text-white text-uppercase p-text-card position-relative z-1">bali</h5>
            <h3 class="card-text text-white pt-2 text-capitalize position-relative z-1">pulu watu</h3>

            <a href="#" class="btn margin-btn-cards mb-4 text-white btn-orange z-1 position-relative">Lihat Detail</a>
          </div>
        </div>

        <div class="col-11 col-sm-8 col-md-5 col-lg-4 col-xl-3  d-inline-block d-flex justify-content-center">
          <div class="custom-cards-dest my-3 text-center position-relative overflow-hidden card-width card-hover" style="background-image: url('frontend-assets/images/destinations/destinationsImg.png');">
            <div class="card-window z-0"></div>
            <h5 class="card-title fw-bold text-white text-uppercase p-text-card position-relative z-1">bali</h5>
            <h3 class="card-text text-white pt-2 text-capitalize position-relative z-1">pulu watu</h3>

            <a href="#" class="btn margin-btn-cards mb-4 text-white btn-orange z-1 position-relative">Lihat Detail</a>
          </div>
        </div>

=======
        <div class="col-sm-12 col-md-4 col-lg-4 d-inline-block d-flex justify-content-center">

          <div class="custom-cards-dest my-3 text-center overflow-hidden card-dest">
            <img src="frontend-assets/images/destinations/destinationsImg.png" alt="">
            <div class="info-dest text-center">
              <h5 class="text-uppercase">bali</h5>
              <h3 class="text-capitalize">pulu watu </h3>
            </div>
            <div class="btn-centering">
              <button href="#" class="btn text-white btn-orange z-2">Lihat Detail</button>
            </div>
          </div>

        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 d-inline-block d-flex justify-content-center">

          <div class="custom-cards-dest my-3 text-center overflow-hidden card-dest">
            <img src="frontend-assets/images/destinations/destinationsImg.png" alt="">
            <div class="info-dest text-center">
              <h5 class="text-uppercase">bali</h5>
              <h3 class="text-capitalize">pulu watu </h3>
            </div>
            <div class="btn-centering">
              <button href="#" class="btn text-white btn-orange z-2">Lihat Detail</button>
            </div>
          </div>

        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 d-inline-block d-flex justify-content-center">

          <div class="custom-cards-dest my-3 text-center overflow-hidden card-dest">
            <img src="frontend-assets/images/destinations/destinationsImg.png" alt="">
            <div class="info-dest text-center">
              <h5 class="text-uppercase">bali</h5>
              <h3 class="text-capitalize">pulu watu </h3>
            </div>
            <div class="btn-centering">
              <button href="#" class="btn text-white btn-orange z-2">Lihat Detail</button>
            </div>
          </div>

        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 d-inline-block d-flex justify-content-center">

          <div class="custom-cards-dest my-3 text-center overflow-hidden card-dest">
            <img src="frontend-assets/images/destinations/destinationsImg.png" alt="">
            <div class="info-dest text-center">
              <h5 class="text-uppercase">bali</h5>
              <h3 class="text-capitalize">pulu watu </h3>
            </div>
            <div class="btn-centering">
              <button href="#" class="btn text-white btn-orange z-2">Lihat Detail</button>
            </div>
          </div>

        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 d-inline-block d-flex justify-content-center">

          <div class="custom-cards-dest my-3 text-center overflow-hidden card-dest">
            <img src="frontend-assets/images/destinations/destinationsImg.png" alt="">
            <div class="info-dest text-center">
              <h5 class="text-uppercase">bali</h5>
              <h3 class="text-capitalize">pulu watu </h3>
            </div>
            <div class="btn-centering">
              <button href="#" class="btn text-white btn-orange z-2">Lihat Detail</button>
            </div>
          </div>

        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 d-inline-block d-flex justify-content-center">

          <div class="custom-cards-dest my-3 text-center overflow-hidden card-dest">
            <img src="frontend-assets/images/destinations/destinationsImg.png" alt="">
            <div class="info-dest text-center">
              <h5 class="text-uppercase">bali</h5>
              <h3 class="text-capitalize">pulu watu </h3>
            </div>
            <div class="btn-centering">
              <button href="#" class="btn text-white btn-orange z-2">Lihat Detail</button>
            </div>
          </div>

        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 d-inline-block d-flex justify-content-center">

          <div class="custom-cards-dest my-3 text-center overflow-hidden card-dest">
            <img src="frontend-assets/images/destinations/destinationsImg.png" alt="">
            <div class="info-dest text-center">
              <h5 class="text-uppercase">bali</h5>
              <h3 class="text-capitalize">pulu watu </h3>
            </div>
            <div class="btn-centering">
              <button href="#" class="btn text-white btn-orange z-2">Lihat Detail</button>
            </div>
          </div>

        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 d-inline-block d-flex justify-content-center">

          <div class="custom-cards-dest my-3 text-center overflow-hidden card-dest">
            <img src="frontend-assets/images/destinations/destinationsImg.png" alt="">
            <div class="info-dest text-center">
              <h5 class="text-uppercase">bali</h5>
              <h3 class="text-capitalize">pulu watu </h3>
            </div>
            <div class="btn-centering">
              <button href="#" class="btn text-white btn-orange z-2">Lihat Detail</button>
            </div>
          </div>

        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 d-inline-block d-flex justify-content-center">

          <div class="custom-cards-dest my-3 text-center overflow-hidden card-dest">
            <img src="frontend-assets/images/destinations/destinationsImg.png" alt="">
            <div class="info-dest text-center">
              <h5 class="text-uppercase">bali</h5>
              <h3 class="text-capitalize">pulu watu </h3>
            </div>
            <div class="btn-centering">
              <button href="#" class="btn text-white btn-orange z-2">Lihat Detail</button>
            </div>
          </div>

        </div>
>>>>>>> 0ed5f645728f291fda6db622fc5204784e5e6ccd

      </div>
    </div>
  </section>
  <!-- List Content -->

  <!-- Pagination -->

  <section class="d-flex mt-5 mb-4 justify-content-center">
    <nav aria-label="Page navigation example">
      <ul class="pagination">

        <!-- <li class="page-item">
        <a class="page-link text-orange" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li> -->

        <li class="page-item"><a class="page-link text-orange active-pagination" href="#">1</a></li>
        <li class="page-item"><a class="page-link text-orange" href="#">2</a></li>
        <li class="page-item"><a class="page-link text-orange" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link text-orange" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </section>

  <!-- Pagination -->

  <!-- Footer -->
  <footer class="bg-black">
    <div class="container">
      <div class="row-2">
        <div class="col text-start">
          <a class="navbar-brand fs-3 text-white" href="#">
            <h2 class="pt-5">
              <span class="text-orange">Ambatu</span>trip
            </h2>
          </a>
        </div>
        <div class="col text-white">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat totam earum perferendis, commodi corrupti
            et eligendi cum expedita. Dolores cum quia iure cumque nulla voluptas deleniti tempore ad sit? Atque.</p>
        </div>
        <div class="col text-white pt-2 pb-1">
          <p class="text-center">© 2023 <a class="text-white footer-link" href="https://www.linkedin.com/in/ihaannn/">Nyanta</a>. All right reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer -->

  <script src="admin/assets/script/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>