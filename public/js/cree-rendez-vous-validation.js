function validateRendezVousForm() {
   
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

    var date = document.getElementById('date');
    const inputDate = new Date(date.value);
    const currentDate = new Date();

    if (inputDate.getTime() < currentDate.getTime() || inputDate.getTime() < currentDate.getTime() && inputDate.getDate() < currentDate.getDate() || inputDate.getTime() < currentDate.getTime() && inputDate.getMonth() < currentDate.getMonth() || inputDate.getTime() < currentDate.getTime() && inputDate.getFullYear() < currentDate.getFullYear()) {
        return marquerErreur(date, "Le temps ou Date entrer est au passe");
    }

    if (date.value.trim() == "") {
        return marquerErreur(date, "La date et requis");
    }

    
    var subject = document.getElementById('subject');
    if (subject.value.trim() === "") {
        return marquerErreur(subject, "Le Sujet du Consultation est requis");
    }

    if (subject.value.trim().length < 5) {
        return marquerErreur(subject, "Le Sujet doit contient plus de 5 caractère");
    }

    var description = document.getElementById('description');
    if (description.value.trim() === "") {
        return marquerErreur(description, "La description de la Consultation est requis");
    }
    if (description.value.trim().length < 10) {
        return marquerErreur(description, "La description doit contenir au moins 10 caractères");
    }

    var adresse = document.getElementById('adresse');
    if (adresse.value.trim() === "") {
        return marquerErreur(adresse, "Votre adresse est requis");
    }


    var telephone = document.getElementById('telephone');
    if (telephone.value.trim() === "") {
        return marquerErreur(telephone, "Veuillez saisir votre numéro de téléphone");
    }
    
    var phoneRegex = /^(0|\+212|00212)[5-7][0-9]{8}$/;
    if (!phoneRegex.test(telephone.value.replace(/\s/g, ''))) {
        return marquerErreur(telephone, "Veuillez saisir un numéro de téléphone valide");
    }

    var terms = document.getElementById('terms');
    if (!terms.checked) {
        alert("Veuillez accepter les conditions d'utilisation et la politique de confidentialité");
        terms.focus();
        return false;
    }
    
    return toutEstValide;
}