window.addEventListener('load', () => {

  const location = window.location.pathname
  
  const selectedMenuItem = navbarSupportedContent.querySelector(`[href="${location}"]`)
  selectedMenuItem.classList.add('active')
  console.log('[log]', window.location.pathname)
  console.log('[log]', selectedMenuItem)
})