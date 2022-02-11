const inscription =document.querySelector("#inscription");
const connexion =document.querySelector("#connexion");
const modalConnexion =document.querySelector("#modalConnexion");
const modalInscription=document.querySelector("#modalInscription");
const closes=document.querySelectorAll(".close");

inscription.addEventListener('click',OpenModalInscription);
connexion.addEventListener('click',OpenModalConnexion);



function OpenModalInscription(){
    console.log("test");
    modalInscription.style.display = "flex";

}


function OpenModalConnexion(){
    console.log("test");
    modalConnexion.style.display = "flex";
}


closes.forEach(close => {
close.addEventListener('click',closeModal);

function closeModal(){
    modalInscription.style.display = "none";
    modalConnexion.style.display = "none";
}

})