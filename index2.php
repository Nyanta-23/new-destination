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
  <title>Web Pariwisata</title>
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

        <div class="col-5 mt-2 col-xl-6 d-none d-lg-block ms-xl-5">
          <form class="d-flex ms-lg-5 input-group" role="search">
            <input class="form-control custom-border" type="search" placeholder="Search" aria-label="Search">
            <button class="btn search pr-3 d-flex border-search-button">
              <i class="bi bi-search"></i>
            </button>
          </form>
        </div>

        <div class="col-1 mt-1 d-none d-lg-block ms-xl-5 ms-lg-3">
          <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-5 d-flex ">
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

  <!-- Jumbotron -->

  <section class="jumbotron mt-5 bg-jumbotron position-relative text-md-center text-lg-start">
    <div class="bg-window z-0"></div>
    <h1 class="mt-3 mt-xl-5 display-3 text-orange fw-700 z-2 position-relative text-start">Where Would You Like To Go?
    </h1>

    <p class="lead text-white z-2 position-relative text-start">Lorem ipsum dolor sit amet consectetur, adipisicing
      elit. Dicta sed
      sint mollitia magnam aspernatur labore reiciendis ex dolore, molestias, perspiciatis commodi quam distinctio
      impedit laboriosam corrupti ut ratione incidunt qui.</p>

    <a class="btn btn-orange btn-custom-size text-white z-2 position-relative btn-custom-rounded w-100 " href="#" role="button">Get Started</a>
  </section>

  <!-- Jumbotron -->


  <!-- Main Page -->
  <section id="destinations">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <h3 class="h3 text-center text-orange text-md-start">Destinations</h3>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-sm-6 col-md-4 col-lg-3  d-inline-block d-flex justify-content-center">
          <div class="custom-cards-dest my-3 text-center position-relative overflow-hidden card-width card-hover" style="background-image: url('frontend-assets/images/destinations/destinationsImg.png');">
            <div class="card-window z-0"></div>
            <h5 class="card-title fw-bold text-white text-uppercase p-text-card position-relative z-1">bali</h5>
            <h3 class="card-text text-white pt-2 text-capitalize position-relative z-1">pulu watu</h3>

            <a href="#" class="btn margin-btn-cards mb-4 text-white btn-orange z-1 position-relative">Lihat Detail</a>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3  d-inline-block d-flex justify-content-center">
          <div class="custom-cards-dest my-3 text-center position-relative overflow-hidden card-width card-hover" style="background-image: url('frontend-assets/images/destinations/destinationsImg.png');">
            <div class="card-window z-0"></div>
            <h5 class="card-title fw-bold text-white text-uppercase p-text-card position-relative z-1">bali</h5>
            <h3 class="card-text text-white pt-2 text-capitalize position-relative z-1">pulu watu</h3>

            <a href="#" class="btn margin-btn-cards mb-4 text-white btn-orange z-1 position-relative">Lihat Detail</a>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3  d-inline-block d-flex justify-content-center">

          <div class="custom-cards-dest my-3 text-center position-relative overflow-hidden card-width card-hover" style="background-image: url('frontend-assets/images/destinations/destinationsImg.png');">
            <div class="card-window z-0"></div>
            <h5 class="card-title fw-bold text-white text-uppercase p-text-card position-relative z-1">bali</h5>
            <h3 class="card-text text-white pt-2 text-capitalize position-relative z-1">pulu watu</h3>

            <a href="#" class="btn margin-btn-cards mb-4 text-white btn-orange z-1 position-relative">Lihat Detail</a>
          </div>

        </div>

        <div class="col-sm-6 col-md-4 col-lg-3  d-inline-block d-flex justify-content-center">

          <div class="custom-cards-dest my-3 text-center position-relative overflow-hidden card-width card-hover" style="background-image: url('frontend-assets/images/destinations/destinationsImg.png');">
            <div class="card-window z-0"></div>
            <h5 class="card-title fw-bold text-white text-uppercase p-text-card position-relative z-1">bali</h5>
            <h3 class="card-text text-white pt-2 text-capitalize position-relative z-1">pulu watu</h3>

            <a href="#" class="btn margin-btn-cards mb-4 text-white btn-orange z-1 position-relative">Lihat Detail</a>
          </div>
        </div>

      </div>

      <div class="col text-center ">
        <a href="#" class="btn btn-show-more text-white my-3">Show More</a>
      </div>
    </div>
  </section>

  <section id="article">
    <div class="container-md mt-5">
      <div class="row">
        <div class="col">
          <h3 class="h3 text-center text-orange text-md-start">Article</h3>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row d-flex justify-content-sm-center justify-content-md-between">

        <div class="col-sm-10 col-md-4 col-lg-4  d-inline-block d-flex justify-content-center">
          <div class="my-3">
            <a href="#">
              <img src="frontend-assets/images/article/article.png" class="card-img-top rounded-2" alt="...">
            </a>
            <div class="card-body">
              <p class="info fw-medium">
                <span class="author">Ilhan</span>
                -
                <span class="category">Anime</span>
              </p>
              <a class="title-article" href="#">
                <h5 class="article">Event anime, kok cosplay genshin? "Bukan Main"</h5>
              </a>
            </div>
          </div>
        </div>

        <div class="col-sm-10 col-md-4 col-lg-4  d-inline-block d-flex justify-content-center">
          <div class="my-3">
            <a href="#">
              <img src="frontend-assets/images/article/article.png" class="card-img-top rounded-2" alt="...">
            </a>
            <div class="card-body">
              <p class="info fw-medium">
                <span class="author">Ilhan</span>
                -
                <span class="category">Anime</span>
              </p>
              <a class="title-article" href="#">
                <h5 class="article">Event anime, kok cosplay genshin? "Bukan Main"</h5>
              </a>
            </div>
          </div>
        </div>

        <div class="col-sm-10 col-md-4 col-lg-4  d-inline-block d-flex justify-content-center">
          <div class="my-3">
            <a href="#">
              <img src="frontend-assets/images/article/article.png" class="card-img-top rounded-2" alt="...">
            </a>
            <div class="card-body">
              <p class="info fw-medium">
                <span class="author">Ilhan</span>
                -
                <span class="category">Anime</span>
              </p>
              <a class="title-article" href="#">
                <h5 class="article">Event anime, kok cosplay genshin? "Bukan Main"</h5>
              </a>
            </div>
          </div>
        </div>

      </div>

      <div class="col text-center ">
        <a href="#" class="btn btn-show-more text-white my-3">Show More</a>
      </div>
    </div>


  </section>

  <!-- Main Page -->

  <!-- About Us -->
  <section id="about">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <h3 class="h3 text-md-start text-center text-orange mb-3">About Us</h3>
        </div>
      </div>
      <div class="row">
        <div class=" col-12 order-2 order-md-0 col-md-7 d-md-flex mt-4 mt-md-0">
          <p class="text-start lh-base">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum aspernatur
            debitis, recusandae molestiae quisquam, adipisci temporibus laboriosam odio, placeat maxime officia aut
            perspiciatis voluptas architecto a dignissimos quidem eaque fugiat? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo laborum a vel laudantium similique veniam! Autem quae vel accusantium commodi voluptate odit dicta, praesentium numquam totam omnis cupiditate suscipit aperiam.
            Praesentium ducimus mollitia alias a facilis nostrum dicta, dolore fugiat sapiente itaque, deleniti asperiores ipsum libero, voluptas quia aut soluta magni voluptatem harum quasi. Voluptas iure fuga aliquid quis voluptate!</p>
        </div>

        <div class="col order-1 order-md-0 col-md-5 d-flex justify-content-center align-content-start">
          <swiper-container class="mySwiper" navigation="false" space-between="30" centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
            <swiper-slide>
              <div class="card border rounded" style="width: 18rem;">
                <img src="frontend-assets/images/members-image/me.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center text-black">
                  <i>Front-End Developer</i>
                  <h5>Muhamad Ilhan Revaliana Firmansyah</h5>
                  <p class="card-text">
                    A2.2100076
                  </p>
                </div>
              </div>
            </swiper-slide>

            <swiper-slide>
              <div class="card border rounded" style="width: 18rem;">
                <img src="frontend-assets/images/members-image/me.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center text-black">
                  <i>Front-End Developer</i>
                  <h5>Muhamad Ilhan Revaliana Firmansyah</h5>
                  <p class="card-text">
                    A2.2100076
                  </p>
                </div>
              </div>
            </swiper-slide>

            <swiper-slide>
              <div class="card border rounded" style="width: 18rem;">
                <img src="frontend-assets/images/members-image/me.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center text-black">
                  <i>Front-End Developer</i>
                  <h5>Muhamad Ilhan Revaliana Firmansyah</h5>
                  <p class="card-text">
                    A2.2100076
                  </p>
                </div>
              </div>
            </swiper-slide>

            <swiper-slide>
              <div class="card border rounded" style="width: 18rem;">
                <img src="frontend-assets/images/members-image/me.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center text-black">
                  <i>Front-End Developer</i>
                  <h5>Muhamad Ilhan Revaliana Firmansyah</h5>
                  <p class="card-text">
                    A2.2100076
                  </p>
                </div>
              </div>
            </swiper-slide>
          </swiper-container>
        </div>
      </div>
    </div>
  </section>

  <!-- About Us -->

  <!-- Footer -->
  <footer class="bg-black mt-5">
    <div class="container">
      <div class="row-2">
        <div class="col text-start">
          <a class="navbar-brand fs-3 text-white" href="#">
            <h2 class="pt-5">
              <span class="text-orange">Ambatu</span>trip
            </h2>
          </a>
        </div>
        <?php
        include "config.php";
        $query = mysqli_query($koneksi, "SELECT * FROM district");
        while ($data = mysqli_fetch_array($query))
        ?>
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





  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <script src="frontend-assets/script/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>