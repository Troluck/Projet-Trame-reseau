console.log("test");

const items =document.querySelectorAll(".carrousel1");
const buttons=document.querySelectorAll('.button');



buttons.forEach(button => {
 
button.addEventListener('click',Slide);

 function Slide(){
    const buttonclass= button.className;

    if (buttonclass=="button 1"){
       console.log(items[1]);
       items[1].classList.remove('active');
       items[2].classList.remove('active');
       items[0].classList.add('active');
       
       buttons[1].classList.remove('activebutton');
       buttons[2].classList.remove('activebutton');
       buttons[0].classList.add('activebutton');
    }

    if (buttonclass=="button 2"){
        console.log(items[1]);
        items[0].classList.remove('active');
        items[2].classList.remove('active');
        items[1].classList.add('active');

        buttons[0].classList.remove('activebutton');
        buttons[2].classList.remove('activebutton');
        buttons[1].classList.add('activebutton');
     }

     if (buttonclass=="button 3"){
        console.log(items[1]);
        items[0].classList.remove('active');
        items[1].classList.remove('active');
        items[2].classList.add('active');

        buttons[0].classList.remove('activebutton');
        buttons[1].classList.remove('activebutton');
        buttons[2].classList.add('activebutton');
     }


}
});




