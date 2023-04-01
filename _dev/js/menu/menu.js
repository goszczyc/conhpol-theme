const setSubMenusHeight = () => {
  const header = document.querySelector(".header");
  const subMenus = document.querySelectorAll(".header__bottom .sub-menu");
};

const showSubMenu = () => {
  const parentItems = document.querySelectorAll(".menu-item-has-children");

  parentItems.forEach((parentItem) => {
    parentItem.firstElementChild.addEventListener("click", (e) => {
      e.preventDefault();
      const sub = document.querySelector(".header__bottom .sub-menu--active");
      const parent = document.querySelector(".current-item");
      const currentSub = e.currentTarget.nextElementSibling;
      const currentParent = e.currentTarget.parentElement;
      if (sub) sub.classList.remove("sub-menu--active");
      if (parent) parent.classList.remove("current-item");
      currentSub.classList.add("sub-menu--active");
      currentParent.classList.add("current-item");
      if (currentSub == sub) currentSub.classList.remove("sub-menu--active");
      if (currentParent == parent)
        currentParent.classList.remove("current-item");
    });
  });

  document.addEventListener("click", (e) => {
    const activeMenu = document.querySelector(".sub-menu--active");
    const maenuItems = Array.from(parentItems);
    if (!activeMenu) return;
    if (e.target != activeMenu && !maenuItems.includes(e.target.parentElement)) {
      activeMenu.classList.remove("sub-menu--active");
    }
  });
};

export { showSubMenu, setSubMenusHeight };
