const toggler = document.getElementById('navbar-toggler');
const navbarCollapse = document.getElementById('navbarTogglerDemo01')

const handleNavbar = () => {
  const expanded = toggler.getAttribute('aria-expanded')

  if(!expanded ){
    expanded = true
    navbarCollapse.classList.add('show')
  }else{
    expanded = false
    navbarCollapse.classList.remove('show')
  }
}
function init(){

  toggler.addEventListener('click',handleNavbar)
}

init()