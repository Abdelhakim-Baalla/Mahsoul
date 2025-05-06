function validateTagForm() {
    var toutEstValide = true;

    function marquerErreur(element, message) {
        element.classList.add('border-red-300');
        element.classList.add('focus:ring-red-200');
        element.classList.remove('border-gray-300');
        element.classList.remove('focus:ring-primary-200');
        
        var parent = element.parentElement;
        if (!parent.querySelector('.fas.fa-exclamation-circle')) {
            var iconContainer = document.createElement('div');
            iconContainer.className = 'absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none';
            
            var icon = document.createElement('i');
            icon.className = 'fas fa-exclamation-circle text-red-500';
            
            iconContainer.appendChild(icon);
            parent.appendChild(iconContainer);
        }
        
        alert(message);
        element.focus();
        toutEstValide = false;
        return false;
    }

    function reinitialiserStyle(element) {
        // Réinitialiser les classes
        element.classList.remove('border-red-300');
        element.classList.remove('focus:ring-red-200');
        element.classList.add('border-gray-300');
        element.classList.add('focus:ring-primary-200');
        
        var parent = element.parentElement;
        var iconContainer = parent.querySelector('.absolute.inset-y-0.right-0');
        if (iconContainer) {
            parent.removeChild(iconContainer);
        }
    }

    var nomTag = document.getElementById('nom');
    
    reinitialiserStyle(nomTag);
    
    if (nomTag.value.trim() === "") {
        return marquerErreur(nomTag, "Le nom du tag est requis");
    }
    
    if (nomTag.value.trim().length < 3) {
        return marquerErreur(nomTag, "Le nom du tag doit contenir au moins 3 caractères");
    }
    
    
    return toutEstValide;
}