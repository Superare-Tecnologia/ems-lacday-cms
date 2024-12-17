export const Navbar = {
  init: function() {
    this.cacheSelectors();
    this.bindEvents();
  },

  cacheSelectors: function() {
    this.navbarIsOpen = false;
    this.navbarMobile = document.querySelector('.navbar__mobile');
    this.navbarHandlers = document.querySelectorAll('.menu__handler');
    this.navbarAnchors = this.navbarMobile.querySelectorAll('.item a');
  },

  bindEvents: function() {
    [...this.navbarHandlers, ...this.navbarAnchors].forEach(handler =>
      handler.addEventListener('click', this.Events.handleClick)
    )
  },

  Events: {
    handleClick: function() {
      const selfNav = Navbar

      if ( !selfNav.navbarIsOpen ) {
        selfNav.navbarMobile.classList.add('active')
        return selfNav.navbarIsOpen = true
      }

      selfNav.navbarMobile.classList.remove('active')
      selfNav.navbarIsOpen = false;
    }
  }
}