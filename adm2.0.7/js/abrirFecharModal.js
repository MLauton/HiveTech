// Seleciona todos os botões que podem abrir modais
const botoesAbrir = document.querySelectorAll('.abrir, .abrirDois, .abrirTres');

// Função para fechar modais
function fecharModal(modal) {
  modal.style.display = 'none';
}

// Para cada botão
botoesAbrir.forEach(botao => {
  botao.addEventListener('click', () => {
    let modal;

    if (botao.classList.contains('abrir')) {
      modal = document.getElementById('myModal');
    } else if (botao.classList.contains('abrirDois')) {
      modal = document.getElementById('myModalDois');
    } else if (botao.classList.contains('abrirTres')) {
      modal = document.getElementById('myModalTres');
    }

    if (modal) {
      modal.style.display = 'block';

      // Botão de fechar dentro do modal
      const fechar = modal.querySelector('.fechar');
      fechar.onclick = () => fecharModal(modal);

      // Clica fora do modal para fechar
      window.onclick = (event) => {
        if (event.target === modal) {
          fecharModal(modal);
        }
      };
    }
  });
});
