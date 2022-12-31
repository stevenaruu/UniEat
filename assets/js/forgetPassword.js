function validate() {
    let newPW = document.getElementById("newPassword").value;
    let confirmPW = document.getElementById("confirmPassword").value;

    let error = document.getElementsByClassName("error");
    let redInput = document.getElementsByTagName("input");

    let capital = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

    let number = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    if (newPW === "") {

        error[2].innerHTML = "Password harus diisi!";
        redInput[2].style.borderColor = "red";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else if (newPW.length <= 8) {

        error[2].innerHTML = "Minimal karakter password 8!";
        redInput[2].style.borderColor = "red";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else if (!capital.some(e => newPW.includes(e))) {

        error[2].innerHTML = "Password harus mengandung huruf kapital!";
        redInput[2].style.borderColor = "red";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else if (!number.some(e => newPW.includes(e))) {

        error[2].innerHTML = "Password harus mengandung angka!";
        redInput[2].style.borderColor = "red";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else {

        error[2].innerHTML = "";
        redInput[2].style.borderColor = "#0275d8";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(2, 117, 216, 0.30)";

    }

    if (confirmPW !== newPW) {

        error[3].innerHTML = "Password harus sama!";
        redInput[3].style.borderColor = "red";
        redInput[3].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else {

        error[3].innerHTML = "";
        redInput[3].style.borderColor = "#0275d8";
        redInput[3].style.boxShadow = "0 0 0 0.2rem rgba(2, 117, 216, 0.30)";

    }

    return false;

}
