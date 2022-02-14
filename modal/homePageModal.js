const inscription = document.querySelector("#inscription");
const connexion = document.querySelector("#connexion");
const modalInscription = document.querySelector("#modalInscription");
const modalConnexion = document.querySelector("#modalConnexion");
const button_connexion = document.querySelector("#submit-connexion");
const closes = document.querySelectorAll(".close");

const inputPassword = document.querySelector('#password');
const spanPasswordErrorSize = document.querySelector('.Size');
const spanPasswordErrorMajuscule = document.querySelector('.Maj');
const spanPasswordErrorMinuscule = document.querySelector('.Min');
const spanPasswordErrorNombre = document.querySelector('.Nbr');
const spanPasswordErrorSpecial = document.querySelector('.Special');



inscription.addEventListener('click', OpenModalInscription);
connexion.addEventListener('click', OpenModalConnexion);
inputPassword.addEventListener('input', passwordChange);



function OpenModalInscription() {
    console.log("test");
    modalInscription.style.display = "flex";





}


function OpenModalConnexion() {
    console.log("test");
    modalConnexion.style.display = "flex";
}


closes.forEach(close => {
    close.addEventListener('click', closeModal);

    function closeModal() {
        modalInscription.style.display = "none";
        modalConnexion.style.display = "none";
        modalErreur.style.display = "none";
       
    }

})




function passwordChange() {
    //Vérification Taille >=8
    if (inputPassword.value.length >= 8) {
       
    spanPasswordErrorSize.style.backgroundColor = "green";
    } else {
    spanPasswordErrorSize.style.backgroundColor = "red";
    }

    //Vérification présence d'une minuscule
    if (hasLowerCase(inputPassword.value) ==true) {
        spanPasswordErrorMinuscule.style.backgroundColor="green";
    } else {
        spanPasswordErrorMinuscule.style.backgroundColor="red";
    }

    //Vérification présence d'une majuscule
    if (hasUpperCase(inputPassword.value) ==true) {
        spanPasswordErrorMajuscule.style.backgroundColor="green";
    } else {
        spanPasswordErrorMajuscule.style.backgroundColor="red";
    }

    //Vérification présence d'un nombre
    if (hasNumber(inputPassword.value) ==true) {
        spanPasswordErrorNombre.style.backgroundColor="green";
    } else {
        spanPasswordErrorNombre.style.backgroundColor="red";
    }

    //Vérification présence d'un char special
    if (hasSpecial(inputPassword.value) ==true) {
        spanPasswordErrorSpecial.style.backgroundColor="green";
    } else {
        spanPasswordErrorSpecial.style.backgroundColor="red";
    }
}




function hasLowerCase(str) {
    return (/[a-z]/.test(str));
}

function hasUpperCase(str) {
    return (/[A-Z]/.test(str));
}

function hasNumber(str) {
    return (/[0-9]/.test(str));
}

function hasSpecial(str) {
    return (/[!-/]|[:-@]|[[-`]|[{-~]/.test(str));
}

