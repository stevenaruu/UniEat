<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "unieat");


// if ($conn) {
//     echo "anda berhasil connect!";
// }

if (!$conn) {
    echo "anda gagal connect!";
}

function registration($data) {

    global $conn;

    $email = $data["email"];
    $username = stripslashes($data["username"]);
    $phoneNumber = $data["phoneNumber"];
    $password = $data["password"];

    // checking an email or phone number used or no
    $same = mysqli_query($conn, "SELECT email, phoneNumber FROM users WHERE email = '$email' OR phoneNumber = '$phoneNumber'");

    if (mysqli_fetch_assoc($same)) {
        echo "
                <script>
                    alert('Anda sudah memiliki akun, silahkan login!');
                    document.location.href = 'login.php';
                </script>
            ";
        return false;
    }

    // encrypt password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users VALUES ('', 'customer.jpg', '$email', '$username', '$phoneNumber', '$password', 'customer')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function query($query) {
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function insertItem($data) {
    global $conn;

    $picture = $data["picture"];
    $name = $data["name"];
    $desc = $data["desc"];
    $price = $data["price"];

    $kunci = strtolower(str_replace(' ', '', $_SESSION['name']));

    $query = "INSERT INTO $kunci VALUES ('', '$picture', '$name', '$desc', '$price')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function addTenant($data) {
    global $conn;

    $email = $data["email"];
    $username = $data["tenant"];
    $phoneNumber = $data["phoneNumber"];

    // default password
    $password = "Tenant123";

    // encrypt password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users VALUES ('', 'tenant.jpg', '$email', '$username', '$phoneNumber', '$password', 'tenant')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tokoTenant($data) {
    global $conn;

    $image = $data["image"];
    $username = $data["tenant"];

    $query = "INSERT INTO toko VALUES ('', '$image', '$username', '', '')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function updateTenant($data) {
    global $conn;

    $id = $_SESSION['id'];

    if ($data["picture"] == "") {
        $image = $_SESSION['img'];
    } else {
        $image = $data["picture"];
    }

    $name = $data["name"];
    $category = $data["category"];
    $desc = $data["desc"];

    $username = $_SESSION['name'];

    $query = "UPDATE toko SET
                    id = '$id',
                    picture = '$image',
                    tenant = '$name',
                    deskripsi = '$desc',
                    category = '$category'
                WHERE tenant = '$username'
    ";

    mysqli_query($conn, $query);

    $query = "UPDATE users SET
                username = '$name'
            WHERE username = '$username'
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function updateCustomer($data) {
    global $conn;

    $name = $data["name"];
    $phoneNumber = $data["phoneNumber"];

    $username = $_SESSION['name'];

    $query = "UPDATE users SET
                    username = '$name',
                    phoneNumber = '$phoneNumber'
                WHERE username = '$username'
        ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function newCategory($data) {
    global $conn;

    $name = $data["name"];

    $query = "INSERT INTO sajian VALUES ('', '$name')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editCategory($data) {
    global $conn;

    $name = $data["name"];
    $id = $data["id"];

    $query = "UPDATE sajian SET list = '$name' WHERE id = '$id'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deleteCategory($data) {
    global $conn;

    $id = $data["id"];

    $query = "DELETE FROM sajian WHERE id = '$id'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deleteItem($data) {
    global $conn;

    $id = $data["id"];

    $kunci = strtolower(str_replace(' ', '', $_SESSION['name']));

    $query = "DELETE FROM $kunci WHERE id = '$id'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editItem($data) {
    global $conn;

    if($data["picture"] == ""){
        $picture = $data["pictureHidden"];
    }else{
        $picture = $data["picture"];
    }
    $name = $data["name"];
    $price = $data["price"];
    $desc = $data["desc"];

    $id = $data["id"];

    $kunci = strtolower(str_replace(' ', '', $_SESSION['name']));

    $query = "UPDATE $kunci SET
                picture = '$picture',
                nama = '$name',
                deskripsi = '$desc',
                price = '$price'
            WHERE id = '$id'
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function addAdmin($data) {
    global $conn;

    $name = $data["name"];
    $email = $data["email"];
    $phoneNumber = $data["phoneNumber"];

    // default password
    $password = "Admin123";

    // encrypt password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users VALUES ('', 'admin.jpg', '$email', '$name', '$phoneNumber', '$password', 'admin')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function resetPassword($data) {

//     global $conn;

//     $email = $data["email"];
//     $currentPass = $data["currentPassword"];
//     $newPass = $data["newPassword"];

//     $acc = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

//     if(mysqli_num_rows($acc) === 1) {

//         $data = mysqli_fetch_assoc($acc);

//         if(password_verify($currentPass, $data["password"])){

//             $newPass = password_hash($newPass, PASSWORD_DEFAULT);

//             $query = "UPDATE users SET password = '$newPass' WHERE email = '$email'";

//             mysqli_query($conn, $query);
//         }
//     }

//     return mysqli_affected_rows($conn);

// }
