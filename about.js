console.log("test");

const items =document.querySelectorAll(".carrousel1");
const nbSlide= items.length;
const right =document.querySelector('.right');
const left =document.querySelector('.left');
console.log(nbSlide);
let count=0;


function SlideSuivante(){
    items[count].classList.remove('active');

    if (count <nbSlide-1){
        count++;
    }else{
        count=0;
    }

    items[count].classList.add('active');
    console.log(count);
}

function SlidePrecedente(){
    items[count].classList.remove('active');

    if (count >0){
        count--;
    }else{
        count=nbSlide-1;
    }

    items[count].classList.add('active');
    console.log(count);
}

right.addEventListener('click',SlideSuivante);
left.addEventListener('click',SlidePrecedente);



