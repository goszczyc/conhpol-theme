const toggleMobileMenu = () => {
  const burger = $(".header__burger");
  const menu = document.querySelector(".header__burger-menu");
  const header = document.querySelector(".header");
  
  burger.on("click", function () {
    if(!burger.hasClass('header__burger--active')) {
      $('.header__burger-menu').css('display','flex').hide().fadeIn()
      burger.addClass('header__burger--active') 
    } else {
      $('.header__burger-menu').fadeOut()
      burger.removeClass('header__burger--active')
    }
    resize(menu, header);
  });
  
  
  window.onresize = resize(menu, header);
  
  function resize(menu, header) {
    menu.style.height = `calc(100vh - ${header.offsetHeight}px)`;
  }
};

const mobileShowSubMenu = () => {
  const parentItems = document.querySelectorAll(
    ".header__top .menu-item-has-children"
    );

  parentItems.forEach((parentItem) => {
    parentItem.firstElementChild.addEventListener("click", (e) => {
      e.preventDefault();
      const subMenu = $(e.currentTarget.nextElementSibling);
      subMenu.css("display", "flex").hide().fadeIn();
    });
  });

  $(".sub-menu-close").on("click", function () {
    $(this).parent().fadeOut();
  });
};

export { mobileShowSubMenu, toggleMobileMenu };
