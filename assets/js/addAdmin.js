function validate() {

    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phoneNumber").value;

    let emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    let error = document.getElementsByClassName("error");
    let redInput = document.getElementsByTagName("input");

    let number = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    let gender = "";

    if(name === "") {

        error[0].innerHTML = "Nama harus diisi";
        redInput[0].style.borderColor = "red";
        redInput[0].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    }else if(name.length < 5){

        error[0].innerHTML = "Minimal karakter harus 5";
        redInput[0].style.borderColor = "red";
        redInput[0].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    }else{

        error[0].innerHTML = "";
        redInput[0].style.borderColor = "#0275d8";
        redInput[0].style.boxShadow = "0 0 0 0.2rem rgba(2, 117, 216, 0.30)";

    }

    if (!(email.match(emailFormat))) {

        error[1].innerHTML = "Email harus sesuai dengan format";
        redInput[1].style.borderColor = "red";
        redInput[1].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;
    } else {

        error[1].innerHTML = "";
        redInput[1].style.borderColor = "#0275d8";
        redInput[1].style.boxShadow = "0 0 0 0.2rem rgba(2, 117, 216, 0.30)";

    }

    if (phone === "") {

        error[2].innerHTML = "Nomor telepon harus diisi";
        redInput[2].style.borderColor = "red";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else if (!number.some(e => phone.includes(e)) || number === '+') {

        error[2].innerHTML = "Nomor telepon harus angka";
        redInput[2].style.borderColor = "red";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else if (phone.length < 10) {

        error[2].innerHTML = "Minimal nomor telepon harus 10";
        redInput[2].style.borderColor = "red";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else {

        error[2].innerHTML = "";
        redInput[2].style.borderColor = "#0275d8";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(2, 117, 216, 0.30)";

    }

    if (document.getElementById("male").checked) {

        gender = document.getElementById("male").value;

    } else if (document.getElementById("female").checked) {

        gender = document.getElementById("female").value;

    } else if (gender === "") {

        error[3].innerHTML = "Gender harus diisi";
        redInput[3].style.borderColor = "red";
        redInput[3].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    } else {

        error[3].innerHTML = "";
        redInput[3].style.borderColor = "#0275d8";
        redInput[3].style.boxShadow = "0 0 0 0.2rem rgba(2, 117, 216, 0.30)";

    }

}