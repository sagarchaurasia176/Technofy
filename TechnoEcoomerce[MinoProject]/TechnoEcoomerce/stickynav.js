 var header=document.getElementById('header');
 var navbar=document.getElementById('navbar');
//  now create the window onscroll screen
window.onscroll=function(){
if(window.pageYOffset >= navbar.offsetTop )
{
header.classList.add('sticky');
}
else{
    header.classList.remove('sticky');
}

}