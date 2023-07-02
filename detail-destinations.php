<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include("config.php");

$id = $_GET['id'];

$detailDestinations = mysqli_query(
  $mysqli,
  "SELECT attractions.*, district.nama AS district_name
  FROM attractions
  INNER JOIN district ON attractions.district_id = district.id 
  WHERE attractions.id = '$id'
  "
);
$getData = mysqli_fetch_array($detailDestinations);

$category = $getData['category_id'];
$district = $getData['district_name'];
$name = $getData['name'];
$descript = $getData['description'];
$map_url = $getData['map_url'];
$image = $getData['image'];
$available_events = $getData['available_mosque']; //data row avalaible mosque cahnge to events
$available_toilet = $getData['available_toilet'];
$available_restaurant = $getData['available_restaurant'];

$patternRegx = '/src="([^"]+)"/';



$anyDestinations = mysqli_query(
  $mysqli,
  "SELECT attractions.*, district.nama AS district_name
  FROM attractions
  INNER JOIN district ON attractions.district_id = district.id
  ORDER BY id DESC
  LIMIT 0,3
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
          <h1 class="h-1 text-black mt-5">Detail Article</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- Header -->

  <!-- Main detail destinations -->
  <div class="container">
    <div class="row my-5 ">
      <div class="col-12 col-lg-8 border rounded">
        <div class="col">
          <h2 class="ml-2 pt-4 text-orange text-capitalize"><?= $name; ?></h2>
          <p class="ml-2 text-uppercase fw-medium"><?= $district; ?></p>
          <img src="admin/attraction/image/<?= $image; ?>" class="img-fluid custom-size-detail-dest-img rounded">
          <div class="mt-4 p-2 p-md-0">
            <h4 class="text-orange">Tentang Wisata</h4>
            <p><?= $descript; ?></p>
          </div>
        </div>

        <div class="row d-flex justify-content-center justify-content-md-center justify-content-lg-start">
          <div class="features d-flex justify-content-center align-items-center col-12 col-md-7 p-3 my-3 p-md-2">

            <?php if ($available_events > 0) { ?>
              <div class="col-3 mx-3 text-center">
                <img src="frontend-assets/images/destinations/ic_event.png" class="features-image" />
                <div class="description text-orange">
                  <h6>Events</h6>
                  <p>Available</p>
                </div>
              </div>
            <?php } ?>

            <?php if ($available_toilet > 0) { ?>
              <div class="col-3 mx-3 text-center">
                <img src="frontend-assets/images/destinations/ic_toilet.png" class="features-image" />
                <div class="description text-orange">
                  <h6>Toilet</h6>
                  <p>Available</p>
                </div>
              </div>
            <?php } ?>

            <?php if ($available_restaurant > 0) { ?>
              <div class="col-3 mx-3 text-center">
                <img src="frontend-assets/images/destinations/ic_resto.png" class="features-image" />
                <div class="description text-orange">
                  <h6>Restaurant</h6>
                  <p>Available</p>
                </div>
              </div>
            <?php } ?>

          </div>
        </div>

        <div class="col-12 col-lg-9 my-4 mx-auto mx-lg-0">
          <!--Google map-->
          <div class="mapouter">
            <div class="gmap_canvas">
              <?php if (preg_match($patternRegx, $map_url, $matches)) {
                $src = $matches[1]; ?>
                <iframe class="rounded gmaps shadow-md" id="gmap_canvas" src="<?= $src ?>" frameborder="0" scrolling="no" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <?php } else { ?>
                <h1 class="text-center">Salin link Iframe GMAPS dengan benar !</h1>
              <?php } ?>
            </div>
          </div>
          <!--Google Maps-->
        </div>
      </div>


      <!-- List any destinations -->
      <div class="col-0 col-lg-4 margin-side-list">
        <div class="row card mx-auto mx-lg-4 mx-xl-5">
          <div class="col">
            <h5 class="mt-3">Any Destinations</h5>

            <div class="mb-2 d-flex justify-content-center d-lg-block ">

              <?php while ($destinations = mysqli_fetch_array($anyDestinations)) { ?>
                <div class="row g-0 mt-3">
                  <a class="text-decoration-none text-white" href="detail-destinations.php?id=<?= $destinations['id'] ?>">
                    <div class="custom-cards-dest my-3 text-center overflow-hidden side-card-dest">
                      <img src="admin/attraction/image/<?= $destinations['image']; ?>" alt="">
                      <div class="info-side-dest text-center">
                        <h5 class="text-uppercase"><?= $destinations['district_name']; ?></h5>
                        <h3 class="text-capitalize"><?= $destinations['name']; ?></h3>
                      </div>
                    </div>
                  </a>
                </div>
              <?php } ?>

            </div>
          </div>
        </div>
        <!-- List any destinations -->

      </div>
      <!-- Main detail destinations -->
    </div>
  </div>




  <?php include_once("footer.php") ?>
</body>

</html>