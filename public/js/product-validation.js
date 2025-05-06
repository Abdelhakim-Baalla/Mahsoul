function validateForm() {
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

    var inputs = document.querySelectorAll('input, select, textarea');
    inputs.forEach(function(input) {
        reinitialiserStyle(input);
    });

    var nom = document.getElementById('nom');
    if (nom.value.trim() === "") {
        return marquerErreur(nom, "Le nom du produit est requis");
    }

    var categorie = document.getElementById('categorie');
    if (categorie.value === "") {
        return marquerErreur(categorie, "Veuillez sélectionner une catégorie");
    }

    var description = document.getElementById('description');
    if (description.value.trim() === "") {
        return marquerErreur(description, "La description du produit est requise");
    }
    if (description.value.trim().length < 10) {
        return marquerErreur(description, "La description doit contenir au moins 10 caractères");
    }

    var prix = document.getElementById('prix');
    if (prix.value === "") {
        return marquerErreur(prix, "Le prix est requis");
    }
    if (parseFloat(prix.value) <= 0) {
        return marquerErreur(prix, "Le prix doit être supérieur à 0");
    }

    var quantite = document.getElementById('quantite');
    if (quantite.value === "") {
        return marquerErreur(quantite, "La quantité est requise");
    }
    if (parseFloat(quantite.value) < 0) {
        return marquerErreur(quantite, "La quantité ne peut pas être négative");
    }

    var image = document.getElementById('image');
    if (image.value.trim() === "") {
        return marquerErreur(image, "L'URL de l'image n'est pas valide");
    }
    
    return toutEstValide;
}