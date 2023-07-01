<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include("config.php");

$destinations = mysqli_query(
  $mysqli,
  "SELECT attractions.*, district.nama AS district_name
  FROM attractions
  INNER JOIN district ON attractions.district_id = district.id
  ORDER BY id DESC
  "
);

?>
<!-- <a href="admin/login.php">Login</a> -->

<!DOCTYPE html>
<html lang="en">

<?php include_once("head.php") ?>

<body class="overflow-x-hidden">

  <?php include_once("navbar.php") ?>

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

        <?php while ($listDestinations = mysqli_fetch_array($destinations)) { ?>
          <div class="col-sm-12 col-md-4 col-lg-4 d-inline-block d-flex justify-content-center">

            <div class="custom-cards-dest my-3 text-center overflow-hidden card-dest">
              <img src="admin/attraction/image/<?= $listDestinations['image'] ?>" alt="">
              <div class="info-dest text-center">
                <h5 class="text-uppercase"><?= $listDestinations['name']; ?></h5>
                <h3 class="text-capitalize"><?= $listDestinations['district_name'] ?></h3>
              </div>
              <div class="btn-centering">
                <a href="detail-destinations.php?id=<?= $listDestinations['id'] ?>" class="btn text-white btn-orange z-2">Lihat Detail</a>
              </div>
            </div>
          </div>
        <?php } ?>

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

  <?php include_once("footer.php") ?>
</body>

</html>