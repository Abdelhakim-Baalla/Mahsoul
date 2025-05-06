function validateArticleForm() {
    var toutEstValide = true;

    function marquerErreur(element, message) {
        element.classList.add('border-red-500');
        element.classList.remove('border-gray-300');
        alert(message);
        element.focus();
        toutEstValide = false;
        return false;
    }

    function reinitialiserStyle(element) {
        element.classList.remove('border-red-500');
        element.classList.add('border-gray-300');
    }

    var inputs = document.querySelectorAll('input[type="text"], textarea');
    inputs.forEach(function(input) {
        reinitialiserStyle(input);
    });

    
    var titre = document.getElementById('titre');
    if (titre.value.trim() === "") {
        return marquerErreur(titre, "Le titre de l'article est requis");
    }
    if (titre.value.trim().length < 5) {
        return marquerErreur(titre, "Le titre doit contenir au moins 5 caractères");
    }

    
    var photo = document.getElementById('photo');
    if (photo.value.trim() === "") {
        return marquerErreur(photo, "L'URL de l'image n'est pas valide");
    }

    var statutSelectionne = document.querySelector('input[name="statut"]:checked');
    if (!statutSelectionne) {
        alert("Veuillez sélectionner un statut pour l'article");
        toutEstValide = false;
        return false;
    }

    var contenu = document.getElementById('contenu');
    if (contenu.value.trim() === "") {
        return marquerErreur(contenu, "Le contenu de l'article est requis");
    }
    if (contenu.value.trim().length < 50) {
        return marquerErreur(contenu, "Le contenu doit contenir au moins 50 caractères");
    }
    
    return toutEstValide;
}