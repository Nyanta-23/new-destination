<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include("config.php");

$id = $_GET['id'];

$detailArticle = mysqli_query(
  $mysqli,
  "SELECT article.*, users.nama AS user_name, category.nama AS category_name
  FROM article
  INNER JOIN users ON article.author_id = users.id
  INNER JOIN category ON article.category_id = category.id
  WHERE article.id = '$id'"
);

$getData = mysqli_fetch_array($detailArticle);

$author = $getData['user_name'];
$category = $getData['category_name'];
$title = $getData['title'];
$descript = $getData['description'];
$image = $getData['image'];

$anyArticle = mysqli_query(
  $mysqli,
  "SELECT * FROM article 
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
        <img src="admin/artikel/image/<?= $image; ?>" class="img-fluid rounded" alt="...">

        <p class="info fw-medium mt-2">
          <span class="author"><?= $author; ?></span>
          -
          <span class="category"><?= $category; ?></span>
        </p>
        <h2>
          <?= $title; ?>
        </h2>
        <p><?= $descript; ?></p>
      </div>

      <!-- List any article -->
      <div class="col-0 col-lg-4 margin-side-list">
        <div class="row card mx-1">
          <h5 class="mt-3">Any Article</h5>
          <div class="mb-2">

            <?php while ($articles = mysqli_fetch_array($anyArticle)) { ?>
              <div class="row g-0 mt-3">
                <div class=" col-4 col-md-3 col-lg-5">
                  <img src="admin/artikel/image/<?= $articles['image']; ?>" class="img-fluid rounded">
                </div>
                <div class="col-8 col-md-9 col-lg-7 mt-2 mt-md-4 mt-lg-0 mt-text-lg-custom">
                  <div class="card-body">
                    <a href="detail-article.php?id=<?= $articles['id'] ?>" class="title-article fw-medium text-elipsis">
                      <?= $articles['title']; ?>
                    </a>
                  </div>
                </div>
              </div>
            <?php } ?>

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