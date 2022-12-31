function validate() {
    let name = document.getElementById("name").value.trim();
    let price = document.getElementById("price").value;
    let pict = document.getElementById("picture").value;

    let error = document.getElementsByClassName("error");
    let redInput = document.getElementsByTagName("input");

    let number = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    if(pict === "") {

        error[0].innerHTML = "Gambar harus diisi";
        redInput[0].style.borderColor = "red";
        redInput[0].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    }else{
        
        error[0].innerHTML = "";
        redInput[0].style.borderColor = "none";
        redInput[0].style.boxShadow = "0 0 0 0";

    }

    if(name === "") {

        error[1].innerHTML = "Nama harus diisi";
        redInput[1].style.borderColor = "red";
        redInput[1].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    }else if(name.length < 5){

        error[1].innerHTML = "Minimal karakter harus 5";
        redInput[1].style.borderColor = "red";
        redInput[1].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    }else{

        error[1].innerHTML = "";
        redInput[1].style.borderColor = "#0275d8";
        redInput[1].style.boxShadow = "0 0 0 0.2rem rgba(2, 117, 216, 0.30)";

    }

    if(price === "") {

        error[2].innerHTML = "Harga harus diisi";
        redInput[2].style.borderColor = "red";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    }else if(!number.some(e => price.includes(e))) {

        error[2].innerHTML = "Harga harus angka";
        redInput[2].style.borderColor = "red";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    }else if(price < 1000){

        error[2].innerHTML = "Minimal harga harus 1000";
        redInput[2].style.borderColor = "red";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.30)";

        return false;

    }else{

        error[2].innerHTML = "";
        redInput[2].style.borderColor = "#0275d8";
        redInput[2].style.boxShadow = "0 0 0 0.2rem rgba(2, 117, 216, 0.30)";

    }

    return true;
}
