<?php 

    require '/AMDP3-DEV-STEVEN-2602064802/controllers/functions.php';

    if(isset($_POST["register"])) {

        if(registration($_POST) > 0) {
            $_SESSION['customer'] = true;
            $_SESSION['name'] = $_POST["username"];
            $_SESSION['profile'] = "customer.jpg";

            header('Location: ../../index.php');
        }else{
            echo "<script>alert('Akun gagal registrasi');";
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

    <link rel="stylesheet" href="../css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <main class="cardWrapper">
        <div class="login border border-primary">
            <h1 class="text-center">REGISTER!</h1>
            <form action="" method="POST" onsubmit="return validate()">
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="text" id="email" placeholder="Email" name="email">
                    <span class="error"></span>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="username">Username</label>
                    <input class="form-control" type="text" id="username" placeholder="Username" name="username">
                    <span class="error"></span>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                    <input class="form-control" type="text" id="phoneNumber" placeholder="Phone Number"
                        name="phoneNumber">
                    <span class="error"></span>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" id="password" placeholder="Password" name="password">
                    <span class="error"></span>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="Confirmpassword">Confirm Password</label>
                    <input class="form-control" type="password" id="confirmPass" placeholder="Confirm Password"
                        name="confirmPass">
                    <span class="error"></span>
                </div>

                <button class="btn btn-outline-primary w-100 mt-3" type="submit" name="register">REGISTER</button>
            </form>
        </div>
    </main>

    <script src="../js/register.js"></script>
</body>

</html>