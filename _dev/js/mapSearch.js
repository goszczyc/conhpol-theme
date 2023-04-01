import getGeoTags from "./getGeoTags";

const mapSearch = () => {
  const searchForm = document.querySelector(".map__search-form");

  if (!searchForm) return;

  searchForm.addEventListener("submit", (e) => {
    e.preventDefault();
    let filters = [],
      regions = [];
    filters = ["all"];
    regions = ["all"];
    const filtersElements = document.querySelectorAll(
      '[name="filter"]:checked'
    );
    const regionsInput = document.querySelector("#region").value;
    if (regionsInput) {
      regions = regionsInput.toLowerCase().split(/[,\s]+/);
    }
    if (filtersElements) {
      let i = 0;
      filtersElements.forEach((filter) => {
        filters[i] = filter.value;
        i++;
      });
    }
    const removeOldMap = new Promise((resolve, reject) => {
      const mapka = document.querySelector("#map");
      const shops = document.querySelector(".map__search-shops");
      if (mapka) {
        if (shops) shops.innerHTML = "";
        mapka.remove();
        resolve("succcess");
      }
    });

    removeOldMap.then(function () {
      return new Promise((resolve, reject) => {
        const newMap = document.createElement("DIV");
        const mapCont = document.querySelector(".map__container");
        newMap.setAttribute("id", "map");
        newMap.setAttribute("style", "min-height: 700px");
        mapCont.appendChild(newMap);
        resolve("success");
      }).then(getGeoTags(regions, filters));
    });
  });
};

export default mapSearch;
