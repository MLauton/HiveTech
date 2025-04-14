const senha = document.getElementById("senha");
const verSenha = document.getElementById("verSenha");
const icone = document.getElementById("icone");

verSenha.addEventListener('click', () => {
    event.preventDefault();
    if (senha.type === "password") {
        senha.type = 'text';
        icone.src = '../../img/visivel.png';
        icone.alt = 'Senha visivel';
        senha.type = 'text';
    }else if (senha.type === "text") {
        senha.type = 'password';
        icone.src = '../../img/olho.png';
        icone.alt = 'Senha oculta';
    }
});