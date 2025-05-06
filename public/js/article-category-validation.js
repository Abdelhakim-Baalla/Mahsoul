function validateCategorySelection() {
    var categorieSelectionnee = document.querySelector('input[name="categorie_id"]:checked');
    
    if (!categorieSelectionnee) {
        alert("Veuillez sélectionner une catégorie pour l'article");
        return false;
    }
    
    return true;
}