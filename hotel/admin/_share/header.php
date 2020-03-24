<?php 
//session_start();
require_once "../../config/utils.php";
$loggedInUser = $_SESSION[AUTH];
?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a href="" class="nav-link" data-widget="pushmenu"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="" class="nav-link">Contact</a>
    </li>
  </ul>

  <!-- search form/ -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input type="search" placeholder="Search" class="form-control" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- right navbar links -->

  <ul class="navbar-nav ml-auto">
    <!-- messages dropdown menu -->
    <li class="nav-item dropdown">
      <a href="" class="nav-link" data-toggle="dropdown">
        <i class="fas fa-comments"></i>
        <span class="badge badge-danger"></span>
      </a>
    </li>
  </ul>
</nav>