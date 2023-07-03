<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include("config.php");

$current_page = (isset($_GET['page'])) ? (int) $_GET['page'] : 1;

// Jumlah data per halaman
$limit = 12;

$offset = ($current_page - 1) * $limit;

$previous = $current_page - 1;
$next = $current_page + 1;

$article = mysqli_query(
  $mysqli,
  "SELECT article.*, users.nama AS user_name, category.nama AS category_name
  FROM article
  INNER JOIN users ON article.author_id = users.id
  INNER JOIN category ON article.category_id = category.id
  ORDER BY id DESC
  LIMIT $limit OFFSET $offset
  "
);

$query_count = mysqli_query(
  $mysqli,
  "SELECT COUNT(id) FROM article"
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
                  <span><?= $listArticle['user_name']; ?></span>
                  -
                  <span><?= $listArticle['category_name']; ?></span>
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

        <li class="page-item <?= ($previous < 1) ? 'd-none' : false ?>">
          <a class="page-link text-orange" aria-label="Previous" href="list-article.php?page=<?= $previous ?>">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>

        <?php for ($i = 0; $i < $total_halaman; $i++) { ?>
          <li class="page-item">
            <a class="page-link text-orange <?= ($current_page == $i + 1) ? 'active-pagination' : false ?>" href="list-article.php?page=<?= $i + 1 ?>"><?= $i + 1 ?></a>
          </li>
        <?php } ?>

        <li class="page-item <?= ($next > $max_page) ? 'd-none' : false ?>">
          <a class="page-link text-orange" aria-label="Next" href="list-article.php?page=<?= $next ?>">
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