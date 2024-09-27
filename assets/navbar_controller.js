window.addEventListener('load', () => {

  const location = window.location.pathname
  
  const selectedMenuItem = navbarSupportedContent.querySelector(`[href="${location}"]`)
  selectedMenuItem.classList.add('active')
})