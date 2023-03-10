function confirmacaoEmail() {
    var email = document.getElementById("email");
    var confemail = document.getElementById("confemail");

     
    if (email.value != confemail.value) {
        confmemail.setCustomValidity("Os campos de e-mail não correspondem. Por favor, tente novamente.");
    } else {
        confemail.setCustomValidity("");
    }
}

function confirmaSenha() {
    var senha = document.getElementById("senha");
    var confsenha = document.getElementById("confsenha");

    if (senha.value != confsenha.value) {
        confsenha.setCustomValidity("Os campos de senha não correspondem. Por favor, tente novamente.");
    } else {
        confsenha.setCustomValidity("");
    }
}


