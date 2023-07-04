<?php
include_once("../config.php");
$page  = $_GET['page']; ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="./artikel/admin/dashboard.php?page=beranda" class="brand-link">
    <span class="brand-text font-weight-light">Admin Panel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=home" class="nav-link  <?php if ($page == 'home') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Beranda
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=users" class="nav-link <?php if ($page == 'users') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Users
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=kategori" class="nav-link  <?php if ($page == 'kategori') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-th-large"></i>
            <p>
              Kategori
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=artikel" class="nav-link  <?php if ($page == 'artikel') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-file"></i>
            <p>
              Artikel
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=attraction" class="nav-link  <?php if ($page == 'attraction') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-map-signs"></i>
            <p>
              Destinasi Wisata
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=province" class="nav-link  <?php if ($page == 'province') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-globe"></i>
            <p>
              Province
            </p>
          </a>
        </li>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=district" class="nav-link  <?php if ($page == 'district') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-map-marker"></i>
            <p>
              District
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=about" class="nav-link  <?php if ($page == 'about') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-info-circle"></i>
            <p>
              About
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=contact" class="nav-link  <?php if ($page == 'contact') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-phone-square"></i>
            <p>
              Contact
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=gallery" class="nav-link  <?php if ($page == 'gallery') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-tags"></i>
            <p>
              Gallery
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=attraction" class="nav-link  <?php if ($page == 'attraction') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-tags"></i>
            <p>
              Attraction
            </p>
          </a>
        </li>
        <li class="nav-item">
          <!-- <li class="nav-item">
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=attraction" class="nav-link  <?php if ($page == 'attraction') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-tags"></i>
            <p>
              Attraction
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=social" class="nav-link  <?php if ($page == 'social') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Social
            </p>
          </a>
        </li> -->
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=menu" class="nav-link  <?php if ($page == 'menu') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Menu
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/logout.php" class="nav-link">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
              Keluar
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>