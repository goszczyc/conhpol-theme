const changeLogo = () => {
  const logo = document.querySelector(
    ".header:not(.header--sub) .header__logo"
  );

  if (!logo) return;

  if (window.innerWidth < 992)
    logo.setAttribute(
      "src",
      admin_url.templateDirectory + "/dist/images/logo-black.svg"
    );

  window.addEventListener("resize", (e) => {
    if (window.innerWidth < 992) {
      logo.setAttribute(
        "src",
        admin_url.templateDirectory + "/dist/images/logo-black.svg"
      );
    } else {
      logo.setAttribute(
        "src",
        admin_url.templateDirectory + "/dist/images/logo-white.svg"
      );
    }
  });
};

export default changeLogo;