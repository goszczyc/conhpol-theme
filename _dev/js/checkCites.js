const sendCites = () => {
  // get form element
  const form = document.querySelector(".cites__form");
  if (!form) return;
  const container = document.querySelector(".cites__message-container");
  const citesSection = document.querySelector(".cites");
  const header = document.querySelector('.header')

  citesSection.style.minHeight = `calc(100vh - ${header.offsetHeight}px)`

  form.addEventListener("submit", (e) => {
    e.preventDefault();
    container.innerHTML = "";
    // get entered code
    const input = document.querySelector("#input").value;

    // AJAX function
    $.ajax({
      type: "POST",
      url: admin_url.ajaxurl,
      data: {
        action: "citesCheck",
        serialNumber: input,
      },
      success: function (response) {
        const res = JSON.parse(response);
        if (res.success) {
          //create Download PDF button
          const link = document.createElement("A");
          link.setAttribute("href", res.url);
          link.setAttribute("class", "cites__btn");
          link.setAttribute("download", "Certyfiakt Cites");
          link.setAttribute("target", "_blank");
          link.innerText = res.message;
          container.appendChild(link);
        } else {
          // create error message
          const message = document.createElement("P");
          message.setAttribute("class", "cites__message");
          message.innerText = res.message;
          container.appendChild(message);
        }
      },
      error: function (error) {
        console.log(JSON.stringify(error));
      },
    });
  });
};

export default sendCites;
