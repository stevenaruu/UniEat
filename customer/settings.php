<?php 

require '/AMDP3-DEV-STEVEN-2602064802/controllers/functions.php';

if(isset($_POST["update"])) {

    if(updateCustomer($_POST) > 0){
        echo "
        <script>
            alert('Data berhasil di perbaharui!');
            alert('Silahkan re-login');
            location.href = '../controllers/logout.php';
        </script>
    ";
    }else{
        echo "
        <script>
            alert('Data gagal di perbaharui');
            location.href = 'settings.php';
        </script>
    ";
    }

}

$kunci = $_SESSION['name'];
$toko = mysqli_query($conn, "SELECT * FROM users WHERE username = '$kunci'");
$acc = mysqli_fetch_assoc($toko);

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
        <div class="newTenant border border-primary position-relative" style="height: 400px;">
            <form action="" method="POST">

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" placeholder="Current name" name="name" value="<?= $acc["username"]; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phoneNumber" class="col-sm-3 col-form-label">Phone</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="phoneNumber" placeholder="Current number phone" name="phoneNumber" value="<?= $acc["phoneNumber"]; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" placeholder="Current email" name="email" value="<?= $acc["email"]; ?>" disabled>
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