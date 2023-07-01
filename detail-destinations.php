<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include("config.php");

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
          <h2 class="ml-2 pt-4 text-orange text-capitalize">pura uluwatu</h2>
          <p class="ml-2 text-uppercase fw-medium">bali</p>
          <img src="frontend-assets/images/destinations/destinationsImg.png" class="img-fluid custom-size-detail-dest-img rounded" alt="...">
          <div class="mt-4 p-2 p-md-0">
            <h4 class="text-orange">Tentang Wisata</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor nulla, mollitia velit est maiores natus assumenda maxime exercitationem iure dignissimos atque possimus quidem enim! Et accusamus facilis dolores rem voluptas.
              Facilis, voluptas! Dignissimos laboriosam unde laudantium eius, id quos aperiam voluptatum tempora ea error laborum sed harum magnam sint quo dolor assumenda, rerum possimus labore deserunt. Assumenda corporis facilis quo.</p>
          </div>
        </div>

        <div class="row d-flex justify-content-center justify-content-md-center justify-content-lg-start">
          <div class="features d-flex justify-content-center align-items-center col-12 col-md-7 p-3 my-3 p-md-2">
            <div class="col-3 mx-3 text-center">
              <img src="frontend-assets/images/destinations/ic_event.png" alt="" class="features-image" />
              <div class="description text-orange">
                <h6>Events</h6>
                <p>Available</p>
              </div>
            </div>
            <div class="col-3 mx-3 text-center">
              <img src="frontend-assets/images/destinations/ic_toilet.png" alt="" class="features-image" />
              <div class="description text-orange">
                <h6>Toilet</h6>
                <p>Available</p>
              </div>
            </div>
            <div class="col-3 mx-3 text-center">
              <img src="frontend-assets/images/destinations/ic_resto.png" alt="" class="features-image" />
              <div class="description text-orange">
                <h6>Restaurant</h6>
                <p>Available</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-9 my-4 mx-auto mx-lg-0">
          <!--Google map-->
          <div class="mapouter">
            <div class="gmap_canvas">

              <iframe class="rounded gmaps shadow-md" id="gmap_canvas" src="https://maps.google.com/maps?q=california&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no">
              </iframe>
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

              <div class="row g-0 mt-3">
                <a class="text-decoration-none text-white" href="#">
                  <div class="custom-cards-dest my-3 text-center overflow-hidden side-card-dest">
                    <img src="frontend-assets/images/destinations/destinationsImg.png" alt="">
                    <div class="info-side-dest text-center">
                      <h5 class="text-uppercase">bali</h5>
                      <h3 class="text-capitalize">pulu uluwatu</h3>
                    </div>
                  </div>
                </a>
              </div>

              <div class="row g-0 mt-3">
                <a class="text-decoration-none text-white" href="#">
                  <div class="custom-cards-dest my-3 text-center overflow-hidden side-card-dest">
                    <img src="frontend-assets/images/destinations/destinationsImg.png" alt="">
                    <div class="info-side-dest text-center">
                      <h5 class="text-uppercase">bali</h5>
                      <h3 class="text-capitalize">pulu uluwatu</h3>
                    </div>
                  </div>
                </a>
              </div>

              <div class="row g-0 mt-3">
                <a class="text-decoration-none text-white" href="#">
                  <div class="custom-cards-dest my-3 text-center overflow-hidden side-card-dest">
                    <img src="frontend-assets/images/destinations/destinationsImg.png" alt="">
                    <div class="info-side-dest text-center">
                      <h5 class="text-uppercase">bali</h5>
                      <h3 class="text-capitalize">pulu uluwatu</h3>
                    </div>
                  </div>
                </a>
              </div>


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