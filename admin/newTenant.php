<?php
require '../controllers/functions.php';

if (isset($_POST["save"])) {

    $kunci = strtolower(str_replace(' ', '', $_POST["tenant"]));

    if(addTenant($_POST) > 0 && tokoTenant($_POST) > 0) {

        $sql = "
            CREATE TABLE $kunci (
                id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                picture VARCHAR(250) NOT NULL,
                nama VARCHAR(250) NOT NULL,
                deskripsi VARCHAR(250) NOT NULL,
                price INT NOT NULL
            )
        ";

        mysqli_query($conn, $sql);

        echo "
            <script>
                alert('Akun tenant berhasil dibuat');
                location.href = '/index.php';
            </script>
        ";
    }else{
        echo "
        <script>
            alert('Akun tenant gagal dibuat');
            location.href = 'newTenant.php';
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
    <link rel="stylesheet" href="../assets/css/style2.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <main class="cardWrapper">
        <div class="newTenant border border-primary position-relative" style="height: 600px;">
            <form action="" method="POST" onsubmit="return validate()">
                <div class="form-group row">
                    <label for="tenant" class="col-sm-3 col-form-label">Tenant Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tenant" placeholder="Input tenant name" name="tenant">
                        <div class="error"></div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" placeholder="Input tenant email" name="email">
                        <div class="error"></div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phoneNumber" class="col-sm-3 col-form-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="phoneNumber" placeholder="Input tenant phone number" name="phoneNumber">
                        <div class="error"></div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Tenant Logo</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" id="image" name="image">
                        <div class="error"></div>
                    </div>
                </div>

                <div class="confirmation d-flex gap-4">
                    <a class="btn btn-outline-primary" href="/index.php" role="button">CANCEL</a>
                    <button type="submit" class="btn btn-outline-primary" name="save">SAVE</button>
                </div>
            </form>
        </div>
    </main>
    <script src="../assets/js/newTenant.js"></script>
</body>

</html>