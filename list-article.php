<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include("config.php");

$article = mysqli_query(
  $mysqli,
  "SELECT article.*, users.nama, category.nama
  FROM article
  INNER JOIN users ON article.author_id = users.id
  INNER JOIN category ON article.category_id = category.id
  ORDER BY id DESC
  "
);

?>
<!-- <a href="admin/login.php">Login</a> -->

<!DOCTYPE html>
<html lang="en">

<?php include_once("head.php") ?>

<body class="overflow-x-hidden">

  <!-- Navbar -->
  <?php include_once("navbar.php") ?>
  <!-- Navbar -->

  <!-- Header -->
  <section id="page-article" class="bg-article header-margin py-4">
    <div class="container">
      <div class="row">
        <div class="col p-5">
          <h1 class="text-black">Article</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- Header -->

  <!-- List Content -->
  <section id="list-article">
    <div class="container">
      <div class="row mt-5 mb-5 d-flex justify-content-center mx-xl-5 mx-lg-4">

        <!-- 9 cards -->

        <?php while ($listArticle = mysqli_fetch_array($article)) { ?>
          <div class="col-sm-10 col-md-5 col-lg-5 col-xl-3  d-inline-block d-flex justify-content-center">
            <div class="my-3">
              <a href="detail-article.php?id=<?= $listArticle['id'] ?>" class="text-decoration-none">
                <div class=" my-3 text-center overflow-hidden card-article">
                  <img src="admin/artikel/image/<?= $listArticle['image'] ?>" class="card-img-top rounded-2" alt="...">
                  <div class="text-see-hover pt-5 mt-4">
                    <h5 class="fs-3 h-3">Lihat</h5>
                  </div>
                </div>
              </a>
              <div class="card-body">
                <p class=" ml-1 mt-2 fw-medium">
                  <span><?= $listArticle['author_id']; ?></span>
                  -
                  <span><?= $listArticle['category_id']; ?></span>
                </p>
                <a class="title-article" href="detail-article.php?id=<?= $listArticle['id'] ?>">
                  <h5 class="article"><?= $listArticle['title']; ?></h5>
                </a>
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