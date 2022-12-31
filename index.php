<?php

require './controllers/functions.php';

$toko = query("SELECT * FROM toko");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniStore</title>

  <link rel="stylesheet" href="./assets/css/style.css">

  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

  <?php if (!isset($_SESSION['admin']) && !isset($_SESSION['tenant']) && !isset($_SESSION['customer'])) : ?>
    <nav class="navbar navbar-light bg-light p-3" style="height: 10vh;">
      <div class="container-fluid">
        <a class="navbar-brand">UniEat</a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="guestKeyword">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <div class="d-flex gap-2">
          <a href="./assets/html/login.php">
            <button class="btn btn-outline-primary">Login</button>
          </a>
          <a href="./assets/html/register.php">
            <button class="btn btn-outline-primary">Register</button>
          </a>
        </div>
      </div>
    </nav>
    <p class="mt-3 text-center">
      <button class="btn btn-primary" type="button" id="all">All</button>
      <button class="btn btn-primary" type="button" id="makanan">Makanan</button>
      <button class="btn btn-primary" type="button" id="minuman">Minuman</button>
      <button class="btn btn-primary" type="button" id="snack">Snack</button>
    </p>
  <?php elseif (isset($_SESSION['admin'])) : ?>
    <nav class="navbar navbar-light bg-light" style="height: 10vh; padding: 0em 3em;">
      <div class="container-fluid">
        <a class="navbar-brand">UniEat</a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="adminKeyword">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <div class="dropdown">
          <img src="">
          <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="rounded-circle" src="./assets/img/profile picture/<?= $_SESSION['profile']; ?>" style="height: 50px;">
            <span><?= $_SESSION['name']; ?></span>
          </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Home</a></li>
            <li><a class="dropdown-item" href="./admin/manageAdmin.php">Manage Admin</a></li>
            <li><a class="dropdown-item" href="./admin/manageCategory.php">Manage Category</a></li>
            <li><a class="dropdown-item" href="./controllers/logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container d-flex align-item-center justify-content-between mt-3">
      <p>Shops :</p>
      <a href="./admin/newTenant.php" class="text-decoration-none">New Tenant</a>
    </div>
  <?php elseif (isset($_SESSION['tenant'])) : ?>
    <nav class="navbar navbar-light bg-light" style="height: 10vh; padding: 0em 3em;">
      <div class="container-fluid">
        <a class="navbar-brand">UniEat</a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="tenantKeyword">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <div class="dropdown">
          <img src="">
          <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="rounded-circle" src="./assets/img/profile picture/<?= $_SESSION['profile']; ?>" style="height: 50px;">
            <span><?= $_SESSION['name']; ?></span>
          </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Home</a></li>
            <li><a class="dropdown-item" href="#">Completed Orders</a></li>
            <li><a class="dropdown-item" href="/tenant/manageItems.php">Manage Items</a></li>
            <li><a class="dropdown-item" href="/tenant/settings.php">Settings</a></li>
            <li><a class="dropdown-item" href="./controllers/logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-3">
      <p>Current Orders:</p>
    </div>
  <?php elseif (isset($_SESSION['customer'])) : ?>
    <nav class="navbar navbar-light bg-light" style="height: 10vh; padding: 0em 3em;">
      <div class="container-fluid">
        <a class="navbar-brand">UniEat</a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" class="customerKeyword">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <div class="dropdown">
          <img src="">
          <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="rounded-circle" style="height: 50px;" src="./assets/img/profile picture/<?= $_SESSION['profile']; ?>">
            <span><?= $_SESSION['name']; ?></span>
          </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Home</a></li>
            <li><a class="dropdown-item" href="#">History</a></li>
            <li><a class="dropdown-item" href="./customer/settings.php">Settings</a></li>
            <li><a class="dropdown-item" href="./controllers/logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <p class="mt-3 text-center">
      <button class="btn btn-primary" type="button" id="all">All</button>
      <button class="btn btn-primary" type="button" id="makanan">Makanan</button>
      <button class="btn btn-primary" type="button" id="minuman">Minuman</button>
      <button class="btn btn-primary" type="button" id="snack">Snack</button>
    </p>
  <?php endif ?>

  <div class="container mb-4" id="search">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php foreach ($toko as $tenant) : ?>
        <div class="col">
          <div class="card h-100">
            <img src="./assets/img/tenant image/<?= $tenant["picture"]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $tenant["tenant"]; ?></h5>
              <p class="card-text">&#9733; &#9733; &#9733; &#9733; &#9733;</p>
              <p class="card-text"><?= $tenant["deskripsi"]; ?></p>
            </div>
            <div class="card-footer">
              <small class="text-muted"><?= $tenant["category"]; ?></small>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  <script src="./assets/js/script.js"></script>
</body>

</html>