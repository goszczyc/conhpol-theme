// in jQuery
const toggleOpportunityOverlay = () => {
  const toggleButtons = $(".materials__btn");

  toggleButtons.on("click", function () {
    const overlay = $(this).next();
    overlay.fadeIn();
    document.querySelector("body").style.height = "100vh";
    document.querySelector("body").style.overflow = "hidden";
    $(".materials__opportunities-exit").on("click", function () {
      overlay.fadeOut();
      document.querySelector("body").style.height = "unset";
      document.querySelector("body").style.overflow = "unset";
    });
  });
};

export default toggleOpportunityOverlay;
