document.getElementById("formRegister").addEventListener("submit", function(event){
const emailInput = document.getElementById("email");
const erroEmail = document.getElementById("erroEmail");
const senhaInput = document.getElementById("senha");
const erroSenha = document.getElementById("erroSenha");

if(!validateEmail(emailInput.value)){
    erroEmail.textContent = "Email inválido";
    erroEmail.style.color = "red";
    erroEmail.style.display = "block"
    event.preventDefault();
} else{
    erroEmail.textContent = "";
    erroEmail.style.display = "none"
}

function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s2]+$/;
    return regex.test(email);
}    
if(!validateSenha(senhaInput.value)){
    erroSenha.textContent = "Sua senha deve conter 8 digitos, letras maiusculas e minusculas, números e caracteres especiais";
    erroSenha.style.color = "red";
    erroSenha.style.display = "block"
    event.preventDefault();
} else{
    erroSenha.textContent = "";
    erroSenha.style.display = "none"
}

function validateSenha(Senha) {
    const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&=+{}_#-])[A-Za-z\d@$!%*?&=+{}_#-]{8,}$/;
    return regex.test(Senha);
}

});