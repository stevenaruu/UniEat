<?php

require '../controllers/functions.php';

if (isset($_POST["save"])) {
    if (addAdmin($_POST) > 0) {
        echo "
                <script>
                    alert('Akun admin berhasil dibuat!');
                    location.href = 'manageAdmin.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Akun admin gagal dibuat!');
                    location.href = 'manageAdmin.php';
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
                <div class="form-group row mb-3">
                    <label for="name" class="col-sm-3 col-form-label">Admin Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" placeholder="Input admin name" name="name">
                        <div class="error"></div>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" placeholder="Input email" name="email">
                        <div class="error"></div>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="phoneNumber" class="col-sm-3 col-form-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="phoneNumber" placeholder="Input phone number" name="phoneNumber">
                        <div class="error"></div>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                    <div class="col-sm-9">
                        <input type="radio" class="form-check-input" id="male" name="gender">
                        <label for="male">Male</label>

                        <input type="radio" class="form-check-input" id="female" name="gender">
                        <label for="female">Female</label>
                        <div class="error"></div>
                    </div>
                </div>

                <div class="confirmation d-flex gap-4">
                    <a class="btn btn-outline-primary" href="./manageAdmin.php" role="button">CANCEL</a>
                    <button type="submit" class="btn btn-outline-primary" name="save">SAVE</button>
                </div>

            </form>
        </div>
    </main>
    <script src="../assets/js/addAdmin.js"></script>
</body>

</html>