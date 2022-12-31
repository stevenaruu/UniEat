<?php
require '../controllers/functions.php';

$lists = query("SELECT * FROM sajian");

if (isset($_POST["newCategory"])) {

    if (newCategory($_POST) > 0) {
        echo "
            <script>
                alert('Category berhasil ditambah!');
                location.href = 'manageCategory.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Category gagal ditambah!');
                location.href = 'manageCategory.php';
            </script>
        ";
    }
}

if(isset($_POST["edit"])) {
    
    if(editCategory($_POST) > 0){
        echo "
            <script>
                alert('Category berhasil diubah!');
                location.href = 'manageCategory.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Category gagal diubah!');
                location.href = 'manageCategory.php';
            </script>
        ";
    }
}

if(isset($_POST["hapus"])) {

    if(deleteCategory($_POST) > 0){
        echo "
            <script>
                alert('Category berhasil dihapus!');
                location.href = 'manageCategory.php';
            </script>
        ";       
    }else{
        echo "
            <script>
                alert('Category gagal dihapus!');
                location.href = 'manageCategory.php';
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</head>

<body>
    <div class="container">
        <div class="cardWrapper">
            <div class="login border border-primary p-5" style="height: 600px;">
                <div class="text-left mb-5">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new">
                        New Category
                    </button>
                </div>

                <?php foreach ($lists as $list) : ?>
                    <div>
                        <div class="d-flex justify-content-between border-bottom align-items-center mb-4">
                            <div>
                                <?= $list["list"]; ?>
                            </div>
                            <div class="mb-2">
                                <button type="submit" class="btn btn-secondary" data-toggle="modal" data-target="#edit<?= $list["id"]; ?>" name="edit">
                                    Edit
                                </button>
                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $list["id"]; ?>" name="hapus">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <?php include './editCategory.php'; ?>
                    <?php include './deleteCategory.php'; ?>
                    <?php include_once './newCategory.php'; ?>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>