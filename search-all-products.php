<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include("config.php");

$search = $_GET['search'];

$destinations = mysqli_query(
  $mysqli,
  "SELECT attractions.*, district.nama AS district_name
  FROM attractions
  INNER JOIN district ON attractions.district_id = district.id
  WHERE attractions.name LIKE '%" . $search . "%'
  "
);

$article = mysqli_query(
  $mysqli,
  "SELECT article.*, users.nama AS user_name, category.nama AS category_name
  FROM article
  INNER JOIN users ON article.author_id = users.id
  INNER JOIN category ON article.category_id = category.id
  WHERE article.title LIKE '%" . $search . "%'
  "
);

?>

<!DOCTYPE html>
<html lang="en">

<?php include_once("head.php") ?>

<body class="overflow-x-hidden">

  <?php include_once("navbar.php") ?>

  <main>

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
                  <h5 class="text-uppercase fs-6"><?= $attr['district_name']; ?></h5>
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
        <div class="row d-flex justify-content-sm-center justify-content-md-start">

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
                    <span><?= $articles['user_name']; ?></span>
                    -
                    <span><?= $articles['category_name']; ?></span>
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
    </section>




    <?php include_once("footer.php") ?>
  </main>
</body>

</html>