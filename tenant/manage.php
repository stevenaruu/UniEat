<?php
require '../controllers/functions.php';

if (isset($_POST["add"])) {
    
    if (insertItem($_POST) > 0) {
        echo "
            <script>
                alert('Item berhasil ditambah!');
                location.href = 'manageItems.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Item gagal ditambah!');
                location.href = 'manage.php';
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
    <link rel="stylesheet" href="../assets/css/manage-item.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <main class="cardWrapper">
        <div class="login border border-primary">
            <form action="" method="POST" onsubmit="return validate()">

                <div class="form-group row mb-3">
                    <label for="picture" class="col-sm-2 col-form-label">Picture</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" id="picture" name="picture">
                        <div class="error"></div>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Input item name" name="name">
                        <div class="error"></div>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="price" placeholder="Input item price" name="price">
                        <div class="error"></div>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="desc" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="desc" placeholder="Input item description" name="desc">
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-outline-primary w-40 mt-3" type="submit" name="add" data-target="#addConfirmation" data-toggle="modal">ADD ITEMS</button>
                </div>
            </form>
        </div>
    </main>
    <script src="../assets/js/manageItem.js"></script>
</body>

</html>