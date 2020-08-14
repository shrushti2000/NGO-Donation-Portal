const tb=document.getElementsByClassName('toggle-button')[0];
const navbarlinks =document.getElementsByClassName('navbar-links')[0];



tb.addEventListener('click',()=>{
    navbarlinks.classList.toggle('active')
})



