const active = window.location.pathname;
const navLink = document.querySelectorAll('li a').
forEach (link=>{
if(link.href.includes(`${active}`)){
    link.classList.add('active');
}
})