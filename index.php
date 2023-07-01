<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include("config.php");

$destinations = mysqli_query(
  $mysqli,
  "SELECT attractions.*, district.nama
  FROM attractions
  INNER JOIN district ON attractions.district_id = district.id
  ORDER BY id DESC
  LIMIT 0,4
  "
);

$article = mysqli_query(
  $mysqli,
  "SELECT article.*, users.nama, category.nama
  FROM article
  INNER JOIN users ON article.author_id = users.id
  INNER JOIN category ON article.category_id = category.id
  ORDER BY id DESC
  LIMIT 0,3
  "
);



?>

<!-- <a href="admin/login.php">Login</a> -->

<!DOCTYPE html>
<html lang="en">

<?php include_once("head.php") ?>

<body id="home" class="overflow-x-hidden" data-bs-spy="scroll" data-bs-target="navbar" tabindex="0">

  <?php include_once("navbar.php") ?>

  <!-- Jumbotron -->

  <section class="jumbotron mt-5 bg-jumbotron position-relative text-md-center text-lg-start" style="padding: 5rem 0;">
    <div class="container">
      <div class="bg-window z-0"></div>
      <h1 class="mt-3 mt-xl-5 display-3 text-orange fw-700 z-2 position-relative text-start">Where Would You Like To Go?
      </h1>
      <p class="lead text-white z-2 position-relative text-start">Lorem ipsum dolor sit amet consectetur, adipisicing
        elit. Dicta sed
        sint mollitia magnam aspernatur labore reiciendis ex dolore, molestias, perspiciatis commodi quam distinctio
        impedit laboriosam corrupti ut ratione incidunt qui.
      </p>
      <a class="btn btn-orange active-dark-orange btn-custom-size text-white z-2 position-relative btn-custom-rounded w-100 " href="#destinations" role="button">Get Started</a>
    </div>
  </section>

  <!-- Jumbotron -->


  <main>
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

          <?php
          while ($attr = mysqli_fetch_array($destinations)) {
          ?>
            <div class="col-sm-6 col-md-4 col-lg-3 d-inline-block d-flex justify-content-center">
              <div class="custom-cards-dest my-3 text-center overflow-hidden card-dest">
                <img src="admin/attraction/image/<?= $attr['image']; ?>">
                <div class="info-dest text-center">
                  <h5 class="text-uppercase fs-6"><?= $attr['district_id']; ?></h5>
                  <h3 class="text-capitalize fs-5"><?= $attr['name']; ?></h3>
                </div>
                <div class="btn-centering">
                  <a href="detail-destinations.php?id=<?= $attr['id'] ?>" class="btn text-white btn-orange z-2">Lihat Detail</a>
                </div>
              </div>
            </div>
          <?php
          }
          ?>

        </div>

        <div class="col text-center">
          <a href="list-destinations.php" class="btn btn-show-more text-white my-3">Show More</a>
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

          <?php
          while ($articles = mysqli_fetch_array($article)) {
          ?>
            <div class="col-11 col-sm-10 col-md-4 col-lg-4 d-block ml-3 ml-sm-0">
              <div class="my-3">
                <a href="detail-article.php?id=<?= $articles['id'] ?>" class="text-decoration-none">
                  <div class=" my-3 text-center overflow-hidden landing-card-article">
                    <img src="admin/artikel/image/<?= $articles['image']; ?>" class="card-img-top rounded-2" alt="...">
                    <div class="text-see-hover-landing pt-5 mt-4">
                      <h5 class="fs-3 h-3">Lihat</h5>
                    </div>
                  </div>
                </a>

                <div class="card-body">
                  <p class=" ml-1 mt-2 fw-medium">
                    <span><?= $articles['author_id']; ?></span>
                    -
                    <span><?= $articles['category_id']; ?></span>
                  </p>
                  <a class="title-article" href="detail-article.php?id=<?= $articles['id'] ?>">
                    <h5 class="article mx-1"><?= $articles['title']; ?></h5>
                  </a>
                </div>
              </div>
            </div>
          <?php
          }
          ?>

        </div>

        <div class="col text-center ">
          <a href="list-article.php" class="btn btn-show-more text-white my-3">Show More</a>
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
            <p class="text-start lh-base">Kami adalah tim yang beranggotakan 4 orang dengan setiap orang memiliki rolenya masing masing. Dalam tim kami, kami memiliki 1 Orang UI/UX, 1 Orang Front-End Developer dan 2 Orang Back-End Developer. </p>
          </div>

          <div class="col order-1 order-md-0 col-md-5 d-flex justify-content-center align-content-start">
            <swiper-container class="mySwiper" navigation="true" space-between="30" centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">

              <swiper-slide>
                <div class="card border rounded" style="width: 18rem;">
                  <img src="frontend-assets/images/members-image/agus.png" class="card-img-top" alt="...">
                  <div class="card-body text-center text-black">
                    <i>Back-End Developer</i>
                    <h6>Agus Padilah</h6>
                    <p class="card-text">
                      A2.2100002
                    </p>
                  </div>
                  <div class="card-link d-flex justify-content-center ">
                    <a class="text-decoration-none text-orange pb-2 fs-5 mx-2" target="_blank" href="https://github.com/apadilah30">
                      <i class="bi bi-github"></i>
                    </a>
                    <a class="text-decoration-none text-orange pb-2 fs-5 mx-2" target="_blank" href="https://www.linkedin.com/in/apadilah30/">
                      <i class="bi bi-linkedin"></i>
                    </a>
                    <a class="text-decoration-none text-orange pb-2 fs-5 mx-2" target="_blank" href="https://www.instagram.com/apadilah30/">
                      <i class="bi bi-instagram"></i>
                    </a>
                  </div>
                </div>
              </swiper-slide>

              <swiper-slide>
                <div class="card border rounded" style="width: 18rem;">
                  <img src="frontend-assets/images/members-image/Ilhan.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center text-black">
                    <i>Front-End Developer</i>
                    <h6>Muhamad Ilhan Revaliana Firmansyah</h6>
                    <p class="card-text">
                      A2.2100076
                    </p>
                  </div>
                  <div class="card-link d-flex justify-content-center ">
                    <a class="text-decoration-none text-orange pb-2 fs-5 mx-2" target="_blank" href="https://github.com/Nyanta-23">
                      <i class="bi bi-github"></i>
                    </a>
                    <a class="text-decoration-none text-orange pb-2 fs-5 mx-2" target="_blank" href="https://www.linkedin.com/in/ihaannn/">
                      <i class="bi bi-linkedin"></i>
                    </a>
                    <a class="text-decoration-none text-orange pb-2 fs-5 mx-2" target="_blank" href="https://www.instagram.com/ihaannn_/">
                      <i class="bi bi-instagram"></i>
                    </a>
                  </div>
                </div>
              </swiper-slide>



              <swiper-slide>
                <div class="card border rounded" style="width: 18rem;">
                  <img src="frontend-assets/images/members-image/ryan.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center text-black">
                    <i>Back-End Developer</i>
                    <h6>AA Rian Sophian</h6>
                    <p class="card-text">
                      A2.2100010
                    </p>
                  </div>
                  <div class="card-link d-flex justify-content-center ">
                    <a class="text-decoration-none text-orange pb-2 fs-5 mx-2" target="_blank" href="https://github.com/Riannnars">
                      <i class="bi bi-github"></i>
                    </a>
                    <a class="text-decoration-none text-orange pb-2 fs-5 mx-2" target="_blank" href="https://www.linkedin.com/in/aa-rian-sophian-203909277/">
                      <i class="bi bi-linkedin"></i>
                    </a>
                    <a class="text-decoration-none text-orange pb-2 fs-5 mx-2" target="_blank" href="https://www.instagram.com/ariannns57/?hl=id">
                      <i class="bi bi-instagram"></i>
                    </a>
                  </div>
                </div>
              </swiper-slide>

              <swiper-slide>
                <div class="card border rounded" style="width: 18rem;">
                  <img src="frontend-assets/images/members-image/faisal.png" class="card-img-top" alt="...">
                  <div class="card-body text-center text-black">
                    <i>UI-UX Designer</i>
                    <h6>Faisal Rahman</h6>
                    <p class="card-text">
                      A2.2100043
                    </p>
                  </div>
                  <div class="card-link d-flex justify-content-center ">
                    <a class="text-decoration-none text-orange pb-2 fs-5 mx-2" target="_blank" href="http://github.com/Qyupaww">
                      <i class="bi bi-github"></i>
                    </a>
                    <a class="text-decoration-none text-orange pb-2 fs-5 mx-2" target="_blank" href="http://linkedin.com/in/qyupaww">
                      <i class="bi bi-linkedin"></i>
                    </a>
                    <a class="text-decoration-none text-orange pb-2 fs-5 mx-2" target="_blank" href="http://instagram.com/qyupaww">
                      <i class="bi bi-instagram"></i>
                    </a>
                  </div>
                </div>
              </swiper-slide>

            </swiper-container>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- About Us -->

  <?php include_once("footer.php") ?>
</body>

</html>