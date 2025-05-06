function validateLoginForm() {
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

    var email = document.getElementById('email');
    var password = document.getElementById('password');
    
    reinitialiserStyle(email);
    reinitialiserStyle(password);
    
    if (email.value.trim() === "") {
        return marquerErreur(email, "Veuillez saisir votre adresse email");
    }
    
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value.trim())) {
        return marquerErreur(email, "Veuillez saisir une adresse email valide");
    }
    
    if (password.value === "") {
        return marquerErreur(password, "Veuillez saisir votre mot de passe");
    }
    
    return toutEstValide;
}