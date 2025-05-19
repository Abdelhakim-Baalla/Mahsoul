function validateFiltrageForm() {

    console.log('kkkkkkkkk');
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

   

    
    var status = document.getElementById('status');
    if (status.value.trim() === "") {
        return marquerErreur(status, "Le status est requis");
    }

    
    
    return toutEstValide;
}