const username = document.getElementById("username");
var password = document.getElementById("password");
var confpassword = document.getElementById("confirm-password");
const email = document.getElementById("email");

const form = document.querySelector("form");
const errorMessage = document.getElementById("errorMessage");

form.addEventListener("submit", (e) =>{

    const errors = [];

    if (username.value.trim() == "") {
        errors.push("Usuario requerido")
    }

    if (email.value.trim() == "") {
        errors.push("Email requerido")
    }

    if (password.value.trim() == "") {
        errors.push("Contraseña requerida")
    }

    if (confpassword.value.trim() == "") {
        errors.push("Confirmar contraseña requerido")
    }

    if (password.value.length < 8 || confpassword.value.length < 8) {
        errors.push("La constraseña debe tener almenos 8 caracteres");
    }

    var upperCaseLetters = /[A-Z]/g;
    var numbers = /[0-9]/g;
    var specialChars = /[-’/`~!#*$@_%+=.,^&(){}[\]|;:”<>?\\]/g;
    var emailReg = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/;

    if (!password.value.match(upperCaseLetters) || !confpassword.value.match(upperCaseLetters)) {
        errors.push("La contraseña debe tener una mayúscula");
    }

    if (!password.value.match(numbers) || !confpassword.value.match(numbers)) {
        errors.push("La contraseña debe tener un número");
    }

    if (!password.value.match(specialChars) || !confpassword.value.match(specialChars)) {
        errors.push("La contraseña debe tener un símbolo especial");
    }

    if (password.value != confpassword.value) {
        errors.push("Las contraseñas no coinciden");
    }

    if (!email.value.match(emailReg)) {
        errors.push("Ingresa un email valido");
    }

    if (errors.length > 0) {
        e.preventDefault();
        errorMessage.toggleAttribute('hidden');
        errorMessage.innerHTML = errors.join('<br>');
    }

})