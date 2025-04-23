document.addEventListener("DOMContentLoaded", function () {
    let formularios = document.querySelectorAll(".forms"); // Seleciona todos os formulários
    let botoesProximo = document.querySelectorAll(".btn.btns#proximo"); // Seleciona botões "Próximo"
    let botoesVoltar = document.querySelectorAll(".btns#voltar"); // Seleciona botões "Voltar"

    // Exibir apenas o primeiro formulário inicialmente
    formularios.forEach((form, index) => {
        form.style.display = index === 0 ? "flex" : "none";
    });

    // Adiciona funcionalidade de avançar nos formulários
    botoesProximo.forEach((botao, index) => {
        botao.addEventListener("click", function () {
            let inputs = formularios[index].querySelectorAll("input[required], textarea[required]");
            let todosPreenchidos = Array.from(inputs).every(input => input.value.trim() !== "");

            if (todosPreenchidos) {
                formularios[index].style.display = "none"; // Oculta o atual
                if (index + 1 < formularios.length) {
                    formularios[index + 1].style.display = "flex"; // Exibe o próximo
                }
            } else {
                alert("Por favor, preencha todos os campos obrigatórios antes de avançar.");
            }
        });
    });

    // Adiciona funcionalidade de voltar nos formulários (a partir do segundo)
    botoesVoltar.forEach((botao, index) => {
        botao.addEventListener("click", function () {
            formularios[index + 1].style.display = "none"; // Oculta o atual
            formularios[index].style.display = "flex"; // Exibe o anterior
        });
    });
});
