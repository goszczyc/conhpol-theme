import mapSearch from "./mapSearch";

const getGeoTags = (regions = ["all"], filters = ["all"]) => {
  let markers = [];
  const ajaxData = {
    action: "getLocations",
    regions: regions,
    filters: filters,
  };

  $.ajax({
    type: "POST",
    url: admin_url.ajaxurl,
    data: ajaxData,
    success: function (response) {
      const tags = JSON.parse(response);
      const resultsContainer = document.querySelector(".map__search-shops");
      const numOfShops = document.querySelector("#num-of-results");

      let i = 0;
      let long = tags == undefined ? tags[0].coordinates.longitude : 50.0619474;
      let latt = tags == undefined ? tags[0].coordinates.lattitude : 19.9368564;
      numOfShops.innerText = tags.length;
      tags.forEach((tag) => {
        let theIcon = L.icon({
          iconUrl: tag.icon,

          iconSize: [28],
          iconAnchor: [14, 0],
        });
        markers[i] = L.marker(
          [tag.coordinates.longitude, tag.coordinates.lattitude],
          { icon: theIcon }
        ).bindPopup(`
        <div style="max-height: 350px; overflow-y:auto">
          <div>
            <img style="width:100%;height:auto" src="${tag.thumbnail}" style="display:block;">
          </div>
          <div class="map__popup-name">
            <h3>${tag.name}</h3>
            <h4>${tag.type}</h4>
          </div>
          <div class="map__popup-text">
            ${tag.data.address}
          </div>
          <div class="map__popup-text">
            ${tag.data.phone}
          </div>
          <div class="map__popup-text">${tag.data.email}</div>
          <div class="map__popup-text map__popup-text--av">${tag.avModels}</div>
          <div class="map__popup-text map__popup-text--gm">${tag.gMapLink}</div>
        </div>
        `);
        const shop = document.createElement("DIV");
        shop.setAttribute("class", "map__search-shop");
        shop.innerHTML = `
          <img src="${tag.icon}" class="map__search-shop-icon" alt="">
          <div class="map__search-shop-info">
            <h3 class="map__search-shop-name">${tag.name}</h3>
            <h4 class="map__search-shop-text map__search-shop-text--mb">${tag.type}</h4>
            <div class="map__search-shop-text">
              ${tag.data.address}
            </div>
            <div>
              ${tag.data.phone}
            </div>
            <div>
              ${tag.data.email}
            </div>
            <div class="map__search-shop-text map__search-shop-text--mb map__search-shop-text--mt">
              ${tag.data.openHours}
            </div>
          </div>`;

        resultsContainer.append(shop);
        i++;
      });
      let map = L.map("map", {
        scrollWheelZoom: false,
        gestureHandling: true,
        zoomControl: false,
      }).setView([long, latt], 8);
      L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        maxZoom: 19,
        attribution: "© OpenStreetMap",
      }).addTo(map);
      L.control
        .zoom({
          position: "topleft",
        })
        .addTo(map);
      let shops = L.layerGroup(markers);
      shops.addTo(map);
    },
    error: function (error) {
      console.log(JSON.stringify(error));
    },
  });
};

export default getGeoTags;
