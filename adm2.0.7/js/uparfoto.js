document.getElementById('fotoAdmin').addEventListener('change', function () {
    const file = this.files[0]; // Obtém o arquivo selecionado
    const label = document.querySelector('.uparFoto'); // Seleciona o label estilizado

    if (file) {
        const reader = new FileReader();
        reader.onload = function () { // Define a imagem como fundo
            label.style.backgroundSize = 'cover'; // Ajusta para cobrir todo o label
            label.style.backgroundPosition = 'center'; // Centraliza a imagem
        };

        reader.readAsDataURL(file); // Lê o arquivo como uma URL base64
    }
});
