<?php

require '/AMDP3-DEV-STEVEN-2602064802/controllers/functions.php';

if(isset($_POST["update"])){
    updateTenant($_POST);
    echo "
        <script>
            alert('Data berhasil di perbaharui!');
            alert('Silahkan re-login');
            location.href = '../controllers/logout.php';
        </script>
    ";
}

$kunci = $_SESSION['name'];
$toko = mysqli_query($conn, "SELECT * FROM toko WHERE tenant = '$kunci'");
$acc = mysqli_fetch_assoc($toko);

$lists = query("SELECT * FROM sajian");

$_SESSION['img'] = $acc["picture"]; 
$_SESSION['id'] = $acc["id"]; 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniStore</title>
    <link rel="stylesheet" href="../assets/css/style2.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <main class="cardWrapper">
        <div class="newTenant border border-primary position-relative" style="height: 700px;">
            <form action="" method="POST">

                <div class="form-group row">
                    <label for="picture" class="col-sm-3 col-form-label">Current logo: </label>
                    <div class="col-sm-9">
                        <img src="../assets/img/tenant image/<?= $acc["picture"]; ?>" style="width: 40%; object-fit: cover; height: 20vh;">
                        <input type="file" class="form-control-file mt-3" id="picture" name="picture">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" placeholder="Input name" name="name" value="<?= $acc["tenant"]; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="category" class="col-sm-3 col-form-label">Category</label>
                    <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example" name="category" id="category">
                            <option selected><?= $acc["category"]; ?></option>
                            <?php foreach($lists as $list) : ?>
                            <option value="<?= $list["list"]; ?>"><?= $list["list"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="desc" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="desc" rows="3" placeholder="Input description" name="desc"><?= $acc["deskripsi"]; ?></textarea>
                    </div>
                </div>

                <div class="confirmation d-flex gap-4">
                    <a class="btn btn-outline-primary" href="/index.php" role="button">CANCEL</a>
                    <button type="submit" class="btn btn-outline-primary" name="update">UPDATE</button>
                </div>

            </form>
        </div>
    </main>
</body>

</html>