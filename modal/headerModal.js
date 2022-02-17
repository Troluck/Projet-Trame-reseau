const button_settings = document.querySelector('#settings');
const modalSettings = document.querySelector("#modalSettings");
const modalDrop = document.querySelector("#modalDrop")
const closes = document.querySelectorAll(".close");
const modalErreur = document.getElementById('modalErreur')

const inputPassword = document.querySelector('#password');
const spanPasswordErrorSize = document.querySelector('.Size');
const spanPasswordErrorMajuscule = document.querySelector('.Maj');
const spanPasswordErrorMinuscule = document.querySelector('.Min');
const spanPasswordErrorNombre = document.querySelector('.Nbr');
const spanPasswordErrorSpecial = document.querySelector('.Special');

button_settings.addEventListener('click', deleteUser);

function OpenSettings() {
    console.log("test");
    modalSettings.style.display = "flex";
}

function deleteUser() {
    console.log('aaa');
    modalDrop.style.display = "flex";
}

closes.forEach(close => {
    close.addEventListener('click', closeModal);

    function closeModal() {
        // modalSettings.style.display = "none";
        // modalErreur.style.display = "none";
        modalDrop.style.display = "none";
    }
})  
