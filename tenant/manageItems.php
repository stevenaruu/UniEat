<?php
require '../controllers/functions.php';

$name = $_SESSION['name'];
$kunci = strtolower(str_replace(' ', '', $_SESSION['name']));

$roles = mysqli_query($conn, "SELECT * FROM users WHERE username = '$name'");
$role = mysqli_fetch_assoc($roles);

$images = mysqli_query($conn, "SELECT * FROM toko WHERE tenant = '$name'");
$image = mysqli_fetch_assoc($images);

$toko = query("SELECT * FROM $kunci");

if(isset($_POST["hapus"])) {
    if(deleteItem($_POST) > 0) {
        echo "
            <script>
                alert('Item berhasil dihapus!');
                location.href = 'manageItems.php';
            </script>
        ";      
    }else{
        echo "
            <script>
                alert('Item gagal dihapus!');
                location.href = 'manageItems.php';
            </script>
        ";    
    }
}

if(isset($_POST["edit"])) {
    if(editItem($_POST) > 0){
        echo "
            <script>
                alert('Item berhasil diupdate!');
                location.href = 'manageItems.php';
            </script>
        ";   
    }else{
        echo "
            <script>
                alert('Item berhasil dipudate!');
                location.href = 'manageItems.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniStore</title>

    <link rel="stylesheet" href="/assets/css/manage-item.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="card mb-3" style="cursor: auto;">
            <img class="card-img-top" src="/assets/img/tenant image/<?= $image["picture"]; ?>" alt="Card image cap" style="height: 15vh;">
            <div class="card-body">
                <h5 class="card-title"><?= strtoupper($name);  ?></h5>
                <p class="card-text">&#9733; &#9733; &#9733; &#9733; &#9733;</p>
                <div class="text-end">
                    <a href="manage.php" class="card-text text-decoration-none link-primary">New Items</a>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
            <?php foreach ($toko as $barang) : ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="/assets/tenant/<?= $barang["picture"]; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $barang["nama"]; ?></h5>
                            <p class="card-text"><?= $barang["deskripsi"]; ?></p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><?= $barang["price"]; ?></small>
                                <small class="d-flex gap-2">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $barang["id"]; ?>">
                                        Delete
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#edit<?= $barang["id"]; ?>">
                                        Edit
                                    </button>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include './deleteItems.php'; ?>
                <?php include './editItems.php'; ?>

            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>