function validateRegisterForm() {
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

    var type = document.getElementById('type');
    var prenom = document.getElementById('prenom');
    var nom = document.getElementById('nom');
    var email = document.getElementById('email');
    var telephone = document.getElementById('telephone');
    var adresse = document.getElementById('adresse');
    var password = document.getElementById('password');
    var password_confirmation = document.getElementById('password_confirmation');
    var terms = document.getElementById('terms');
    
    var inputs = [type, prenom, nom, email, telephone, adresse, password, password_confirmation];
    inputs.forEach(function(input) {
        reinitialiserStyle(input);
    });
    
    if (type.value === "") {
        return marquerErreur(type, "Veuillez sélectionner un type de compte");
    }
    
    if (prenom.value.trim() === "") {
        return marquerErreur(prenom, "Veuillez saisir votre prénom");
    }
    
    if (nom.value.trim() === "") {
        return marquerErreur(nom, "Veuillez saisir votre nom");
    }
    
    if (email.value.trim() === "") {
        return marquerErreur(email, "Veuillez saisir votre adresse email");
    }
    
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value.trim())) {
        return marquerErreur(email, "Veuillez saisir une adresse email valide");
    }
    
    if (telephone.value.trim() === "") {
        return marquerErreur(telephone, "Veuillez saisir votre numéro de téléphone");
    }
    
    var phoneRegex = /^(0|\+212|00212)[5-7][0-9]{8}$/;
    if (!phoneRegex.test(telephone.value.replace(/\s/g, ''))) {
        return marquerErreur(telephone, "Veuillez saisir un numéro de téléphone valide");
    }
    
    if (adresse.value.trim() === "") {
        return marquerErreur(adresse, "Veuillez saisir votre adresse");
    }
    
    if (password.value === "") {
        return marquerErreur(password, "Veuillez saisir un mot de passe");
    }
    
    if (password.value.length < 8) {
        return marquerErreur(password, "Le mot de passe doit contenir au moins 8 caractères");
    }
    
    if (password_confirmation.value === "") {
        return marquerErreur(password_confirmation, "Veuillez confirmer votre mot de passe");
    }
    
    if (password.value !== password_confirmation.value) {
        return marquerErreur(password_confirmation, "Les mots de passe ne correspondent pas");
    }
    
    if (!terms.checked) {
        alert("Veuillez accepter les conditions d'utilisation et la politique de confidentialité");
        terms.focus();
        return false;
    }
    
    return toutEstValide;
}