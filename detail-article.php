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
  <section id="page-article" class="bg-article header-margin py-4">
    <div class="container">
      <div class="row">
        <div class="col p-5">
          <h1 class="h-1 text-black mt-5">Detail Article</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- Header -->

  <!-- Main detail article -->
  <div class="container">
    <div class="row my-5">
      <div class="col-12 col-lg-8">
        <img src="frontend-assets/images/article/article.png" class="img-fluid rounded" alt="...">

        <p class="info fw-medium mt-2">
          <span class="author">Ilhan</span>
          -
          <span class="category">Anime</span>
        </p>
        <h2>
          Event anime, kok cosplay genshin? "Bukan Main"
        </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores rerum, optio odio, eum cum ex animi ullam cupiditate quam nulla dicta magni assumenda velit voluptas nam sunt libero quaerat iusto?
          Quidem deleniti ut dolores! Nulla, quia inventore deserunt dolorum perspiciatis similique ea sapiente totam quibusdam velit consequuntur, ab dolor sint quidem quae dicta voluptatem dignissimos qui officia ipsam minus asperiores!
          Quibusdam deserunt rerum animi nisi iusto voluptas vero. Voluptatum, fuga iure soluta magni praesentium qui sed, corporis voluptas, illo consequatur minima aut id quasi saepe modi unde beatae? Tempora, nam!</p>
      </div>

      <!-- List any article -->
      <div class="col-0 col-lg-4 margin-side-list">
        <div class="row card mx-1">
          <h5 class="mt-3">Any Article</h5>
          <div class="mb-2">

            <div class="row g-0 mt-3">
              <div class=" col-4 col-md-3 col-lg-5">
                <img src="frontend-assets/images/article/article.png" class="img-fluid rounded" alt="...">
              </div>
              <div class="col-8 col-md-9 col-lg-7 mt-2 mt-md-4 mt-lg-0 mt-text-lg-custom">
                <div class="card-body">
                  <a href="#" class="title-article fw-medium text-elipsis">
                    Event anime, kok cosplay genshin? "Bukan Main"
                  </a>
                </div>
              </div>
            </div>

            <div class="row g-0 mt-3">
              <div class=" col-4 col-md-3 col-lg-5">
                <img src="frontend-assets/images/article/article.png" class="img-fluid rounded" alt="...">
              </div>
              <div class="col-8 col-md-9 col-lg-7 mt-2 mt-md-4 mt-lg-0 mt-text-lg-custom">
                <div class="card-body">
                  <a href="#" class="title-article fw-medium text-elipsis">
                    Event anime, kok cosplay genshin? "Bukan Main"
                  </a>
                </div>
              </div>
            </div>

            <div class="row g-0 mt-3">
              <div class=" col-4 col-md-3 col-lg-5">
                <img src="frontend-assets/images/article/article.png" class="img-fluid rounded" alt="...">
              </div>
              <div class="col-8 col-md-9 col-lg-7 mt-2 mt-md-4 mt-lg-0 mt-text-lg-custom">
                <div class="card-body">
                  <a href="#" class="title-article fw-medium text-elipsis">
                    Event anime, kok cosplay genshin? "Bukan Main"
                  </a>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
      <!-- List any article -->

    </div>


  </div>
  <!-- Main detail article -->




  <?php include_once("footer.php") ?>

</body>

</html>