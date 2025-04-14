document.addEventListener("DOMContentLoaded", () => {
    const frases = [
        "Você está logado como administrador",

        "Bem-vindo ao seu painel de controle.",

        "Pronto para gerenciar?",

        "Tudo bem?",

        "Você está logado como administrador. Vamos começar!",

        "O painel está à sua disposição.",

        "É um prazer inenarrável tê-lo de volta.",

        "Seu painel de controle está pronto para uso."
    ];

    let index = 0;
    const elementoFrase = document.getElementById("Frases");


    index = Math.floor(Math.random() * frases.length) % frases.length;


    elementoFrase.textContent = frases[index];
    void elementoFrase.offsetWidth;
    elementoFrase.style.animation = "none";
    elementoFrase.style.animation = "proLado 1s";
    elementoFrase.textContent = frases[index];
})