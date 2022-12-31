function validate() {

    let username = document.getElementById("username").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phoneNumber").value;
    let pass = document.getElementById("password").value;
    let confirmPass = document.getElementById("confirmPass").value;

    let emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    let error = document.getElementsByClassName("error");
    let redInput = document.getElementsByTagName("input");

    let capital = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

    let number = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    if (!(email.match(emailFormat))) {

        error[0].innerHTML = "Email harus sesuai dengan format";
        redInput[0].style.borderColor = "red";
        redInput[0].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;
    } else {

        error[0].innerHTML = "";
        redInput[0].style.borderColor = "#0275d8";
        redInput[0].style.boxShadow = "0 0 0 0.2rem rgba(2, 117, 216, 0.30)";

    }

    if (username === "") {

        error[1].innerHTML = "Username harus diisi";
        redInput[1].style.borderColor = "red";
        redInput[1].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else if (username.length < 5) {

        error[1].innerHTML = "Minimal karakter username 5";
        redInput[1].style.borderColor = "red";
        redInput[1].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else if (number.some(e => username.includes(e))) {

        error[1].innerHTML = "Username harus diisi alfabet";
        redInput[1].style.borderColor = "red";
        redInput[1].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else {

        error[1].innerHTML = "";
        redInput[1].style.borderColor = "#0275d8";
        redInput[1].style.boxShadow = "0 0 0 0.2rem rgba(2, 117, 216, 0.30)";

    }

    if (phone === "") {

        error[2].innerHTML = "Nomor telepon harus diisi!";
        redInput[2].style.borderColor = "red";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else if (!number.some(e => phone.includes(e)) || number === '+') {

        error[2].innerHTML = "Nomor telepon harus angka!";
        redInput[2].style.borderColor = "red";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else if (phone.length < 10) {

        error[2].innerHTML = "Minimal nomor telepon harus 10!";
        redInput[2].style.borderColor = "red";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else {

        error[2].innerHTML = "";
        redInput[2].style.borderColor = "#0275d8";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(2, 117, 216, 0.30)";

    }

    if (pass === "") {

        error[3].innerHTML = "Password harus diisi!";
        redInput[3].style.borderColor = "red";
        redInput[3].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else if (pass.length <= 8) {

        error[3].innerHTML = "Minimal karakter password 8!";
        redInput[3].style.borderColor = "red";
        redInput[3].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else if (!capital.some(e => pass.includes(e))) {

        error[3].innerHTML = "Password harus mengandung huruf kapital!";
        redInput[3].style.borderColor = "red";
        redInput[3].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else if (!number.some(e => pass.includes(e))) {

        error[3].innerHTML = "Password harus mengandung angka!";
        redInput[3].style.borderColor = "red";
        redInput[3].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else {

        error[3].innerHTML = "";
        redInput[3].style.borderColor = "#0275d8";
        redInput[3].style.boxShadow = "0 0 0 0.2rem rgba(2, 117, 216, 0.30)";

    }

    if (confirmPass !== pass) {

        error[4].innerHTML = "Password harus sama!";
        redInput[4].style.borderColor = "red";
        redInput[4].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else {

        error[4].innerHTML = "";
        redInput[4].style.borderColor = "#0275d8";
        redInput[4].style.boxShadow = "0 0 0 0.2rem rgba(2, 117, 216, 0.30)";

    }

    return true;
}