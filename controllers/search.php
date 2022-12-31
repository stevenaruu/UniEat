<?php

require 'functions.php';

if (isset($_SESSION["admin"])) {

    $keyword = $_GET["adminKeyword"];
} else if (isset($_SESSION["tenant"])) {

    $keyword = $_GET["tenantKeyword"];
} else if (isset($_SESSION["customer"])) {

    $keyword = $_GET["customerKeyword"];
} else {

    $keyword = $_GET["guestKeyword"];
}

$toko = query("SELECT * FROM toko WHERE
                tenant LIKE '%$keyword%' OR
                category LIKE '%$keyword%'
");
?>

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