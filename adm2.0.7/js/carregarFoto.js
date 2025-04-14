document.getElementById('fotoAdmin').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();
    const preview = document.getElementById('visuFoto');
    const label = document.querySelector('.uparfoto');

    reader.onload = function(e) {
        label.style.backgroundImage = `url(${e.target.result})`;
        // Torna a imagem visível
    };

    if (file) {
        reader.readAsDataURL(file); // Lê o arquivo como uma URL base64
    } else {
        preview.src = '#'; // Reseta o preview se nenhum arquivo for selecionado
        preview.style.display = 'none';
    }
});