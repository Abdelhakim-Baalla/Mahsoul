function validateCategoryForm() {
    var toutEstValide = true;

    function marquerErreur(element, message) {
        element.classList.add('border-red-500');
        element.classList.remove('border-gray-400');
        alert(message);
        element.focus();
        toutEstValide = false;
        return false;
    }

    function reinitialiserStyle(element) {
        element.classList.remove('border-red-500');
        element.classList.add('border-gray-400');
    }

    var inputs = document.querySelectorAll('input, select, textarea');
    inputs.forEach(function(input) {
        reinitialiserStyle(input);
    });

    var categoryName = document.getElementById('categoryName');
    if (categoryName.value.trim() === "") {
        return marquerErreur(categoryName, "Le nom de la catégorie est requis");
    }

    var categoryDescription = document.getElementById('categoryDescription');
    if (categoryDescription.value.trim() === "") {
        return marquerErreur(categoryDescription, "La description de la catégorie est requise");
    }
    if (categoryDescription.value.trim().length < 5) {
        return marquerErreur(categoryDescription, "La description doit contenir au moins 5 caractères");
    }
    
    return toutEstValide;
}