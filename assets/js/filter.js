// Fonction de filtrage des éléments en fonction de la catégorie sélectionnée
function filterElements(category) {
    // Récupération de tous les éléments à filtrer
    const elements = document.querySelectorAll(".col.mb-4");
    // Suppression de la classe "active" de tous les boutons de filtre
    document.querySelectorAll(".filter").forEach(button => {
      button.classList.remove("active");
    });
    // Si la catégorie sélectionnée est "tous", on affiche tous les éléments
    if (category === "all") {
      elements.forEach(element => {
        element.style.display = "block";
        element.classList.remove("filtering");
      });
    }
    // Sinon, on n'affiche que les éléments de la catégorie sélectionnée
    else {
      elements.forEach(element => {
        if (element.dataset.category === category) {
          element.style.display = "block";
          element.classList.remove("filtering");
        } else {
          element.classList.add("filtering");
          setTimeout(() => {
            element.style.display = "none";
          }, 300);
        }
      });
    }
    
  }
  // Ajout d'un écouteur d'événement "click" sur chaque bouton de filtre
  document.querySelectorAll(".filter").forEach(button => {
    button.addEventListener("click", function() {
      // Récupération de la catégorie associée au bouton
      const category = this.dataset.category;
      // Filtrage des éléments en fonction de la catégorie sélectionnée
      filterElements(category);
      // Animation du bouton sélectionné
      this.style.transform = "scale(1.1)";
      setTimeout(() => {
        this.style.transform = "none";
      }, 1000);
    });
  });