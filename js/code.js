function validacionForm() {
    var email = document.getElementById('email').value;
    var pass = document.getElementById('psswd').value;
    var msg = document.getElementById('message');

    if (email == "" && pass == "") {
        msg.innerHTML = "Ambos campos vacios!";
    } else if (email == "") {
        msg.innerHTML = "Falta el email por rellenar!";
    } else if (pass == "") {
        msg.innerHTML = "Falta el password por rellenar!";
    } else {
        return true;
    }
    return false;
}