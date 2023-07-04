<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include("config.php");


$current_page = (isset($_GET['page'])) ? (int) $_GET['page'] : 1;

// Jumlah data per halaman
$limit = 9;

$offset = ($current_page - 1) * $limit;

$previous = $current_page - 1;
$next = $current_page + 1;

$destinations = mysqli_query(
  $mysqli,
  "SELECT attractions.*, district.nama AS district_name
  FROM attractions
  INNER JOIN district ON attractions.district_id = district.id
  ORDER BY id DESC
  LIMIT $limit OFFSET $offset"
);

$query_count = mysqli_query(
  $mysqli,
  "SELECT COUNT(id) FROM attractions"
);

$jumlah_data = mysqli_fetch_array($query_count)[0];
$total_halaman = ceil($jumlah_data / $limit);
$max_page = $total_halaman;

?>


<!-- <a href="admin/login.php">Login</a> -->

<!DOCTYPE html>
<html lang="en">

<?php include_once("head.php") ?>

<body class="overflow-x-hidden">

  <?php include_once("navbar.php") ?>

  <!-- Header -->
  <section id="page-destinations" class="bg-destinations header-margin py-4">
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
  <section id="list-destinations">
    <div class="container">
      <div class="row mt-5 mb-5 d-flex justify-content-start mx-sm-3 mx-xl-5 mx-lg-4">

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

        <li class="page-item <?= ($previous < 1) ? 'd-none' : false ?>">
          <a class="page-link text-orange" aria-label="Previous" href="list-destinations.php?page=<?= $previous ?>">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>

        <?php for ($i = 0; $i < $total_halaman; $i++) { ?>
          <li class="page-item">
            <a class="page-link text-orange <?= ($current_page == $i + 1) ? 'active-pagination' : false ?>" href="list-destinations.php?page=<?= $i + 1 ?>"><?= $i + 1 ?></a>
          </li>
        <?php } ?>
        <li class="page-item <?= ($next > $max_page) ? 'd-none' : false ?>">
          <a class="page-link text-orange" aria-label="Next" href="list-destinations.php?page=<?= $next ?>">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </section>

  <?php include_once("footer.php") ?>
</body>

</html>