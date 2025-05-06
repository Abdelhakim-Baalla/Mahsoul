function validateCommentForm() {
    var commentaire = document.querySelector('textarea[name="commentaire"]');
    
    commentaire.classList.remove('border-red-500');
    commentaire.classList.add('border-gray-200');
    
    if (commentaire.value.trim() === "") {
        commentaire.classList.add('border-red-500');
        commentaire.classList.remove('border-gray-200');
        
        alert("Veuillez saisir un commentaire avant de publier");
        commentaire.focus();
        return false;
    }
    
    if (commentaire.value.trim().length < 3) {
        commentaire.classList.add('border-red-500');
        commentaire.classList.remove('border-gray-200');
        
        alert("Votre commentaire doit contenir au moins 3 caractères");
        commentaire.focus();
        return false;
    }
    
    if (commentaire.value.trim().length > 500) {
        commentaire.classList.add('border-red-500');
        commentaire.classList.remove('border-gray-200');
        
        alert("Votre commentaire ne peut pas dépasser 500 caractères");
        commentaire.focus();
        return false;
    }
    
    return true;
}