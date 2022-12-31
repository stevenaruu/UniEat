<?php 

    require '/AMDP3-DEV-STEVEN-2602064802/controllers/functions.php';

    // 

    if(isset($_POST["change"])) {

        $email = $_POST["email"];
        $currentPass = $_POST["currentPass"];
        $newPass = $_POST["newPass"];
        $confirmPass = $_POST["confirmPass"];

        $acc = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

        if(mysqli_num_rows($acc) === 1) {

            $data = mysqli_fetch_assoc($acc);

            if(password_verify($currentPass, $data["password"])){

                $newPass = password_hash($newPass, PASSWORD_DEFAULT);

                $query = "UPDATE users SET password = '$newPass' WHERE email = '$email'";

                mysqli_query($conn, $query);
            }

            if(mysqli_affected_rows($conn) > 0){
                echo "
                    <script>
                        alert('Password berhasil diubah!');
                        location.href = 'login.php';
                    </script>
                ";
            }else{
                echo "
                    <script>
                        alert('Password gagal diubah!');
                        location.href = 'login.php';
                    </script>
                ";
            }

        }else{
            echo "
                <script>
                    alert('Email / Password yang diinput tidak sesuai!');
                    location.href = 'resetPassword.php';
                </script>
            ";
        }
    }else{
        
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <main class="cardWrapper">
        <div class="login border border-primary">
            <h1 class="text-center">RESET PASSWORD!</h1>
            <form action="" method="POST" onsubmit="return validate()">
                <div class="mb-3">
                    <label class="form-label" for="email">Email address</label>
                    <input class="form-control" type="text" id="email" placeholder="Email" name="email">
                    <span class="error"></span>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="currentPassword">Current Password</label>
                    <input class="form-control" type="password" id="currentPassword" placeholder="Current password" name="currentPass">
                    <span class="error"></span>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="newPassword">New Password</label>
                    <input class="form-control" type="password" id="newPassword" placeholder="New password" name="newPass">
                    <span class="error"></span>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="confirmPassword">Confirm Password</label>
                    <input class="form-control" type="password" id="confirmPassword" placeholder="Confirm Password" name="confirmPass">
                    <span class="error"></span>
                </div>

                <button class="btn btn-outline-primary w-100 mt-3" type="submit" name="change">RESET PASSWORD!</button>
            </form>
        </div>
    </main>
    <script src="../js/forgetPassword.js"></script>
</body>

</html>