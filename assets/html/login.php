<?php 

    require '/AMDP3-DEV-STEVEN-2602064802/controllers/functions.php';

    if(isset($_POST["login"])) {

        $email = $_POST["email"];
        $password = $_POST["password"];

        $acc = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' OR username = '$email'");

        if(mysqli_num_rows($acc) === 1) {

            $data = mysqli_fetch_assoc($acc);

            if(password_verify($password, $data["password"]) && $data["roles"] == "admin") {
                $_SESSION['admin'] = true;
                $_SESSION['name'] = $data["username"];
                $_SESSION['profile'] = $data["profile"];

                header('Location: ../../index.php');
                exit;
            }else if(password_verify($password, $data["password"]) && $data["roles"] == "tenant"){
                $_SESSION['tenant'] = true;
                $_SESSION['name'] = $data["username"];
                $_SESSION['profile'] = $data["profile"];

                header('Location: ../../index.php');
                exit;
            }else if(password_verify($password, $data["password"]) && $data["roles"] == "customer"){
                $_SESSION['customer'] = true;
                $_SESSION['name'] = $data["username"];
                $_SESSION['profile'] = $data["profile"];

                header('Location: ../../index.php');
                exit;
            }else{
                echo "
                <script>
                    alert('username/password salah');
                    location.href = 'login.php';
                </script>
                ";
            }


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
            <h1 class="text-center">LOGIN!</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label" for="email">Email address</label>
                    <input class="form-control" type="text" id="email" placeholder="Email / Username" name="email">
                    <span class="error"></span>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" id="password" placeholder="Password" name="password">
                    <span class="error"></span>
                </div>

                <div class="forget mb-3">
                    <a href="resetPassword.php">Forget your password?</a>
                </div>

                <button class="btn btn-outline-primary w-100 mt-3" type="submit" name="login">LOGIN</button>
            </form>
        </div>
    </main>

</body>

</html>