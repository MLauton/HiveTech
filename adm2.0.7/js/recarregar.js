document.addEventListener("DOMContentLoaded", function () {
    evitarLoop("recarrega");
  });
  
  function evitarLoop(id) {
    // Verifica se a página já foi recarregada
    if (!localStorage.getItem("paginaRecarregada")) {
      // Verifica se o elemento com o ID especificado existe no DOM
      const elemento = document.getElementById(id);
      if (elemento) {
        // Define o estado como recarregado
        localStorage.setItem("paginaRecarregada", "true");
        // Recarrega a página
        location.reload();
      }
    }
  }
  